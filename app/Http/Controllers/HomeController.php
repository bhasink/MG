<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\ContactUs;
use App\ProductFamily;
use App\SubProduct;
use App\ProductGallery;
use App\ProductVideo;
use App\Product;
use App\User;
use App\GamerGodnessForm;
use App\ProductPriceListItems;
use App\ContactlessPayment;
use GuzzleHttp\Client;
use Carbon\Carbon;
use Session;
use Cookie;
use Illuminate\Support\Facades\Cache;
use Tzsk\Payu\Facade\Payment;
use View;
use PDF;

class HomeController extends Controller
{

    public $t_token;

    public function __construct()
    {
        $this->t_token = $this->get_token();
        config(['session.same_site' => null]);
    }

    public function medialisting()
    {
        return view('pages.medialisting');
    }

    public function parties_and_events()
    {
        return view('pages.parties_and_events');
    }

    public function career()
    {
        return view('pages.career');
    }

    public function partnership()
    {
        return view('pages.partnership');
    }

    public function safety()
    {
        return view('pages.safety');
    }

    public function freeroam()
    {
        return view('pages.freeroam');
    }

    public function gamergodness()
    {
        return view('pages.gamergodness');
    }

    public function gamergodness_thanks()
    {
        return view('pages.gamergodness_thanks');
    }

    public function golf()
    {
        return view('pages.golf');
    }

    public function business()
    {
        return view('pages.business');
    }

    public function about()
    {
        return view('pages.about');
    }

    public function media()
    {
        return view('pages.medialisting');
    }

    public function oculus()
    {
        return view('pages.oculus');
    }

    public function ps4()
    {
        return view('pages.ps4');
    }

    public function contact()
    {
        return view('pages.contact');
    }

    public function deals()
    {
        return view('pages.deals');
    }

    public function invoiceterms()
    {
        return view('pages.invoiceterms');
    }

    public function resetpassword()
    {
        return view('pages.resetpassword');
    }

    public function events()
    {
        return view('pages.events');
    }

    public function forgot_password(){
        return view('pages.forgot_password');
    }

    public function forgot_password_otp(Request $request){

        $mobile_no = $request->mobile_no;
        $check_mobile = User::where('phone',$mobile_no)->first();

        if ($check_mobile != null){
            $id = $check_mobile->id;
            $check_mobile->callToResetPassword($id);
            return "success";

        }else{
            return "User doesn't exist!";
        }

    }

    public function verify_otp(Request $request){

        $mainotp = $request->mainotp;
        $mobile_no = $request->mobile_no;
        $check_mobile = User::where('phone',$mobile_no)->first();

        if ($check_mobile != null) {

            $verification_code = $check_mobile->verification_code;

            if ($verification_code == $mainotp){
                return "success";
            }else{
                return "Incorrect OTP!";
            }

        }else{
            return "User doesn't exist!";
        }

    }

    public function reset_password_save(Request $request){

        $password = $request->password;
        $confirm_password = $request->confirm_password;
        $mobile_no = $request->mobile_no;
        $check_mobile = User::where('phone',$mobile_no)->first();

        if ($check_mobile != null) {

            if ($password == $confirm_password){
                $check_mobile->password = bcrypt($password);
                $check_mobile->save();

                return "success";

            }else{
                return "Error!";
            }

        }else{
            return "User doesn't exist!";
        }
    }

    public function events_int()
    {
        return view('pages.events_int');
    }

    public function thanks(){

        return view('pages.thanks');
    }

    public function enq_now(Request $request){

        $name = $request->name;
        $mobile = $request->mobile;
        $email = $request->email;
        $city = $request->city;
        $message = $request->message;
        $token= $this->t_token;
        $headers = [
            'Content-Type' => 'application/json',
            'Authorization' => 'Bearer '.$token->token,
            'Accept' => 'application/json',
            'Prefer' => 'return=representation',
        ];
        $client = new Client([
            'headers' => $headers
        ]);

        $url = 'https://mgravity.api.crm8.dynamics.com/api/data/v9.1/leads?$select=leadid,_customerid_value';

        $create_leads= $request = $client->post($url,[
            \GuzzleHttp\RequestOptions::JSON => [ 'firstname' => $name,
                'lastname' => '.',
                'mobilephone' => $mobile,
                'emailaddress1'=>$email,
                'address1_city' => $city,
                'mg_querymessage' => $message,
                'statuscode'=>1,
                "leadsourcecode"=>11,
            ]
        ]);

        $status = $create_leads->getStatusCode();
        $create_leads = json_decode($create_leads->getBody()->read(1024*100000));

        if ($status == 201){
            return redirect('/thanks');
        }
    }

    public function contactless_payment($token){

        $token_status = null;

        $check_token = ContactlessPayment::where('token',$token)->first();

        if ($check_token == null){
            $token_status = "Invalid Token!";
            return view('pages.contactless_payment',compact('token_status'));
        }

        if ($check_token->payment_status == true){
            $token_status = "Payment has been made already!";
            return view('pages.contactless_payment',compact('token_status'));
        }

        $current_date_time = Carbon::now()->timestamp;
        $lead_timestamp = ($check_token->created_at->timestamp)+(24*60*60);

        if ($current_date_time >= $lead_timestamp){
            $token_status = "Link has been expired!";
            return view('pages.contactless_payment',compact('token_status'));
        }

        $customer_guid = $check_token->customer_guid;
        $order_guid = $check_token->order_guid;

        $validate_contactless = $this->validate_contactless_payment($customer_guid,$order_guid);

        if ($validate_contactless == 400){
            $token_status = "API Error!";
            return view('pages.contactless_payment',compact('token_status'));
        }

        if ($validate_contactless['value'] == null){
            $token_status = "Empty Response from API!";
            return view('pages.contactless_payment',compact('token_status'));
        }

        $validate_ord_data = $validate_contactless['value'][0];

        if ($check_token->order_guid != $validate_ord_data['salesorderid'] && $check_token->order_id != $validate_ord_data['ordernumber']){
            $token_status = "API validation issue!";
            return view('pages.contactless_payment',compact('token_status'));
        }

        return view('pages.contactless_payment',compact('check_token','token_status'));
    }

