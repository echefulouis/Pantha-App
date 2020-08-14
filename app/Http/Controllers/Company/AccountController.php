<?php

namespace App\Http\Controllers\Company;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AccountController extends Controller
{
    public function index()
   {
      return view('company.dashboard');
   }

    public function showLoginForm()
    {
    	return view('auth.company-login');
    }

     public function login(Request $request)
    {
    	//Validate form data
    	$this->validate($request, [
    		'email' => 'required|email',
    		'password' => 'required|min:4'
    	]);
    	// Attemt to log the user in
    	if(Auth::guard()->attempt(['email'=>$request->email, 'password'=> $request->password],$request->remember)){
    		//if successfull, the redirect to their intended location
    		return redirect()->route('dashboard');
    	}
    	//if unsuccessful, then redirect back to the login with the form

    	return redirect()->back()->withInput($request->only('email','remember'));
    }


    public function showRegisterForm()
    {
    	return view('auth.company-register');
    }

     public function register(Request $request)
    {
    	 $validatedData  = $request->validate([
                'first_name' => 'required|string|max:255',
                'last_name' => 'required|string|max:255',
                'mobile' => 'required|numeric|unique:admins,mobile',
                'role_id' => 'required|integer',
                'email' => 'required|string|email|unique:admins,email|max:255',
                'password' => 'required_with:password_confirmation|confirmed|min:4'
        ]);

        if($request->hasfile('image'))
        {
            $request->validate(['image' => 'required|image|max:100']);
            $userImage = $this->ImageUploader($request->image,'users');
            $validatedData['image'] = $userImage;
        }else{
            $validatedData['image'] = 'user.png';
        }

        $validatedData['password'] = bcrypt($request->password);

        $addedUser = Admin::create($validatedData);
        Log::create(['admin_id'=>Auth::guard('admin')->user()->id,'activity'=>'Added new user: '.$addedUser->id]);

        return redirect()->route('admin.users.index')->with('success','The user has been created successfully');
    }
}
