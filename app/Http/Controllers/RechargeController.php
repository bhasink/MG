<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;
use LaravelDaily\Invoices\Invoice;
use LaravelDaily\Invoices\Classes\Buyer;
use LaravelDaily\Invoices\Classes\InvoiceItem;
use LaravelDaily\Invoices\Classes\Party;
use GuzzleHttp\Client;
use GuzzleHttp\ClientErrorResponseException;
use Carbon\Carbon;
use App\Product;
use App\WaiverForm;
use Hash;
use Validator;
use Session;
use Storage;
use PDF;
use Tzsk\Payu\Facade\Payment;

class RechargeController extends Controller
{

    public $t_token;

    public function __construct()
    {
        $this->t_token = $this->get_token();
    }

    public function wavier_form(){

        if (Auth::user()->phone_verified_at == null){
            return redirect('/phone/verify');
        }

        return view('pages.wavier-tc');
    }

    public function recharge()
    {

        if (Auth::check()) {

            $data = array();
            $get_recharge_data = $this->get_recharge_data();
            $get_recharge_data = $get_recharge_data['value'];
            $data['get_recharge_data'] = $get_recharge_data;

            return view('pages.recharge',compact('data'));

        }else{

            return redirect('/blogin');

        }
    }

    public function get_recharge_data(){

        $token= $this->t_token;

        $headers = [
            'Content-Type' => 'application/json',
            'Authorization' => 'Bearer '.$token->token,
            'Accept' => 'application/json',
        ];

        $client = new Client([
            'headers' => $headers
        ]);

        $url = 'https://mgravity.api.crm8.dynamics.com/api/data/v9.1/productpricelevels?fetchXml=%3Cfetch%20distinct=%27false%27%20mapping=%27logical%27%20output-format=%27xml-platform%27%20version=%271.0%27%3E%3Centity%20name=%27productpricelevel%27%3E%3Cattribute%20name=%27productid%27/%3E%3Cattribute%20name=%27amount%27/%3E%3Corder%20descending=%27false%27%20attribute=%27productid%27/%3E%3Cfilter%20type=%27and%27%3E%3Ccondition%20attribute=%27pricelevelid%27%20value=%27{7F01F574-57FD-E911-A811-000D3A0A7551}%27%20uitype=%27pricelevel%27%20uiname=%27Gurugram%20Price%20List%27%20operator=%27eq%27/%3E%3Ccondition%20attribute=%27amount%27%20value=%270%27%20operator=%27gt%27/%3E%3C/filter%3E%3Clink-entity%20name=%27product%27%20alias=%27af%27%20link-type=%27inner%27%20to=%27productid%27%20from=%27productid%27%3E%3Cfilter%20type=%27and%27%3E%3Ccondition%20attribute=%27parentproductid%27%20value=%27{9BF28332-73A9-EA11-A812-000D3A0A7551}%27%20uitype=%27product%27%20uiname=%27Gaming%20Card%27%20operator=%27eq%27/%3E%3C/filter%3E%3C/link-entity%3E%3C/entity%3E%3C/fetch%3E';

        try {

            $get_recharge_req = $client->request('GET', $url);
            $status_code = $get_recharge_req->getStatusCode();

        }catch (\GuzzleHttp\Exception\ClientException $e) {
            $response = $e->getResponse();
            $response->getBody()->getContents();
            $status_code = $response->getStatusCode();
            return $status_code;
        }

        $get_recharge_req =json_decode($get_recharge_req->getBody()->read(1024*100000),true);

        return $get_recharge_req;

    }

