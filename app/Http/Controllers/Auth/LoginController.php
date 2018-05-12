<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Auth;
use Illuminate\Http\Request;

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
    protected $redirectTo = '/admin';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    
    public function login_page()
    {

        return view('auth.login');
    }

    public function authenticateUsers(Request $request)
    {
        
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])){   
            return redirect('front_page');
        
        }else{

            return redirect()->back()->with('error', 'Invalid credentials please verify before login')->withInput();    
        }
    }

    public function logout()
    {
        Auth::logout();

        return redirect('/');
    }
}