    public function contactless_payment_red(Request $request){

        $validator = Validator::make($request->all(), [
            'name' =>'required',
            'email' =>'required',
            'mobile_no' =>'required',
            'token' =>'required',
        ]);

        if($validator->fails()){
            return redirect('/');
        }else {
            $name = $request->name;
            $email = $request->email;
            $mobile_no = $request->mobile_no;
            $token = $request->token;
            $check_token = ContactlessPayment::where('token', $token)->first();
            $order_id = $check_token->order_id;
            $amount = $check_token->amount;
            $attributes = [
                'txnid' => $order_id,
                'amount' => (float)$amount,
                'productinfo' => "Microgravity Ventures Private Limited",
                'firstname' => $name,
                'email' => $email,
                'phone' => $mobile_no,
            ];

            return Payment::make($attributes, function ($then) {
                $then->redirectAction('HomeController@contactless_status');
            });

        }
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
                $check_token = ContactlessPayment::where('order_id', $order_id)->first();
                $check_token->payment_status = true;
                $check_token->save();

                $order_id = $check_token->order_id;
                $amount = $check_token->amount;
                $order_guid = $check_token->order_guid;
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

    public function validate_contactless_payment($customer_guid,$order_guid){

        $token= $this->t_token;
        $url='https://mgravity.api.crm8.dynamics.com/api/data/v9.1/salesorders?$select=ordernumber&$filter= new_balanceamount gt 0 and _customerid_value eq '.$customer_guid.' and salesorderid eq '.$order_guid.'';
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
            $validate_order_id = $client->request('GET', $url);
            $status_code = $validate_order_id->getStatusCode();

        }catch (\GuzzleHttp\Exception\ClientException $e) {
            $response = $e->getResponse();
            $response->getBody()->getContents();
            $status_code = $response->getStatusCode();
            return $status_code;
        }

        $validate_order_id =json_decode($validate_order_id->getBody()->read(1024*100000),true);

        return $validate_order_id;
    }


    public function invoicefinal()
    {

        $ff = 'f';
        $pdf =  PDF::loadView('pages.invoicefinal', compact('ff'));
        return $pdf->download('invoice.pdf');

        $data = array();
        $get_sub_product_data = SubProduct::inRandomOrder()->get();
        $data['get_sub_product_data'] = $get_sub_product_data;
        return view('pages.home',compact('data'));
    }

    public function index()
    {
        return view('pages.home');
    }

    public function cart(){
        return view('pages.cart');
    }

    public function parental_consent_form(){
        return view('pages.parental_consent_form');
    }

    public function add_to_cart_golf(Request $request){

        $slot_data = $request->slot_data;
        $game_name = $request->game_name;
        $play_date = $request->play_date;
        $total_player = $request->total_player;
        $slot_cost = $request->slot_cost;
        $product_type_name = $request->product_type_name;
        $slot_array = $request->slot_array;
        $mg_slotitemsid = $request->mg_slotitemsid;
        $mg_store_value = $request->mg_store_value;
        $play_date_parse = Carbon::parse($play_date)->timestamp;
        session()->put('check_cart_date',$play_date_parse);
        $cart = session()->get('game_cart');
        $game = json_decode($game_name,true);

        // if cart is empty then this the first product
        if(!$cart) {

            $cart = [
                $game['SubProductGUID'] => [
                    "slot_data" => $slot_data,
                    "game_name" => $game_name,
                    "play_date" => $play_date,
                    "total_player" => $total_player,
                    "slot_cost" => $slot_cost,
                    'product_type_name' => $product_type_name == null ? null : $product_type_name,
                    'slot_array' =>$slot_array,
                ]
            ];

            session()->put('game_cart', $cart);
            session()->put('game_type', 'cart');
            session()->put('duration', 1);
            session()->put('start_time', date("Y-m-d H:i:s"));
            $duration = session()->get('duration');
            $start_time = session()->get('start_time');
            $endtime =  date("Y-m-d H:i:s",strtotime('+'.$duration.'minutes',strtotime($start_time)));
            session()->put('end_time', $endtime);

        }else{

            $cart[$game['SubProductGUID']] = [
                "slot_data" => $slot_data,
                "game_name" => $game_name,
                "play_date" => $play_date,
                "total_player" => $total_player,
                "slot_cost" => $slot_cost,
                'product_type_name' => $product_type_name == null ? null : $product_type_name,
                'slot_array' =>$slot_array,
            ];

            session()->put('game_cart', $cart);
            session()->put('game_type', 'cart');
            Cookie::queue(cookie('duration', '1', $minute = 15));
            Cookie::queue(cookie('start_time', date("Y-m-d H:i:s"), $minute = 15));
            session()->put('duration', 1);
            session()->put('start_time', date("Y-m-d H:i:s"));
            $duration = session()->get('duration');
            $start_time = session()->get('start_time');
            $endtime =  date("Y-m-d H:i:s",strtotime('+'.$duration.'minutes',strtotime($start_time)));
            Cookie::queue(cookie('end_time', $endtime, $minute = 15));
            session()->put('end_time', $endtime);

        }

        $duration_val = 15;
        $start_time_val = date("Y-m-d H:i:s");
        $s_end_time = date("Y/m/d H:i:s",strtotime('+'.$duration_val.'minutes',strtotime($start_time_val)));
        $setime = session()->get('s_end_time');

        if ($setime == null){
            session()->put('s_end_time', $s_end_time);
        }

        $game_checkout_cart = session()->get('game_checkout_cart');

        if ($game_checkout_cart != null){
            session()->forget(['game_checkout_cart']);
        }

        if(isset($cart[$game_name])) {
        }

        $this->temp_slot_booking_golf($slot_array,$total_player);

    }


