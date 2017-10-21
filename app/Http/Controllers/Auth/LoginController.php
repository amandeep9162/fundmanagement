<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $loginPath = '/abcccb';
    protected $redirectTo = '/create/event';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        echo 123453;
        $this->middleware('guest')->except('logout');
    }

    public function loginform(){
        return view('login.login');
    }
}