    public function recharge_order(Request $request){

        $timestamp = Carbon::now()->getPreciseTimestamp(3);

        $get_random_value = 'WEB'.$timestamp;

        $order_id = session()->get('new_order_id_val');

        if ($order_id == null){

            session()->put('new_order_id_val', $get_random_value);
        }

        $order_id = session()->get('new_order_id_val');


        $get_customer_id = $this->check_leads_exist_in_crm();
        $recharge_data = $request->recharge_data;
        $recharge_data = json_decode($recharge_data);
        $amount = $recharge_data->amount;
        $productid_value = $recharge_data->productid_value;
        $transactioncurrencyid_value = $recharge_data->transactioncurrencyid_value;
        $productpricelevelid = $recharge_data->productpricelevelid;
        $store_guid = "d298c41f-ea7d-eb11-a812-000d3af23732";
        $price_list_id = "7f01f574-57fd-e911-a811-000d3a0a7551";
        $dt = Carbon::now();
        $date_now = $dt->toDateString();



        $options = [];

        $options[] = [
            "ProductGuid" => "$productid_value",
            "SlotGuid" => "",
            "mg_subproduct" => ""
        ];

        $fields = array(
            'OrderName' => "$get_random_value",
            'CustomerGuid'=>"$get_customer_id",
            'StoreGuid' => "$store_guid",
            'PriceListGuid' =>"$price_list_id",
            'RequestedDelivery' =>"$date_now",
            'orderlines' =>$options
        );

//        dd($fields);

        $url = 'https://prod-14.centralindia.logic.azure.com:443/workflows/de6ad0edf5024b58aa75e0efcbf7443b/triggers/manual/paths/invoke?api-version=2016-06-01&sp=%2Ftriggers%2Fmanual%2Frun&sv=1.0&sig=7nGcdASSFurAiEkoSs5VM1VwAXIP-P_b4BnzzhFd62Y';

        $headers = [
            'Cache-Control: no-cache',
            'Content-Type: application/json',
            'Accept : application/json'
        ];

        $client = new Client([
            'headers' => $headers
        ]);

        $create_recharge_order= $request = $client->post($url,[
            \GuzzleHttp\RequestOptions::JSON => $fields
        ]);

        $create_recharge_order->getStatusCode();

        $create_recharge_order = json_decode($create_recharge_order->getBody()->read(1024*100000));

        session()->put('create_recharge_order',$create_recharge_order);


        $attributes = [
            'txnid' => $create_recharge_order->OrderID,
            'amount' => (float)$create_recharge_order->TotalAmountInclTax,
            'productinfo' => "Microgravity Ventures Private Limited",
            'firstname' => Auth::user()->name,
            'email' => Auth::user()->email,
            'phone' => Auth::user()->phone,
        ];

        return Payment::make($attributes, function ($then) {
            $then->redirectAction('MainController@contactless_status');
        });

    }

    public function contactless_status(){
        $data = array();
        $tzsk_payu_data = session()->get('tzsk_payu_data.payment');

        if ($tzsk_payu_data != null){

            $payment = Payment::capture();

            $check = $payment->isCaptured();

            if ($check == true){

                $payment->save();

                $order_id = $tzsk_payu_data['txnid'];

                $get_recharge_data = session()->get('create_recharge_order');


                $order_id = $get_recharge_data->OrderID;
                $amount = $get_recharge_data->TotalAmountInclTax;
                $order_guid = $get_recharge_data->OrderGUID;

                $this->payment_creation_api($tzsk_payu_data,$order_id,$amount,$order_guid);


            }

            $data['check'] = $check;
            $data['payment'] = $tzsk_payu_data;
        }
        else{
            return redirect('/');
        }

        return view('pages.contactless_thankyou',compact('data'));

    }


    public function payment_creation_api($data,$order_id,$amount,$order_guid){

        $getdate = json_decode($data['data']);
        $mihpayid = $data['mihpayid'];

        if (isset($data['cardnum'])){
            $cardnum = $data['cardnum'];
        }else{

            $cardnum = "Undefined";
        }

//        $issuing_bank = $data['issuing_bank'];
        $date = date('Y-m-d',strtotime($getdate->addedon));

        $token= $this->t_token;

        $fields = array(
            'Token' => "$token->token",
            'PaymntModes' => array (
                0 =>
                    array (
                        'Name' => "$order_id",
                        'PaymentMethod' => "c42f8b6f-73b5-ea11-a812-000d3a0a7551",
                        'PaymentType' => 690970004,
                        'Amount' => (float)$amount,
                        'Date' => "$date",
                        'PaymentTrnID' => "$mihpayid",
                        'CardNo' => "$cardnum",
                        'BankName' => "Undefined"
                    ),
            ),
            'Order' =>$order_guid,
        );


        \Log::info($fields);

        $url = 'https://prod-08.centralindia.logic.azure.com:443/workflows/e1926475054b4d59bd82c797acf9fb45/triggers/manual/paths/invoke?api-version=2016-06-01&sp=%2Ftriggers%2Fmanual%2Frun&sv=1.0&sig=tEqUVKTHVlUg69Jqi1ATW3IBj53csILBZo-tYOfIfho';

        $headers = [
            'Cache-Control: no-cache',
            'Content-Type: application/json; charset=utf-8',
            'Accept : application/json'
        ];

        $client = new Client([
            'headers' => $headers
        ]);

        $create_payment_req= $request = $client->post($url,[
            \GuzzleHttp\RequestOptions::JSON => $fields
        ]);

        $create_payment_req->getStatusCode();

        $create_payment_req = json_decode($create_payment_req->getBody()->read(1024*100000));

        return $create_payment_req;

    }