    public function clear_cart(){

        session()->forget(['new_order_id_val','game_cart','order_id','tzsk_payu_data','name','email','phone','aadhar','age','TotalAmountInclTax','create_order','OrderGUID','game_checkout_cart','s_end_time']);

        return 'Success';

    }

    public function golf_checkout(Request $request){

        $slot_data = $request->slot_data;
        $game_name = $request->game_name;
        $play_date = $request->play_date;
        $total_player = $request->total_player;
        $slot_cost = $request->slot_cost;
        $product_type_name = $request->product_type_name;
        $slot_array = $request->slot_array;
        $mg_slotitemsid = $request->mg_slotitemsid;
        $mg_store_value = $request->mg_store_value;
        $cart = session()->get('game_cart');
        $game = json_decode($game_name,true);
        $cart = [
                $game['SubProductGUID'] => [
                    "slot_data" => $slot_data,
                    "game_name" => $game_name,
                    "play_date" => $play_date,
                    "total_player" => $total_player,
                    "slot_cost" => $slot_cost,
                    'product_type_name' => $product_type_name == null ? null : $product_type_name,
                    'slot_array' =>$slot_array,
                ]
            ];

            session()->put('game_checkout_cart', $cart);
            session()->put('game_type', 'checkout');
            session()->put('duration', 1);
            session()->put('start_time', date("Y-m-d H:i:s"));
            $duration = session()->get('duration');
            $start_time = session()->get('start_time');
            $endtime =  date("Y-m-d H:i:s",strtotime('+'.$duration.'minutes',strtotime($start_time)));
            session()->put('end_time', $endtime);
            $duration_val = 15;
            $start_time_val = date("Y-m-d H:i:s");
            $s_end_time = date("Y/m/d H:i:s",strtotime('+'.$duration_val.'minutes',strtotime($start_time_val)));
            $setime = session()->get('s_end_time');

            if ($setime == null){
                session()->put('s_end_time', $s_end_time);
            }

            $this->temp_slot_booking_golf($slot_array,$total_player);
    }

    public function temp_slot_booking_golf($slot_array,$total_player){


        $timestamp = Carbon::now()->getPreciseTimestamp(3);
        $get_random_value = 'WEB'.$timestamp;
        $order_id = session()->get('new_order_id_val');
        $session_id = Session::getId();

        \Log::info($session_id);

        $options = [];
        foreach ($slot_array as $key=>$slot_array_value) {
            $options[] = [
                'slotGUID' => $slot_array_value['slot_id'],
                'NoOfPlayersBooked' => (int)$total_player,
            ];
        }

        $fields = array(
            'WebSiteOrderID' => "$order_id",
            "RequestType"=>"Booking",
            'store' => $slot_array[0]['store_id'],
            'Slots' =>$options
        );

        $url = 'https://prod-00.centralindia.logic.azure.com:443/workflows/20fd5ee500c24c6eb01d51a076ce1279/triggers/manual/paths/invoke?api-version=2016-06-01&sp=%2Ftriggers%2Fmanual%2Frun&sv=1.0&sig=62aTqerXbmANDKjMoGMX__P1gDLUEooF2q8o3epASFI';

        $headers = [
            'Cache-Control: no-cache',
            'Content-Type: application/json; charset=utf-8'
        ];

        $client = new Client([
            'headers' => $headers
        ]);

        $create_temp_slots= $request = $client->post($url,[
            \GuzzleHttp\RequestOptions::JSON => $fields
        ]);

        $create_temp_slots->getStatusCode();
        $create_temp_slots = json_decode($create_temp_slots->getBody()->read(1024*100000));
        $order_id = session()->get('order_id');

        if ($order_id == null){
            session()->put('order_id', $get_random_value);
        }

        return $create_temp_slots;
    }

