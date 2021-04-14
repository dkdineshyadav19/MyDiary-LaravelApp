<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class publiccontroller extends Controller
{
    
  public function public()
   {
       return view('welcome');
   }
   public function check(Request $request )
   {
       $request->validate([
           'email'=>'required |max:50',
           'message'=>'required |max:200'
   ]);
   return redirect('contact');
       }
}