    public function order(){

        if (Auth::user()->phone_verified_at == null){
            return redirect('/phone/verify');
        }

        return view('pages.payment');
    }


    public function profile(){

        if (Auth::user()->phone_verified_at == null){
            return redirect('/phone/verify');
        }

        $my_orders = $this->api_to_get_my_orders();

        $check_customer_data = $this->check_leads_exist_in_crm_complete_details();

//        dd($my_orders);

        return view('pages.profile',compact('my_orders','check_customer_data'));
    }

    public function get_invoice_data_from_crm($order_guid){

        $token= $this->t_token;
        $get_customer_guid = $this->check_leads_exist_in_crm();

        $url = 'https://mgravity.api.crm8.dynamics.com/api/data/v9.1/invoices?$select=_contactid_value,createdon,datedelivered,description,invoiceid,invoicenumber,mg_canceldate,mg_generatecreditnote,_mg_store_value,msdyn_invoicedate,msdyn_ordertype,name,mg_discountamount,mg_finalamountafterdiscount,mg_totalamountinctax,mg_totaltaxamount,mg_cgst,mg_igst,mg_sgst,mg_utgst&$expand=salesorderid($select=ordernumber,requestdeliveryby),invoice_details($select=createdon,description,invoicedetailid,invoicedetailname,invoiceid,priceperunit,quantity,mg_discountamount,mg_finalamountafterdisc,tax,mg_totalamountinctax,mg_saccode),new_invoice_msdyn_payment_invoice($select=createdon,mg_bankname,mg_bankpaymentrefno,mg_baseamount,mg_canceldate,mg_cgst,mg_igst,mg_sgst,mg_utgst,msdyn_amount,msdyn_date,msdyn_paymenttype,_msdyn_paymentmethod_value;$expand=msdyn_paymentmethod($select=msdyn_name))&$filter=_salesorderid_value eq '.$order_guid.' and  _contactid_value eq '.$get_customer_guid.'';

        $headers = [
            'Cache-Control: no-cache',
            'Content-Type: application/json; charset=utf-8',
            'Accept : application/json',
            'Authorization' => 'Bearer '.$token->token,
        ];

        $client = new \GuzzleHttp\Client([
            'headers' => $headers
        ]);

        try {

            $get_invoice_data = $client->request('GET', $url);
            $get_invoice_data->getStatusCode();


        }catch (\GuzzleHttp\Exception\ClientException $e) {
            $response = $e->getResponse();
            $response->getBody()->getContents();
            $status_code = $response->getStatusCode();

            if ($status_code == 400){

                return abort(500, "You can't perform this action! ");

            }

        }

        $get_invoice_data =json_decode($get_invoice_data->getBody()->read(1024*100000),true);

        return $get_invoice_data;
    }


    public function get_invoice_data_from_crm_api($order_guid,$cust_guid){

        $token= $this->t_token;

        $url = 'https://mgravity.api.crm8.dynamics.com/api/data/v9.1/invoices?$select=_contactid_value,createdon,datedelivered,description,invoiceid,invoicenumber,mg_canceldate,mg_generatecreditnote,_mg_store_value,msdyn_invoicedate,msdyn_ordertype,name,mg_discountamount,mg_finalamountafterdiscount,mg_totalamountinctax,mg_totaltaxamount,mg_cgst,mg_igst,mg_sgst,mg_utgst&$expand=salesorderid($select=ordernumber,requestdeliveryby),invoice_details($select=createdon,description,invoicedetailid,invoicedetailname,invoiceid,priceperunit,quantity,mg_discountamount,mg_finalamountafterdisc,tax,mg_totalamountinctax,mg_saccode),new_invoice_msdyn_payment_invoice($select=createdon,mg_bankname,mg_bankpaymentrefno,mg_baseamount,mg_canceldate,mg_cgst,mg_igst,mg_sgst,mg_utgst,msdyn_amount,msdyn_date,msdyn_paymenttype,_msdyn_paymentmethod_value;$expand=msdyn_paymentmethod($select=msdyn_name))&$filter=_salesorderid_value eq '.$order_guid.' and  _contactid_value eq '.$cust_guid.'';

        $headers = [
            'Cache-Control: no-cache',
            'Content-Type: application/json; charset=utf-8',
            'Accept : application/json',
            'Authorization' => 'Bearer '.$token->token,
        ];

        $client = new \GuzzleHttp\Client([
            'headers' => $headers
        ]);

        try {

            $get_invoice_data = $client->request('GET', $url);
            $get_invoice_data->getStatusCode();


        }catch (\GuzzleHttp\Exception\ClientException $e) {
            $response = $e->getResponse();
            $response->getBody()->getContents();
            $status_code = $response->getStatusCode();

            if ($status_code == 400){

                return response()->json(['error'=>'Api Error!'],400);

            }

        }

        $get_invoice_data =json_decode($get_invoice_data->getBody()->read(1024*100000),true);

        return $get_invoice_data;
    }