    public function checkout(Request $request){

        $slot_data = $request->slot_data;
        $game_name = $request->game_name;
        $play_date = $request->play_date;
        $total_player = $request->total_player;
        $slot_cost = $request->slot_cost;
        $product_type_name = $request->product_type_name;
        $mg_slotitemsid = $request->mg_slotitemsid;
        $mg_store_value = $request->mg_store_value;
        $cart = session()->get('game_checkout_cart');
        $game = json_decode($game_name,true);
        $cart = [
                $game['SubProductGUID'] => [
                    "slot_data" => $slot_data,
                    "game_name" => $game_name,
                    "play_date" => $play_date,
                    "total_player" => $total_player,
                    "slot_cost" => $slot_cost,
                    'product_type_name' => $product_type_name == null ? null : $product_type_name,
                ]
            ];

            session()->put('game_checkout_cart', $cart);
            session()->put('game_type', 'checkout');
            session()->put('duration', 1);
            session()->put('start_time', date("Y-m-d H:i:s"));
            $duration = session()->get('duration');
            $start_time = session()->get('start_time');
            $endtime =  date("Y-m-d H:i:s",strtotime('+'.$duration.'minutes',strtotime($start_time)));
            session()->put('end_time', $endtime);
            $duration_val = 15;
            $start_time_val = date("Y-m-d H:i:s");
            $s_end_time = date("Y/m/d H:i:s",strtotime('+'.$duration_val.'minutes',strtotime($start_time_val)));
            $setime = session()->get('s_end_time');

            if ($setime == null){
                session()->put('s_end_time', $s_end_time);
            }
        
            $t_slot = $this->temp_slot_booking($mg_slotitemsid,$mg_store_value,$total_player);
            session()->put('t_slot', $t_slot);
            session()->put('t_mg_store_value', $mg_store_value);
            session()->put('t_total_player', $total_player);

    }

    public function add_to_cart(Request $request){

        $slot_data = $request->slot_data;
        $game_name = $request->game_name;
        $play_date = $request->play_date;
        $total_player = $request->total_player;
        $slot_cost = $request->slot_cost;
        $product_type_name = $request->product_type_name;
        $mg_slotitemsid = $request->mg_slotitemsid;
        $mg_store_value = $request->mg_store_value;
        $play_date_parse = Carbon::parse($play_date)->timestamp;
        session()->put('check_cart_date',$play_date_parse);
        $cart = session()->get('game_cart');
        $game = json_decode($game_name,true);

        // if cart is empty then this the first product
        if(!$cart) {

            $cart = [
                $game['SubProductGUID'] => [
                    "slot_data" => $slot_data,
                    "game_name" => $game_name,
                    "play_date" => $play_date,
                    "total_player" => $total_player,
                    "slot_cost" => $slot_cost,
                    'product_type_name' => $product_type_name == null ? null : $product_type_name,
                ]
            ];

            session()->put('game_cart', $cart);
            session()->put('game_type', 'cart');
            session()->put('duration', 1);
            session()->put('start_time', date("Y-m-d H:i:s"));
            $duration = session()->get('duration');
            $start_time = session()->get('start_time');
            $endtime =  date("Y-m-d H:i:s",strtotime('+'.$duration.'minutes',strtotime($start_time)));
            session()->put('end_time', $endtime);

        }else{

            $cart[$game['SubProductGUID']] = [
                "slot_data" => $slot_data,
                "game_name" => $game_name,
                "play_date" => $play_date,
                "total_player" => $total_player,
                "slot_cost" => $slot_cost,
                'product_type_name' => $product_type_name == null ? null : $product_type_name,
            ];

            session()->put('game_cart', $cart);
            session()->put('game_type', 'cart');
            Cookie::queue(cookie('duration', '1', $minute = 15));
            Cookie::queue(cookie('start_time', date("Y-m-d H:i:s"), $minute = 15));
            session()->put('duration', 1);
            session()->put('start_time', date("Y-m-d H:i:s"));
            $duration = session()->get('duration');
            $start_time = session()->get('start_time');
            $endtime =  date("Y-m-d H:i:s",strtotime('+'.$duration.'minutes',strtotime($start_time)));
            Cookie::queue(cookie('end_time', $endtime, $minute = 15));
            session()->put('end_time', $endtime);

        }


        $duration_val = 15;
        $start_time_val = date("Y-m-d H:i:s");
        $s_end_time = date("Y/m/d H:i:s",strtotime('+'.$duration_val.'minutes',strtotime($start_time_val)));
        $setime = session()->get('s_end_time');

        if ($setime == null){
            session()->put('s_end_time', $s_end_time);
        }

        $game_checkout_cart = session()->get('game_checkout_cart');

        if ($game_checkout_cart != null){
            session()->forget(['game_checkout_cart']);
        }

        if(isset($cart[$game_name])) {
        }

        $this->temp_slot_booking($mg_slotitemsid,$mg_store_value,$total_player);

    }

    public function temp_slot_booking($mg_slotitemsid,$mg_store_value,$total_player){

        $timestamp = Carbon::now()->getPreciseTimestamp(3);
        $get_random_value = 'WEB'.$timestamp;
        $order_id = session()->get('new_order_id_val');
        $session_id = Session::getId();
        \Log::info($session_id);

        $fields = array(
            'WebSiteOrderID' => "$order_id",
            'store' => "$mg_store_value",
            "RequestType"=>"Booking",
            'Slots' =>
                array (
                    0 =>
                        array (
                            'slotGUID' => "$mg_slotitemsid",
                            'NoOfPlayersBooked' => (int)$total_player,
                        ),
                ),
        );

        $url = 'https://prod-00.centralindia.logic.azure.com:443/workflows/20fd5ee500c24c6eb01d51a076ce1279/triggers/manual/paths/invoke?api-version=2016-06-01&sp=%2Ftriggers%2Fmanual%2Frun&sv=1.0&sig=62aTqerXbmANDKjMoGMX__P1gDLUEooF2q8o3epASFI';

        $headers = [
            'Cache-Control: no-cache',
            'Content-Type: application/json; charset=utf-8'
        ];

        $client = new Client([
            'headers' => $headers
        ]);
        $create_temp_slots= $request = $client->post($url,[
            \GuzzleHttp\RequestOptions::JSON => $fields
        ]);
        $create_temp_slots->getStatusCode();
        $create_temp_slots = json_decode($create_temp_slots->getBody()->read(1024*100000));

        return $create_temp_slots;
    }


