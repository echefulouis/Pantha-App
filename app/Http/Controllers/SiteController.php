<?php

namespace App\Http\Controllers;

use Auth;
use App\Subscriber;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class SiteController extends Controller
{

   public function comingSoon()
   {
      return view('site.pages.coming-soon');
   }
   
    public function subscribe(Request $request)
   {

      $validator = Validator::make($request->all(), [
          'email' => ['required', 'string', 'email', 'max:255', 'unique:subscribers'],
     ]);

     if ($validator->fails()) {
         return redirect()->back()
                     ->withErrors($validator)
                     ->withInput();
     }
      $validatedData = $validator->validated();
      Subscriber::create([
         'email' => $validatedData['email'],
      ]);
      return redirect()->back()->with('subscribe-success',"Thanks for subscribing. You will receive notifications and updates from us.");
   }

   public function index()
   {
   	return view('site.home');
   }

   public function about()
   {
      return view('site.pages.about');
   }

    public function contact()
   {
      return view('site.pages.contact');
   }

   public function dashboard()
   {
      $user = Auth::user();
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