    public function invoice_generate_view($id,$sid){

        $data = array();
        $order_no = $id;

//        $order_details = $request->order_details_data['order_details'];
        $order_guid = $sid;

        $get_invoice_data = $this->get_invoice_data_from_crm($order_guid);


        if ($get_invoice_data['value'] == []){
            return abort(500, "Issue while fetching API! ");

        }

        $invoice_no = $get_invoice_data['value'][0]['invoicenumber'];

        $invoice_details = $get_invoice_data['value'][0]['invoice_details'];
        $totaltax = $get_invoice_data['value'][0]['mg_totaltaxamount'];
        $totalamount = $get_invoice_data['value'][0]['mg_finalamountafterdiscount'];
        $salesorderid = $get_invoice_data['value'][0]['salesorderid'];

        $mg_cgst = $get_invoice_data['value'][0]['mg_cgst'];
        $mg_igst = $get_invoice_data['value'][0]['mg_igst'];
        $mg_sgst = $get_invoice_data['value'][0]['mg_sgst'];
        $mg_utgst = $get_invoice_data['value'][0]['mg_utgst'];
        $mg_discountamount = $get_invoice_data['value'][0]['mg_discountamount'];
        $mg_tot_amit_inc_tax = $get_invoice_data['value'][0]['mg_totalamountinctax'];

        $payment_invoice = $get_invoice_data['value'][0]['new_invoice_msdyn_payment_invoice'];




        $createdon = $get_invoice_data['value'][0]['createdon'];
        $date = \Carbon\Carbon::parse($createdon)->addHours(5)->addMinutes(30);

        $orders = [];

        foreach ($invoice_details as $key=>$invoice_details_data){

//            dd($invoice_details_data);
            $mg_description = $invoice_details_data['description'];
            $mg_saccode = $invoice_details_data['mg_saccode'];
            $product_name = $invoice_details_data['invoicedetailname'];
            $quantity = $invoice_details_data['quantity'];
            $priceperunit = $invoice_details_data['priceperunit'];
            $mg_finalamountafterdisc = $invoice_details_data['mg_finalamountafterdisc'];

            if($mg_finalamountafterdisc == null){
                $mg_finalamountafterdisc = 0;
            }


            $mg_discountamount = $invoice_details_data['mg_discountamount'];


            if($mg_discountamount == null){
                $mg_discountamount = 0;
            }

            $orders[] =
                (new InvoiceItem())->title($product_name)->txt($mg_saccode)->txtdesc($mg_description)->pricePerUnit($priceperunit)->quantity($quantity)->units($mg_finalamountafterdisc)->discount($mg_discountamount)
            ;

        }




        $data['user_name'] = Auth::user()->name;
        $data['user_email'] = Auth::user()->email;
        $data['date'] = $date;
        $data['invoice_no'] = $invoice_no;
        $data['order_guid'] = $salesorderid['ordernumber'];
        $data['orders'] = $orders;
        $data['totaltax'] = $totaltax;
        $data['totalamount'] = $totalamount;
        $data['mg_cgst'] = $mg_cgst;
        $data['mg_igst'] = $mg_igst;
        $data['mg_sgst'] = $mg_sgst;
        $data['mg_utgst'] = $mg_utgst;
        $data['mg_discountamount'] = $mg_discountamount;
        $data['totalamountinctax'] = $mg_tot_amit_inc_tax;
        $data['finalamount'] = $totalamount;



        $data['payment_invoice'] = $payment_invoice;

        $digitval = new \NumberFormatter( locale_get_default(), \NumberFormatter::SPELLOUT );

        $digit = $digitval->format($mg_tot_amit_inc_tax);
        $data['twords'] = ucfirst($digit);


        $data['msdyn_amount'] = $payment_invoice[0]['msdyn_amount'];
        $data['mg_bankpaymentrefno'] = $payment_invoice[0]['mg_bankpaymentrefno'];
        $data['msdyn_paymentmethod'] = $payment_invoice[0]['msdyn_paymentmethod']['__DisplayName__'];
        $datetime =  date('d/m/Y h:i:s a', time());

        $pdf =  PDF::loadView('pages.invoice-final', compact('data','datetime'));
        Storage::put("public/micro-$order_no.pdf", $pdf->output());


        $link = "/storage/micro-$order_no.pdf";


        return view('pages.invoice-view', compact('data','link'));


    }