    public function remove_cart_product(Request $request)
    {
        $slot_guid = $request->slot_guid;
        $data_store = $request->data_store;
        $data_tot_p = $request->data_tot_p;

        if($request->id) {

            $cart = session()->get('game_cart');

            if(isset($cart[$request->id])) {
                unset($cart[$request->id]);
                session()->put('game_cart', $cart);
            }

            $this->remove_temp_slot($slot_guid,$data_store,$data_tot_p);

            if ($cart == null){
                session()->forget(['new_order_id_val','game_cart','order_id','tzsk_payu_data','name','email','phone','aadhar','age','TotalAmountInclTax','OrderGUID','game_checkout_cart','s_end_time']);

            }

            session()->flash('success', 'Product removed successfully');
        }
    }

    public function remove_temp_slot($slot_guid,$data_store,$data_tot_p){

        $get_random_value = 'WEB'.rand(100000,99999999);
        $order_id = session()->get('new_order_id_val');
        $session_id = Session::getId();
        $fields = array($slot_guid,$data_store,$data_tot_p,$order_id);
        \Log::info($fields);
        $fields = array(
            'WebSiteOrderID' => "$order_id",
            'store' => "$data_store",
            "RequestType"=>"Release",
            'Slots' =>
                array (
                    0 =>
                        array (
                            'slotGUID' => "$slot_guid",
                            'NoOfPlayersBooked' => (int)$data_tot_p,
                        ),
                ),
        );

        \Log::info($fields);
        $url = 'https://prod-00.centralindia.logic.azure.com:443/workflows/20fd5ee500c24c6eb01d51a076ce1279/triggers/manual/paths/invoke?api-version=2016-06-01&sp=%2Ftriggers%2Fmanual%2Frun&sv=1.0&sig=62aTqerXbmANDKjMoGMX__P1gDLUEooF2q8o3epASFI';
        $headers = [
            'Cache-Control: no-cache',
            'Content-Type: application/json; charset=utf-8'
        ];
        $client = new Client([
            'headers' => $headers
        ]);

        $create_temp_slots= $request = $client->post($url,[
            \GuzzleHttp\RequestOptions::JSON => $fields
        ]);
        $create_temp_slots->getStatusCode();
        $create_temp_slots = json_decode($create_temp_slots->getBody()->read(1024*100000));

        return $create_temp_slots;
    }

