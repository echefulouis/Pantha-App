<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
	
    public function index()
   {
   		$user = Auth::user();
      	return view('backend.user.dashboard',compact('user'));
   }

    public function message()
   {

      return view('backend.user.pages.message');
   }

   public function traveller()
   {
      return view('site.pages.become-traveller');
   }

   public function sender()
   {
      return view('site.pages.sender');
   }


    public function support()
   {
      return view('backend.user.pages.support');
   }
   
}