    public function invoice_generate(Request $request){


        $data = array();


        $order_no = $request->ordernumber;

//        $order_details = $request->order_details_data['order_details'];
        $order_guid = $request->salesorderid;

        $cust_guid = $request->cust_guid;


        $get_invoice_data = $this->get_invoice_data_from_crm_api($order_guid,$cust_guid);

//        dd($get_invoice_data);


        $invoice_no = $get_invoice_data['value'][0]['invoicenumber'];
        $invoice_details = $get_invoice_data['value'][0]['invoice_details'];
        $totaltax = $get_invoice_data['value'][0]['mg_totaltaxamount'];
        $totalamount = $get_invoice_data['value'][0]['mg_finalamountafterdiscount'];
        $salesorderid = $get_invoice_data['value'][0]['salesorderid'];

        $mg_cgst = $get_invoice_data['value'][0]['mg_cgst'];
        $mg_igst = $get_invoice_data['value'][0]['mg_igst'];
        $mg_sgst = $get_invoice_data['value'][0]['mg_sgst'];
        $mg_utgst = $get_invoice_data['value'][0]['mg_utgst'];
        $mg_discountamount1 = $get_invoice_data['value'][0]['mg_discountamount'];
        $mg_tot_amit_inc_tax = $get_invoice_data['value'][0]['mg_totalamountinctax'];

        $payment_invoice = $get_invoice_data['value'][0]['new_invoice_msdyn_payment_invoice'];




        $createdon = $get_invoice_data['value'][0]['createdon'];
        $date = \Carbon\Carbon::parse($createdon)->addHours(5)->addMinutes(30);

        $orders = [];

        foreach ($invoice_details as $key=>$invoice_details_data){


            $product_name = $invoice_details_data['invoicedetailname'];
            $quantity = $invoice_details_data['quantity'];
            $priceperunit = $invoice_details_data['priceperunit'];
            $mg_finalamountafterdisc = $invoice_details_data['mg_finalamountafterdisc'];

            if($mg_finalamountafterdisc == null){
                $mg_finalamountafterdisc = 0;
            }


            $mg_discountamount = $invoice_details_data['mg_discountamount'];


            if($mg_discountamount == null){
                $mg_discountamount = 0;
            }

            $orders[] =
                (new InvoiceItem())->title($product_name)->pricePerUnit($priceperunit)->quantity($quantity)->units($mg_finalamountafterdisc)->discount($mg_discountamount)
            ;

        }




        $data['user_name'] = Auth::user()->name;
        $data['user_email'] = Auth::user()->email;
        $data['date'] = $date;
        $data['invoice_no'] = $invoice_no;
        $data['order_guid'] = $salesorderid['ordernumber'];
        $data['orders'] = $orders;
        $data['totaltax'] = $totaltax;
        $data['totalamount'] = $totalamount;
        $data['mg_cgst'] = $mg_cgst;
        $data['mg_igst'] = $mg_igst;
        $data['mg_sgst'] = $mg_sgst;
        $data['mg_utgst'] = $mg_utgst;
        $data['mg_discountamount'] = $mg_discountamount1;
        $data['totalamountinctax'] = $mg_tot_amit_inc_tax;
        $data['finalamount'] = $totalamount;


        $data['payment_invoice'] = $payment_invoice;

        $data['msdyn_amount'] = $payment_invoice[0]['msdyn_amount'];
        $data['mg_bankpaymentrefno'] = $payment_invoice[0]['mg_bankpaymentrefno'];
        $data['msdyn_paymentmethod'] = $payment_invoice[0]['msdyn_paymentmethod']['__DisplayName__'];
        $datetime =  date('d/m/Y h:i:s a', time());

        $pdf =  PDF::loadView('pages.invoice-final', compact('data','datetime'));

        Storage::put("public/micro-$order_no.pdf", $pdf->output());


        $link = "/storage/micro-$order_no.pdf";


        return response()->json(['link'=>$link],200);
    }


