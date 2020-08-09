<?php

namespace App\Http\Controllers\Auth;

use App\Role;
use App\User;
use Auth;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
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
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

        protected function logout()
    {
        if(Auth::user()->role === 'admin' || Auth::user()->role === 'user'){
            $fireTo = url('admin/login'); 
        }else{
            $fireTo = url('login');
        }
        if (request()->expectsJson()) {
          Auth::logout();
          return response()->json(['success'=> true,'url' => $fireTo]);
        }
        Auth::logout();
        return redirect()->route('login');
    }


    protected function authenticated($request , $user){
        
        if(!$user->is_verified){
          Auth::logout();
          return redirect()->to('login')->with([
            "verifyAccount"=>"Please check your email and verify your account to continue.",
             'user' => $user->email]);
        }
        if($user->status !== 'active'){
          Auth::logout();
          return redirect()->back()->with('error', "Please you are allow to login. Your account has been ".$user->status);
        }
        if($user->hasRole('customer')){
            return redirect()->route('home')->with('success','You are logged in');
        }elseif($user->hasRole('admin')){
            return redirect()->to('/admin/dashboard');
        }else{
          session()->flush();
          return redirect()->route('home');
        } 
    }

}
