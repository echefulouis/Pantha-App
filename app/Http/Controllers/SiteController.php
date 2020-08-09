<?php

namespace App\Http\Controllers;

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
      return redirect()->back()->with('success',"Thanks for subscribing. You will receive notifications and updates from us.");
   }

   public function index()
   {
   	return view('site.home');
   }

   public function about()
   {
      return view('site.pages.about');
   }

   public function policy()
   {
      return view('site.pages.privacy-policy');
   }

   public function conditions()
   {
      return view('site.pages.terms-conditions');
   }


}
