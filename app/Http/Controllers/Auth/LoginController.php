<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Session;
use Auth;
use Redirect;


class LoginController extends Controller
{
    use AuthenticatesUsers;

    protected $redirectTo = '/wavier-tc';

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    protected function sendLoginResponse(Request $request)
    {
        session()->put('update_session_id',Session::getId());
        return redirect('/wavier-tc');
    }

    public function blogin(){
        return view('auth.blogin');
    }

    public function bloginpost(Request $request){

        $check_session = session()->get('game_type');
        if ($check_session != null && $check_session == "checkout"){

            $s_end_time = session()->get('s_end_time');

            if ($s_end_time != null){
                session()->forget('s_end_time');
            }
        }

        $request->validate([
            'email' => ['required', 'string', 'email', 'max:255'],
            'password' => ['required', 'string', 'min:8'],
        ]);

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            return redirect()->intended('/');
        }else {
            return Redirect::to('blogin')->withErrors(array('password' => 'Email id or Password is invalid!'));
        }
    }

    public function logout()
    {
        session()->forget(['new_order_id_val','game_cart','order_id','tzsk_payu_data','name','email','phone','aadhar','age','TotalAmountInclTax','create_order','OrderGUID','game_checkout_cart','s_end_time']);

        Auth::logout();
        return redirect('/');
    }
}
