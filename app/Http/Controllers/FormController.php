<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
   public function show(){
    return view('register');
   }

   public function handleform(Request $request){
   

   }
}
