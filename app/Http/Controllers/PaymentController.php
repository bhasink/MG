<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Tzsk\Payu\Facade\Payment;
use Illuminate\Support\Facades\Cache;
use GuzzleHttp\Client;
use Session;

class PaymentController extends Controller
{

    public $t_token;

    public function __construct()
    {
        $this->middleware('auth');
        $this->t_token = $this->get_token();
        config(['session.same_site' => null]);
    }


    public function payment(){

        $session_id = Session::getId();
        $order_id = session()->get('new_order_id_val');
        $TotalAmountInclTax = session()->get('TotalAmountInclTax');
        $name = session()->get('name');
        $email = session()->get('email');
        $phone = session()->get('phone');
        $attributes = [
            'txnid' => $order_id,
            'amount' => (float)$TotalAmountInclTax,
            'productinfo' => "MicroGravity",
            'firstname' => $name,
            'email' => $email,
            'phone' => $phone,
        ];

        return Payment::make($attributes, function ($then) {
            $then->redirectAction('PaymentController@status');
        });
    }


    public function status(){
        $data = array();
        $tzsk_payu_data = session()->get('tzsk_payu_data.payment');
        $name = session()->get('name');
        $email = session()->get('email');
        $age = session()->get('age');
        $phone = session()->get('phone');
        $aadhar = session()->get('aadhar');
        $OrderGUID = session()->get('OrderGUID');

        if ($tzsk_payu_data != null){

            $payment = Payment::capture();

            $check = $payment->isCaptured();

            if ($check == true){

                $payment->save();
                $this->payment_creation_api($tzsk_payu_data);
                $this->waiver_form_api($OrderGUID, $name, $email, $age, $phone, $aadhar);
                session()->regenerate(true);
                session()->forget(['new_order_id_val','game_cart','order_id','tzsk_payu_data','name','email','phone','aadhar','age','TotalAmountInclTax','OrderGUID','game_checkout_cart','s_end_time']);
            }

            $data['check'] = $check;
            $data['payment'] = $tzsk_payu_data;
        }
        else{
            return redirect('/');
        }

        return view('pages.thankyou',compact('data'));

    }


    public function payment_creation_api($data){

        $getdate = json_decode($data['data']);
        $mihpayid = $data['mihpayid'];
        
        if (isset($data['cardnum'])){
            $cardnum = $data['cardnum'];
        }else{

            $cardnum = "Undefined";
        }
        $date = date('Y-m-d',strtotime($getdate->addedon));
        $token= $this->t_token;
        $session_id = Session::getId();
        $order_id = session()->get('new_order_id_val');
        $OrderGUID = session()->get('OrderGUID');
        $TotalAmountInclTax = session()->get('TotalAmountInclTax');
        $fields = array(
            'Token' => "$token->token",
            'PaymntModes' => array (
                0 =>
                    array (
                        'Name' => "$order_id",
                        'PaymentMethod' => "c42f8b6f-73b5-ea11-a812-000d3a0a7551",
                        'PaymentType' => 690970004,
                        'Amount' => (float)$TotalAmountInclTax,
                        'Date' => "$date",
                        'PaymentTrnID' => "$mihpayid",
                        'CardNo' => "$cardnum",
                        'BankName' => "Undefined"
                    ),
            ),
            'Order' =>$OrderGUID,
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
        session()->get('create_payment_req',$create_payment_req);

        return $create_payment_req;
    }

    public function waiver_form_api($get_order_guid,$name,$email,$age,$phone,$aadhar){

        $token= $this->t_token;
        $username = explode(' ',$name,2);
        $fields = array(
            'OrderGUID' => "$get_order_guid",
            'Players' => array (
                0 =>
                    array (
                        'FirstName' => "$name",
                        'LastName' => ".",
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
}