    public function load_more_order(Request $request){

        $urli =  "$request->next_link";
        $token= $this->t_token;

        $url = $urli;

        $headers = [
            'Cache-Control: no-cache',
            'Content-Type: application/json; charset=utf-8',
            'Accept : application/json',
            'Authorization' => 'Bearer '.$token->token,
            "Prefer" => "odata.maxpagesize=10"
        ];

        $client = new \GuzzleHttp\Client([
            'headers' => $headers
        ]);

        $get_my_orders = $client->request('GET', $url);

        $get_my_orders->getStatusCode();

        $get_my_orders =json_decode($get_my_orders->getBody()->read(1024*100000),true);

        $next_link_val =  array_values((array)$get_my_orders)[2];

        return response()->json([
            'get_my_orders' => $get_my_orders,
            'next_link_val' =>$next_link_val
        ]);

    }

    public function api_to_get_my_orders(){

        $get_customer_id = $this->check_leads_exist_in_crm();
        $token= $this->t_token;


        $url = 'https://mgravity.api.crm8.dynamics.com/api/data/v9.1/salesorders?$select=createdon,description,mg_cgst,mg_iaccept,mg_igst,mg_onlineorder,mg_parentmobileno,mg_pricelisttype,mg_sgst,_mg_store_value,mg_utgst,new_amountrecieved,new_balanceamount,ordernumber,_pricelevelid_value,requestdeliveryby,statecode,statuscode,totalamount,totaltax&$expand=order_details($select=createdon,description,mg_cgst,mg_igst,mg_orderlinestatus,mg_sgst,mg_utgst,extendedamount,priceperunit,productname,quantity)&$filter=_contactid_value eq '.$get_customer_id.' and new_balanceamount eq 0 &$orderby=createdon desc';

        $headers = [
            'Cache-Control: no-cache',
            'Content-Type: application/json; charset=utf-8',
            'Accept : application/json',
            'Authorization' => 'Bearer '.$token->token,
            "Prefer" => "odata.maxpagesize=10"
        ];

        $client = new Client([
            'headers' => $headers
        ]);

        $get_my_orders= $request = $client->get($url);

        $get_my_orders->getStatusCode();

        $get_my_orders = json_decode($get_my_orders->getBody()->read(1024*100000));

        return $get_my_orders;

    }

    public function thankyou(){

        if (Auth::user()->phone_verified_at == null){
            return redirect('/');
        }

        return view('pages.thankyou');
    }

    public function wavier_form_post(Request $request){


        $check_order_guid = session()->get('OrderGUID');


        if ($check_order_guid == null){
            $get_order = $this->order_creation_api();

            if (!isset($get_order->OrderID)){

                $message = $get_order->message;

                return response()->json([
                    'message' => 'error',
                    'desc' => $message
                ]);
            }

            $order_guid =  $get_order->OrderGUID;
            $TotalAmountInclTax = $get_order->TotalAmountInclTax;

        }

        $name = $request->name;
        $email = $request->email;
        $age = $request->age;
        $phone = $request->phone;
        $aadhar = $request->aadhar;

        if ($check_order_guid == null) {

            session()->put([
                'name' => $name,
                'email' => $email,
                'phone' => $phone,
                'age' => $age,
                'aadhar' => $aadhar,
                'OrderGUID' => $order_guid,
                'TotalAmountInclTax' => $TotalAmountInclTax
            ]);

        }

        return redirect('/order');


        return response()->json([
            'message' => 'success!'
        ]);

    }

    public function waiver_form_api($get_order_guid,$name,$email,$age,$phone,$aadhar){

        $token= $this->t_token;

        $username = explode(' ',$name,2);

        $fields = array(
            'OrderGUID' => "$get_order_guid",
            'Players' => array (
                0 =>
                    array (
                        'FirstName' => "$username[0]",
                        'LastName' => "$username[1]",
                        'Age' => "$age",
                        'MobileNo' => "$phone",
                        'AadhaarPanPassportNo' => "$aadhar",
                        'EmailID' => "$email",
                    ),
            ),
            'Token' =>$token->token,
        );

        $url = 'https://prod-00.centralindia.logic.azure.com:443/workflows/f06556ff283d4da7aa7f0e998ae6baf9/triggers/manual/paths/invoke?api-version=2016-06-01&sp=%2Ftriggers%2Fmanual%2Frun&sv=1.0&sig=J6QGdAIXGyU2IJt4FX2NzsxLsQsCo7QTyY95yy0jobM';

        $headers = [
            'Cache-Control: no-cache',
            'Content-Type: application/json; charset=utf-8',
            'Accept : application/json'
        ];

        $client = new Client([
            'headers' => $headers
        ]);

        $create_waiver_from_req= $request = $client->post($url,[
            \GuzzleHttp\RequestOptions::JSON => $fields
        ]);

        $create_waiver_from_req->getStatusCode();

        $create_waiver_from_req = json_decode($create_waiver_from_req->getBody()->read(1024*100000));

        session()->put('create_waiver_from_req',$create_waiver_from_req);

        return $create_waiver_from_req;

    }


