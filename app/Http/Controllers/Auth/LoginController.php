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
        if(Auth::user()->role == 'admin'){
            $fireTo = 'admin/login'; 
        }elseif(Auth::user()->role == 'company'){
            $fireTo = 'company/login';
        }else{
          $fireTo = 'login';
        }
        if (request()->expectsJson()) {
          Auth::logout();
          return response()->json(['success'=> true,'url' => url($fireTo)]);
        }
        Auth::logout();
        return redirect()->to($fireTo);
    }


    protected function authenticated($request , $user){
        
      if($user->hasRole('user')){
        return redirect()->route('user.dashboard')->with("success","You are logged in");
      }elseif($user->hasRole('company')){
        return redirect()->route('company.dashboard')->with("success","You are logged in");
      }elseif($user->hasRole('admin')){
          return redirect()->to('admin/dashboard');
      }else{
        session()->flush();
        return redirect()->route('home');
      } 
    }

}
