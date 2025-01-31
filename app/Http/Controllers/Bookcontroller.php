<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Bookcontroller extends Controller
{
    public function allbook(){
       $data=[
        ['id'=>23,'name'=>'tarin'],
        ['id'=>23,'name'=>'tarin'],
        ['id'=>23,'name'=>'tarin'],
        ['id'=>23,'name'=>'tarin']
       ];

       return view('Allbook',['item'=>$data]);
    }
}