    public function order_creation_api(){


        $get_customer_guid = $this->check_leads_exist_in_crm();

        $order_id = session()->get('new_order_id_val');


        $session_id = Session::getId();

        \Log::info($session_id);


//        $order_id = session()->all();
        $game_type = session()->get('game_type');
        $game_checkout_cart = session()->get('game_checkout_cart');

        if ($game_type == "cart" && $game_checkout_cart == null) {
            $cart_g = session()->get('game_cart');
            $game_name = array_values($cart_g)[0];
            $game_name = json_decode($game_name['game_name'], true);
            $store_guid = $game_name['StoreGUID'];
        }else if ($game_type == "cart" && $game_checkout_cart != null) {
            $cart_g = session()->get('game_cart');
            $game_name = array_values($cart_g)[0];
            $game_name = json_decode($game_name['game_name'], true);
            $store_guid = $game_name['StoreGUID'];
        }else{
            $cart_g = $game_checkout_cart;
            $game_name = array_values($cart_g)[0];
            $game_name = json_decode($game_name['game_name'], true);
            $store_guid = $game_name['StoreGUID'];
        }

        $options = [];

        foreach ($cart_g as $key=>$cart_g_value){

            $game_name_data = json_decode($cart_g_value['game_name'],true);
            $SubProductGUID = $game_name_data['SubProductGUID'];
            $slot_data_data = json_decode($cart_g_value['slot_data'],true);
            $slot_data_data = $slot_data_data['mg_slotitemsid'];
            $play_date = $cart_g_value['play_date'];


            if ($cart_g_value['product_type_name'] == null){

                $get_products_data = Product::where('Parent',$game_name_data['ProductFamily'])
                    ->where('MaximumPlayers',$cart_g_value['total_player'])
                    ->where('Duration',$game_name_data['GameDuration'])
                    ->first();

                $ProductGUID = $get_products_data->ProductGUID;
                $PriceListGUID = $get_products_data->PriceListGUID;
            }
            else{

                $get_products_data = Product::where('ProductName',$cart_g_value['product_type_name'])
                    ->first();

                $ProductGUID = $get_products_data->ProductGUID;
                $PriceListGUID = $get_products_data->PriceListGUID;

            }

            $options[] = [
                "ProductGuid" => "$ProductGUID",
                "SlotGuid" => "$slot_data_data",
                "mg_subproduct" => "$SubProductGUID"
            ];

        }

        $fields = array(
            'OrderName' => "$order_id",
            'CustomerGuid' => "$get_customer_guid",
            'StoreGuid' =>"$store_guid",
            'PriceListGuid' =>"$PriceListGUID",
            'RequestedDelivery'=>"$play_date",
            'orderlines' =>$options,
        );

//        dd(json_encode($fields));

        $url = 'https://prod-00.centralindia.logic.azure.com:443/workflows/8f5b757e2c4b4cf7bb11106aaf7c5065/triggers/manual/paths/invoke?api-version=2016-06-01&sp=%2Ftriggers%2Fmanual%2Frun&sv=1.0&sig=egia__o05xnnhyYsHudOqgG0crHitr6ZHN-N5kum6H4';

        $headers = [
            'Cache-Control: no-cache',
            'Content-Type: application/json; charset=utf-8',
            'Accept : application/json'
        ];

        $client = new Client([
            'headers' => $headers
        ]);

        $create_order= $request = $client->post($url,[
            \GuzzleHttp\RequestOptions::JSON => $fields
        ]);

        $create_order->getStatusCode();

        $create_order = json_decode($create_order->getBody()->read(1024*100000));

        session()->put('create_order',$create_order);

        return $create_order;

    }


