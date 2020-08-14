<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use App\Role;
use App\Events\NotificationEvent;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
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
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'phone' => ['required', 'string', 'max:25', 'unique:users,phone'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {

        $default_role = 3;
        $role = Role::where('id', $default_role)->first();
        if(is_null($role)){
            return redirect()->back()->withErrors('Sorry you can not be registered');
        }

        $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'phone' => $data['phone'],
            'password' => Hash::make($data['password']),
            'role_id' => $default_role,
            'role' => $role->name,
        ]);

        // event(new NotificationEvent([
        //     'type' => 'success',
        //     'title' => 'New Customer registered',
        //     'text' => 'A new customer has successfully registered',
        //     'icon' => 'AlertOctagonIcon',
        //     'url' => '/admin/users/'.$user->id
        // ]));
        return $user;
    }


     protected function registered($request, $user)
    {
        //This helps to send users or customer to their specific dashboard
        if($user->hasRole('user')){
          return redirect()->route('user.dashboard')->with("success","You are registered");
        }else{
          session()->flush();
          return redirect()->route('home');
        } 

    }
}
