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
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\ResponseObject;
use \Illuminate\Support\Facades\Response as FacadeResponse;

use App\Product;
use App\WaiverForm;
use App\ContactlessPayment;
use Hash;
use Session;
use Storage;
use PDF;
use URL;

class ApiController extends Controller
{

    public $t_token;

    public function __construct()
    {
        $this->t_token = $this->get_token();
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

                return abort(500, "You can't perform this action! ");

            }

        }

        $get_invoice_data =json_decode($get_invoice_data->getBody()->read(1024*100000),true);

        return $get_invoice_data;
    }


    public function invoice_generate(Request $request){

        $data = array();

        $order_no = $request->ordernumber;
        $order_guid = $request->salesorderid;
        $cust_guid = $request->cust_guid;
        $user_name = $request->user_name;
        $user_email = $request->user_email;


        if ($order_guid == null || $cust_guid == null || $order_no == null || $user_name == null || $user_email == null){
            return response()->json(['error'=>'Api Error!'],400);

        }

        $get_invoice_data = $this->get_invoice_data_from_crm_api($order_guid,$cust_guid);

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

        $mg_saccode = $get_invoice_data['value'][0]['mg_saccode'];


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




        $data['user_name'] = $user_name;
        $data['user_email'] = $user_email;
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
        $data['mg_saccode'] = $mg_saccode;


        $data['msdyn_amount'] = $payment_invoice[0]['msdyn_amount'];
        $data['mg_bankpaymentrefno'] = $payment_invoice[0]['mg_bankpaymentrefno'];
        $data['msdyn_paymentmethod'] = $payment_invoice[0]['msdyn_paymentmethod']['__DisplayName__'];

        $pdf =  PDF::loadView('pages.invoice-final', compact('data'));
        Storage::put("public/micro-$order_no.pdf", $pdf->output());
        $link = url('/'). "/storage/micro-$order_no.pdf";

        return response()->json(['status'=>'success','link'=>$link,'status_code'=>200],200);

    }



    public function get_user_data($custid){

        $token= $this->t_token;

        $url = 'https://mgravity.api.crm8.dynamics.com/api/data/v9.1/contacts?$select=fullname,emailaddress1 &$filter=contactid eq '.$custid.'';

        $headers = [
            'Cache-Control: no-cache',
            'Content-Type: application/json; charset=utf-8',
            'Accept : application/json',
            'Prefer: return=representation',
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

        $get_cust_data =json_decode($get_invoice_data->getBody()->read(1024*100000),true);

        return $get_cust_data;

    }

    public function invoice_generate_view($sid,$custid){

        $data = array();
        $order_guid = $sid;
        $get_invoice_data = $this->get_invoice_data_from_crm_api($order_guid,$custid);

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
        $mg_discountamount1 = $get_invoice_data['value'][0]['mg_discountamount'];
        $mg_tot_amit_inc_tax = $get_invoice_data['value'][0]['mg_totalamountinctax'];
        $payment_invoice = $get_invoice_data['value'][0]['new_invoice_msdyn_payment_invoice'];
        $createdon = $get_invoice_data['value'][0]['createdon'];
        $date = \Carbon\Carbon::parse($createdon)->addHours(5)->addMinutes(30);
        $orders = [];

        foreach ($invoice_details as $key=>$invoice_details_data){
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

        $get_cust = $this->get_user_data($custid);

        $uname = $get_cust['value'][0]['fullname'];
        $emailaddress1 = $get_cust['value'][0]['emailaddress1'];


        $data['user_name'] = $uname;
        $data['user_email'] = $emailaddress1;
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

        $digitval = new \NumberFormatter( locale_get_default(), \NumberFormatter::SPELLOUT );

        $digit = $digitval->format($mg_tot_amit_inc_tax);
        $data['twords'] = ucfirst($digit);
        $data['finalamount'] = $totalamount;
        $data['payment_invoice'] = $payment_invoice;
        $data['msdyn_amount'] = $payment_invoice[0]['msdyn_amount'];
        $data['mg_bankpaymentrefno'] = $payment_invoice[0]['mg_bankpaymentrefno'];
        $data['msdyn_paymentmethod'] = $payment_invoice[0]['msdyn_paymentmethod']['__DisplayName__'];
        $datetime =  date('d/m/Y h:i:s a', time());
        $pdf =  PDF::loadView('pages.invoice-final', compact('data','datetime'));
        Storage::put("public/micro-$sid.pdf", $pdf->output());
        $link = "/storage/micro-$sid.pdf";

        return view('pages.invoice-view', compact('data','link'));
    }

    public function contactless_payment(Request $request){

        $response = new ResponseObject;
        $token = sha1(uniqid(time(), true));
        $link_url = URL::to('/')."/contactless/payment/".$token;

        $validator = Validator::make($request->all(), [
            'customer_guid' =>'required',
            'order_guid' =>'required',
            'order_id' =>'required|unique:contactless_payments,order_id',
            'amount' =>'required',
        ]);

        if($validator->fails()){
            $response->status = $response::status_failed;
            $response->code = $response::code_failed;
            foreach ($validator->errors()->getMessages() as $item) {
                array_push($response->messages,(object) $item);
            }

        } else {
            $myItem = new ContactlessPayment();
            $myItem->token = $token;
            $myItem->customer_guid = $request->customer_guid;
            $myItem->order_guid = $request->order_guid;
            $myItem->order_id = $request->order_id;
            $myItem->amount = $request->amount;
            $myItem->link = $link_url;
            $myItem->payment_status = false;
            $myItem->save();

            $response->status = $response::status_ok;
            $response->code = $response::code_ok;
            $response->result = $myItem;
        }

        return FacadeResponse::json($response);
    }
}