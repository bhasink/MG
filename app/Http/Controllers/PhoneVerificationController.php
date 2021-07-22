<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Cache;
use App\User;
use Session;

class PhoneVerificationController extends Controller
{

    public $t_token;

    public function __construct()
    {
        $this->middleware('auth');
        $this->t_token = $this->get_token();
    }


    public function show(Request $request)
    {

        if ($request->user() == null){
            return redirect('/');
        }

        return optional($request->user())->hasVerifiedPhone()
            ? redirect()->route('wavier')
            : view('verifyphone');
    }

    public function verify(Request $request)
    {
        if ($request->user()->verification_code !== $request->code) {
            throw ValidationException::withMessages([
                'code' => ['The code your provided is wrong. Please try again or request another call.'],
            ]);
        }

        $this->check_leads_exist_in_crm($request);
        if ($request->user()->hasVerifiedPhone()) {

            return redirect()->route('wavier');
        }
        $request->user()->markPhoneAsVerified();

        return redirect()->route('wavier')->with('status', 'Your phone was successfully verified!');
    }

    public function check_leads_exist_in_crm($user_details){

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
        $url = 'https://mgravity.api.crm8.dynamics.com/api/data/v9.1/contacts?$select=firstname,lastname,mg_rfidcardid,mg_gamevalue,mg_gamevaliditydate&$filter=contains(mobilephone,\''.$user_details->user()->phone.'\') ';

        $check_leads_exist= $request = $client->request( 'GET',$url );
        $check_leads_exist->getStatusCode();
        $check_leads_exist = json_decode($check_leads_exist->getBody()->read(1024*100000));

        if ($check_leads_exist->value == null){
            $this->create_leads($user_details);
        }

    }

    public function thanks(){

        return view('pages.thanks');
    }
    


    public function create_leads($user_details){

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
                \GuzzleHttp\RequestOptions::JSON => [ 'firstname' => $user_details->user()->name,
                    'lastname' => '.',
                    'mobilephone' => $user_details->user()->phone,
                    'emailaddress1'=>$user_details->user()->email,
                    'mg_birthdate'=>$user_details->user()->dob,
                    'address1_city' => $user_details->user()->city,
                    'statuscode'=>100000000,
                    "leadsourcecode"=>8,
                    ]
            ]);

        $create_leads->getStatusCode();
        $create_leads = json_decode($create_leads->getBody()->read(1024*100000));
    }


    public function buildTwiML($code)
    {
        $code = $this->formatCode($code);
        echo $code;
    }

    public function formatCode($code)
    {
        $collection = collect(str_split($code));
        return $collection->reduce(
            function ($carry, $item) {
                return "{$carry}. {$item}";
            }
        );
    }
    
    public function resend_otp(User $user, Request $request){

        $id = $request->user()->id;
        $user->callToVerifyResend($id);
        return "success";
    }

}