    public function gamergodness_save(Request $request){

        $name = $request->name;
        $email = $request->email;
        $phone_no = $request->phone_no;
        $preferred_game = $request->preferred_game;

        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email',
            'phone_no' => 'required',
            'preferred_game' => 'required',
        ]);

        if ($validator->passes()) {

            $save_contact = new GamerGodnessForm();
            $save_contact->name = $name;
            $save_contact->email = $email;
            $save_contact->phone_no = $phone_no;
            $save_contact->preferred_game = $preferred_game;
            $save_contact->ip = $request->getClientIp();
            $save_contact->save();
            $last_save_id = $save_contact->id;
            $this->gg_transfer_lead_into_crm($name,$email,$phone_no,$preferred_game,$last_save_id);
            return response()->json(['success'=>'Added new records.']);
        }

        return response()->json(['error'=>$validator->errors()]);
    }


    public function gg_transfer_lead_into_crm($name,$email,$phone_no,$preferred_game,$last_save_id)
    {
        $token= $this->t_token;
        $headers = [
            'Content-Type' => 'application/json',
            'Authorization' => 'Bearer '.$token->token,
            'Accept' => 'application/json',
            'Prefer' => 'return=representation',
        ];
        $client = new Client([
            'headers' => $headers
        ]);
        $url = 'https://mgravity.api.crm8.dynamics.com/api/data/v9.1/leads?$select=leadid';
        $create_leads= $request = $client->post($url,[
            \GuzzleHttp\RequestOptions::JSON => [ 'firstname' =>  $name,
                'lastname' => 't',
                'mobilephone' => $phone_no,
                'emailaddress1'=>$email,
                'statuscode'=>1,
                'mg_preferredgame' => $preferred_game,
            ]
        ]);

        $create_leads->getStatusCode();
        $response = json_decode($create_leads->getBody()->read(1024*100000));
        $lead_id = $response->leadid;
        $last_save_id = GamerGodnessForm::findOrFail($last_save_id);
        $last_save_id->lead_id = $lead_id;
        $last_save_id->save();
    }


    public function contact_us(Request $request)
    {
        $name = $request->name;
        $email = $request->email;
        $phone = $request->phone;
        $message = $request->message;

        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'message' => 'required',
        ]);

        if ($validator->passes()) {

            $save_contact = new ContactUs();
            $save_contact->name = $request->name;
            $save_contact->email = $request->email;
            $save_contact->phone = $request->phone;
            $save_contact->message = $request->message;
            $save_contact->save();
            $last_save_id = $save_contact->id;
            return response()->json(['success'=>'Added new records.']);
        }

        return response()->json(['error'=>$validator->errors()]);
    }

    public function transfer_lead_into_crm($name,$email,$phone,$message,$last_save_id)
    {

        $token= $this->t_token;
        $headers = [
            'Content-Type' => 'application/json',
            'Authorization' => 'Bearer '.$token->token,
            'Accept' => 'application/json',
            'Prefer' => 'return=representation',
        ];
        $client = new Client([
            'headers' => $headers
        ]);
        $url = 'https://mgravity.api.crm8.dynamics.com/api/data/v9.1/leads?$select=leadid,_customerid_value';
        $create_leads= $request = $client->post($url,[
            \GuzzleHttp\RequestOptions::JSON => [ 'firstname' =>  $name,
                'lastname' => 't',
                'mobilephone' => $phone,
                'emailaddress1'=>$email,
                'mg_birthdate'=>'1994-06-22',
                'address1_city' => 'd',
                'statuscode'=>100000000,
                "leadsourcecode"=>8,
            ]
        ]);

        $create_leads->getStatusCode();
        $response = json_decode($create_leads->getBody()->read(1024*100000));
        echo $create_leads;
        $lead_id = $response->leadid;
        $_customerid_value = $response->_customerid_value;
        $last_save_id = ContactUs::findOrFail($last_save_id);
        $last_save_id->lead_id = $lead_id;
        $last_save_id->_customerid_value = $_customerid_value;
        $last_save_id->save();
    }

    public function games($games_id){

        $data = array();
        $slug = $games_id;
        $get_games = ProductFamily::where('slug',$slug)->first();

        if ($get_games == null){
            return abort(404);
        }

        $timestamp = Carbon::now()->getPreciseTimestamp(3);
        $get_random_value = 'WEB'.$timestamp;
        $order_id = session()->get('new_order_id_val');

        if ($order_id == null){
            session()->put('new_order_id_val', $get_random_value);
        }

        $product_family_id = $get_games->ProductFamilyGUID;
        $get_sub_product_data = SubProduct::where('ProductFamilyGUID',$product_family_id)
                                            ->get();
        $get_product_gallery_data = ProductGallery::where('sub_product_id',$product_family_id)
            ->get();
        $get_sub_product_video_data = ProductVideo::where('sub_product_id',$product_family_id)
            ->get();
        $golf = "GOLF";
        $get_golf_products = Product::where('Parent',$golf)->where('status',true)->get();
        $data['get_games'] = $get_games;
        $data['get_golf_products'] = $get_golf_products;
        $data['get_sub_product_data'] = $get_sub_product_data;
        $data['get_product_gallery_data'] = $get_product_gallery_data;
        $data['get_sub_product_video_data'] = $get_sub_product_video_data;

        return view('pages.games', compact('data'));
    }

    public function all_games(){

        $data = array();
        $get_sub_product_data = SubProduct::inRandomOrder()->get();
        $data['get_sub_product_data'] = $get_sub_product_data;
        return view('pages.all_games', compact('data'));
    }

    public function booking($SubProductGUID,$ProductFamilyGUID,$StoreGUID,$date, Request $request){

        $data = array();
        $get_only_date = explode(' ',$date);

        if ($request->ajax()) {
            $date = $get_only_date[0]." 00:00:00";
        }

        $get_slot = $this->get_games_slot($date,$get_only_date,$ProductFamilyGUID,$StoreGUID);
        $get_all_games = $this->get_all_games();
        $get_product_family_name = $this->get_product_family_name($SubProductGUID);
        $get_slot_array  = array();

        foreach ($get_slot->value as $key=>$get_slot_value){

            if ($get_slot_value->_mg_subproduct_value == $get_product_family_name->SubProductGUID){
                $get_slot_array[] = $get_slot_value;
            }
        }

        $ProductFamily = $get_product_family_name->ProductFamily;
        $GameDuration = $get_product_family_name->GameDuration;
        $data['$get_sub_product_family'] = $get_product_family_name;
        $data['get_all_games'] = $get_all_games;
        $data['slot_data'] = $get_slot_array;
        $data['GameDuration'] = $GameDuration;
        $data['SubProductGUID'] = $SubProductGUID;
        $data['date'] = $date;

        if ($request->ajax()) {
            return view('pages.booking-ajax', compact('data'))->render();
        }
        else{
            return view('pages.booking',compact('data'));
        }
    }

    public function booking_golf($SubProductGUID,$ProductFamilyGUID,$StoreGUID,$date,$ProductType,$bay, Request $request){

        $data = array();
        $get_bay = $bay;

        if ($get_bay == "bay1"){
            $BayVal = "6542e1df-cc48-ea11-a812-000d3a0a7551";
        }else if($get_bay == "bay2"){
            $BayVal = "4700e8db-e089-ea11-a811-000d3a0a7551";
        }else{
            return abort(404);
        }

        $get_only_date = explode(' ',$date);

        if ($request->ajax()) {
            $date = $get_only_date[0]." 00:00:00";
        }

        $get_slot = $this->get_golf_games_slot($date,$get_only_date,$ProductFamilyGUID,$StoreGUID,$BayVal);

        $get_all_games = $this->get_all_games_golf();
        $get_product_family_name = $this->get_product_family_name($SubProductGUID);
        $golf = "GOLF";
        $get_golf_products = Product::where('Parent',$golf)->where('status',true)->get();
        $ProductFamily = $get_product_family_name->ProductFamily;
        $GameDuration = $get_product_family_name->GameDuration;
        $data['$get_sub_product_family'] = $get_product_family_name;
        $data['get_all_games'] = $get_all_games;
        $data['get_golf_products'] = $get_golf_products;
        $data['slot_data'] = $get_slot;
        $data['GameDuration'] = $GameDuration;
        $data['SubProductGUID'] = $SubProductGUID;
        $data['date'] = $date;
        $data['bay_type'] = $bay;
        $data['ProductType'] = $ProductType;

        if ($request->ajax()) {
            return view('pages.booking-golf-ajax', compact('data'))->render();
        }
        else{
            return view('pages.booking-golf',compact('data'));
        }
    }

    public function get_all_games(){
        $get_all_games = SubProduct::where('status',1)->where('ProductFamily','!=','GOLF')->get();
        return $get_all_games;
    }

    public function get_all_games_golf(){
        $get_all_games = SubProduct::where('status',1)->get();
        return $get_all_games;
    }

    public function get_product_family_name($SubProductGUID){
        $get_product_family_name = SubProduct::where('SubProductGUID',$SubProductGUID)->first();
        return $get_product_family_name;
    }

    public function get_golf_games_slot($date,$get_only_date,$ProductFamilyGUID,$StoreGUID,$BayVal){

        $url = 'https://mgravity.api.crm8.dynamics.com/api/data/v9.1/mg_slotitemses?$select=mg_slotitemsid,mg_name,_mg_productfamily_value,mg_starttime,mg_endtime,_mg_store_value,mg_playersbooked,mg_maximumplayersallowed,_mg_subproduct_value,mg_playersbookingunderprocess&$filter=mg_starttime ge \''.$date.'\' and mg_starttime le \''.$get_only_date[0].' 23:59:59\' and _mg_productfamily_value eq \''.$ProductFamilyGUID.'\' and statuscode eq 140180001 and _mg_store_value eq \''.$StoreGUID.'\' and _mg_bay_value eq \' '.$BayVal.' \'  &$expand=mg_Bay($select=mg_name)';


        \Log::info($url);
        $token= $this->t_token;
        $headers = [
            'Content-Type' => 'application/json',
            'Authorization' => 'Bearer '.$token->token,
            'Accept' => 'application/json',
            'Prefer' => 'return=representation',
            'Cache-Control: no-cache',
        ];

        $client = new Client([
            'headers' => $headers
        ]);
        $get_slot= $request = $client->request( 'GET',$url);
        $get_slot->getStatusCode();
        $get_slot = json_decode($get_slot->getBody()->read(1024*100000));
        return $get_slot;
    }

    public function get_games_slot($date,$get_only_date,$ProductFamilyGUID,$StoreGUID){

        $url = 'https://mgravity.api.crm8.dynamics.com/api/data/v9.1/mg_slotitemses?$select=mg_slotitemsid,mg_name,_mg_productfamily_value,mg_starttime,mg_endtime,_mg_store_value,mg_playersbooked,mg_maximumplayersallowed,_mg_subproduct_value,mg_playersbookingunderprocess&$filter=mg_starttime ge \''.$date.'\' and mg_starttime le \''.$get_only_date[0].' 23:59:59\' and _mg_productfamily_value eq \''.$ProductFamilyGUID.'\' and statuscode eq 140180001 and _mg_store_value eq \''.$StoreGUID.'\' ';


        \Log::info($url);
        $token= $this->t_token;
        $headers = [
            'Content-Type' => 'application/json',
            'Authorization' => 'Bearer '.$token->token,
            'Accept' => 'application/json',
            'Prefer' => 'return=representation',
            'Cache-Control: no-cache',
        ];

        $client = new Client([
            'headers' => $headers
        ]);

        $get_slot= $request = $client->request( 'GET',$url);
        $get_slot->getStatusCode();
        $get_slot = json_decode($get_slot->getBody()->read(1024*100000));

        return $get_slot;
    }

    public function timer(Request $request){
        $from_time1 = date('Y-m-d H:i:s');
        $setime = session()->get('s_end_time');
        $to_time1 = request()->cookie('end_time');
        $time_first = strtotime($from_time1);
        $time_second = strtotime($to_time1);
        $difference_in_seconds = $time_second-$time_first;

        if ($setime == null){
            return response()->json(['setime'=>null]);
        }

        return response()->json(['setime'=>$setime]);
    }

    public function session_check(){

        $cart = session()->get('game_checkout_cart');

        if ($cart == null){
            return response()->json(['session'=>null]);
        }else{
            return response()->json(['session'=>true]);
        }

    }


    public function get_price(Request $request){

        $slot_data = $request->slot_data;
        $total_player = $request->total_player;
        $sub_product_family = $request->sub_product_family;
        \Log::info($slot_data);

        $slot_date = explode('T',$slot_data['mg_starttime']);
        $slot_date = $slot_date[0];
        $slot_time = explode(' ',$slot_data['mg_name']);
        $slot_time = $slot_time[0];
        $SubProductName = $sub_product_family['SubProductName'];
        $ProductFamily = $sub_product_family['ProductFamily'];
        $GameDuration = $sub_product_family['GameDuration'];
        $get_products_data = Product::where('Parent',$ProductFamily)
            ->where('MaximumPlayers',$total_player)
            ->where('Duration',$GameDuration)
            ->first();

//        \Log::info($get_products_data);

        $get_price = ProductPriceListItems::where('ProductGUID',$get_products_data->ProductGUID)
            ->first();
        $slot_amount = $get_price->Amount;


        return response()->json(['slot_amount'=>$slot_amount,'total_player'=>$total_player,
            'SubProductName'=>$SubProductName,'slot_time'=>$slot_time,
            'slot_date'=>$slot_date]);
    }

    public function get_price_golf(Request $request){

        $slot_data = $request->slot_data;
        $total_player = $request->total_player;
        $product_type_id = $request->product_type_id;
        \Log::info($slot_data);

        $slot_date = explode('T',$slot_data['mg_starttime']);
        $slot_date = $slot_date[0];
        $slot_time = explode(' ',$slot_data['mg_name']);
        $slot_time = $slot_time[0];
        $get_products_data = Product::where('ProductID',$product_type_id)
            ->first();
        $ProductName = $get_products_data->ProductName;
        $get_price = ProductPriceListItems::where('ProductGUID',$get_products_data->ProductGUID)
            ->first();
        $slot_amount = $get_price->Amount;

        return response()->json(['slot_amount'=>$slot_amount,'total_player'=>$total_player,'product_name'=>$ProductName,'slot_time'=>$slot_time,'slot_date'=>$slot_date]);
    }

    public function cancel_order(){
        $data = array();
        $cancel_data = $this->release_order();
        session()->forget(['new_order_id_val','game_cart','order_id','tzsk_payu_data','name','email','phone','TotalAmountInclTax','OrderGUID','game_checkout_cart','s_end_time','create_order']);
        session()->regenerate(true);
        $data['cancel_data'] = $cancel_data;

        return view('pages.thankyou',compact('data'));
    }

    public function cancel_ordert(){

        $data = array();
        $cancel_data = 1;
        session()->forget(['new_order_id_val','game_cart','order_id','tzsk_payu_data','name','email','phone','TotalAmountInclTax','OrderGUID','game_checkout_cart','s_end_time','create_order']);
        session()->regenerate(true);
        $data['cancel_data'] = $cancel_data;

        return view('pages.thankyou',compact('data'));
    }

    public function release_ordert(){

        $timestamp = Carbon::now()->getPreciseTimestamp(3);
        $get_random_value = 'WEB'.$timestamp;
        $order_id = session()->get('new_order_id_val');
        $t_mg_store_value = session()->get('t_mg_store_value');
        $t_total_player = session()->get('t_total_player');
        $t_slot = session()->get('t_slot');
        $t_slot = $t_slot->result[0]->slotGUID;
        $session_id = Session::getId();
        $fields = array(
            'WebSiteOrderID' => "$order_id",
            'store' => "$t_mg_store_value",
            "RequestType"=>"Release",
            'Slots' =>
                array (
                    0 =>
                        array (
                            'slotGUID' => "$t_slot",
                            'NoOfPlayersBooked' => (int)$t_total_player,
                        ),
                ),
        );

        $url = 'https://prod-00.centralindia.logic.azure.com:443/workflows/20fd5ee500c24c6eb01d51a076ce1279/triggers/manual/paths/invoke?api-version=2016-06-01&sp=%2Ftriggers%2Fmanual%2Frun&sv=1.0&sig=62aTqerXbmANDKjMoGMX__P1gDLUEooF2q8o3epASFI';
        $headers = [
            'Cache-Control: no-cache',
            'Content-Type: application/json; charset=utf-8'
        ];
        $client = new Client([
            'headers' => $headers
        ]);
        $create_temp_slots= $request = $client->post($url,[
            \GuzzleHttp\RequestOptions::JSON => $fields
        ]);
        $create_temp_slots->getStatusCode();
        $create_temp_slots = json_decode($create_temp_slots->getBody()->read(1024*100000));

        return $create_temp_slots;
    }

    public function release_order(){

        $timestamp = Carbon::now()->getPreciseTimestamp(3);
        $get_random_value = 'WEB'.$timestamp;
        $order_id = session()->get('new_order_id_val');
        $t_mg_store_value = session()->get('t_mg_store_value');
        $t_total_player = session()->get('t_total_player');
        $t_slot = session()->get('t_slot');
        $t_slot = $t_slot->result[0]->slotGUID;
        $session_id = Session::getId();
        $fields = array(
            'WebSiteOrderID' => "$order_id",
            'store' => "$t_mg_store_value",
            "RequestType"=>"Release",
            'Slots' =>
                array (
                    0 =>
                        array (
                            'slotGUID' => "$t_slot",
                            'NoOfPlayersBooked' => (int)$t_total_player,
                        ),
                ),
        );

        $url = 'https://prod-00.centralindia.logic.azure.com:443/workflows/20fd5ee500c24c6eb01d51a076ce1279/triggers/manual/paths/invoke?api-version=2016-06-01&sp=%2Ftriggers%2Fmanual%2Frun&sv=1.0&sig=62aTqerXbmANDKjMoGMX__P1gDLUEooF2q8o3epASFI';
        $headers = [
            'Cache-Control: no-cache',
            'Content-Type: application/json; charset=utf-8'
        ];
        $client = new Client([
            'headers' => $headers
        ]);
        $create_temp_slots= $request = $client->post($url,[
            \GuzzleHttp\RequestOptions::JSON => $fields
        ]);
        $create_temp_slots->getStatusCode();
        $create_temp_slots = json_decode($create_temp_slots->getBody()->read(1024*100000));

        return $create_temp_slots;
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
        $cancel_order= $request = $client->post($url,[
            \GuzzleHttp\RequestOptions::JSON => $fields
        ]);
        $cancel_order->getStatusCode();
        $cancel_order = json_decode($cancel_order->getBody()->read(1024*100000));

        return $cancel_order;
    }

}
