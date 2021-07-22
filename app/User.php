<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use GuzzleHttp\Client;
use Carbon\Carbon;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'phone', 'password','dob','city','verification_code','phone_verified_at'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'phone_verified_at' => 'datetime',
    ];



    public function hasVerifiedPhone()
    {
        return ! is_null($this->phone_verified_at);
    }

    public function markPhoneAsVerified()
    {
        return $this->forceFill([
            'phone_verified_at' => $this->freshTimestamp(),
        ])->save();
    }


    public function callToVerify()
    {
        $code = random_int(100000, 999999);

        $this->forceFill([
            'verification_code' => $code
        ])->save();


        $text=  "Dear User,
Your registration OTP is $code. This is valid for only 5 minutes and can be used only once.
Happy to help
Team Microgravity!!";


        $client = new Client;

        $sms_api = "https://bulkpush.mytoday.com/BulkSms/SingleMsgApi?feedid=378010&text=$text&to=$this->phone&username=9210918006&password=Mgravity123@";

        $sms_apii= $request = $client->request( 'GET',$sms_api );

        $sms_apii->getStatusCode();

    }


    public function callToVerifyResend($id)
    {

        $code = random_int(100000, 999999);

        $get_user = User::where('id', $id)->first();
        User::where('id', $id)->update(array('verification_code' => $code));

        $text=  "Dear User,
Your registration OTP is $code. This is valid for only 5 minutes and can be used only once.
Happy to help
Team Microgravity!!";

        $client = new Client;

        $sms_api = "https://bulkpush.mytoday.com/BulkSms/SingleMsgApi?feedid=378010&text=$text&to=$get_user->phone&username=9210918006&password=Mgravity123@";

        $sms_apii= $request = $client->request( 'GET',$sms_api );

        $sms_apii->getStatusCode();

    }


    public function callToResetPassword($id)
    {

        $code = random_int(100000, 999999);

        $get_user = User::where('id', $id)->first();
        User::where('id', $id)->update(array('verification_code' => $code));

        $text=  "Dear $get_user->name,
The OTP to reset your Microgravity Account is $code.
Happy to help
Team Microgravity!!";

        $client = new Client;

        $sms_api = "https://bulkpush.mytoday.com/BulkSms/SingleMsgApi?feedid=378010&text=$text&to=$get_user->phone&username=9210918006&password=Mgravity123@";

        $sms_apii= $request = $client->request( 'GET',$sms_api );

        $sms_apii->getStatusCode();

    }

    public function getAgeAttribute() {
        return Carbon::parse($this->dob)->diffInYears(Carbon::now());
    }

    public function sendPasswordResetNotification($token)
    {
//        $url = 'https://microgravity.co.in/password/reset/'.$token.'?email='.$this->email;
//
////        dd($url);.''
//        $this->notify(new ResetPasswordNotification($url));
    }

}