    public function check_leads_exist_in_crm_complete_details(){

        $token= $this->t_token;

        $headers = [
            'Content-Type' => 'application/json',
            'Authorization' => 'Bearer '.$token->token,
            'Accept' => 'application/json',
            'Accept' => 'Prefer: return=representation',
        ];

        $client = new Client([
            'headers' => $headers
        ]);

//        $url = 'https://mgravity.api.crm8.dynamics.com/api/data/v9.1/contacts?$select=firstname,lastname,mg_rfidcardid,mg_gamevalue,mg_gamevaliditydate&$filter=contains(mobilephone,\''.Auth::user()->phone.'\') ';


        $url = 'https://mgravity.api.crm8.dynamics.com/api/data/v9.1/contacts?$select=firstname,lastname,mg_gamevalue,mg_gamevaliditydate&$expand=mg_RFIDCard($select=mg_name)&$filter=contains(mobilephone,\''.Auth::user()->phone.'\')';

//        dd($url);

        $check_leads_exist= $request = $client->request( 'GET',$url );

        $check_leads_exist->getStatusCode();

        $check_leads_exist = json_decode($check_leads_exist->getBody()->read(1024*100000));

//        echo $check_leads_exist;


        return $check_leads_exist->value[0];

    }


    public function check_leads_exist_in_crm(){

        $token= $this->t_token;

        $headers = [
            'Content-Type' => 'application/json',
            'Authorization' => 'Bearer '.$token->token,
            'Accept' => 'application/json',
            'Accept' => 'Prefer: return=representation',
        ];

        $client = new Client([
            'headers' => $headers
        ]);
        $url = 'https://mgravity.api.crm8.dynamics.com/api/data/v9.1/contacts?$select=firstname,lastname,mg_gamevalue,mg_gamevaliditydate&$expand=mg_RFIDCard($select=mg_name)&$filter=contains(mobilephone,\''.Auth::user()->phone.'\')';
        $check_leads_exist= $request = $client->request( 'GET',$url );
        $check_leads_exist->getStatusCode();
        $check_leads_exist = json_decode($check_leads_exist->getBody()->read(1024*100000));

        return $check_leads_exist->value[0]->contactid;

    }

    public function cancel_order(){

        $data = array();

        $cancel_data = $this->cancel_order_in_crm();

        session()->forget(['new_order_id_val','game_cart','order_id','tzsk_payu_data','name','email','phone','TotalAmountInclTax','OrderGUID','game_checkout_cart','s_end_time','create_order']);
        session()->regenerate(true);

        $data['cancel_data'] = $cancel_data;

        return view('pages.thankyou',compact('data'));

    }

    public function cancel_order_view(){
        $data = array();
        $data['get'] = 'direct';
        return view('pages.thankyou',compact('data'));
    }

    public function cancel_order_in_crm(){

        $token= $this->t_token;
        $OrderGUID = session()->get('OrderGUID');

        $fields = array(
            'statecode' => 2,
            'description' => "Order cancelled from web site.",
        );

        $url = 'https://mgravity.api.crm8.dynamics.com/api/data/v9.1/salesorders('."$OrderGUID".')?$select=statecode';

        $headers = [
            'Cache-Control: no-cache',
            'Content-Type: application/json; charset=utf-8',
            'Accept : application/json',
            'Authorization' => 'Bearer '.$token->token,
            'Prefer' => 'return=representation',
        ];

        $client = new Client([
            'headers' => $headers
        ]);

        $cancel_order= $request = $client->patch($url,[
            \GuzzleHttp\RequestOptions::JSON => $fields
        ]);

        $cancel_order->getStatusCode();

        $cancel_order = json_decode($cancel_order->getBody()->read(1024*100000));

        return $cancel_order;

    }


    public function updatePassword(Request $request){

        if (!(Hash::check($request->get('old_password'), Auth::user()->password))) {
            return redirect('/profile#change-password')->with("error","Your current password does not matches with the password you provided. Please try again.");
        }

        if(strcmp($request->get('old_password'), $request->get('new_password')) == 0){
            return redirect('/profile#change-password')->with("error","New Password cannot be same as your current password. Please choose a different password.");
        }

        $validatedData = Validator::make($request->all(),[
            'old_password' => 'required',
            'new_password' => 'required|string|min:8|confirmed',
        ]);

        if ($validatedData->fails()){
            return redirect('/profile#change-password')->with("error",$validatedData->errors()->all()[0]);
        }

        $user = Auth::user();
        $user->password = Hash::make($request->get('new_password'));
        $user->save();

        return redirect('/profile#user-profile')->with("success","Password has been successfully updated!");
    }

}
