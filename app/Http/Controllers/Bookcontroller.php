<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Bookcontroller extends Controller
{
    public function allbook(){
        $book="tor matha";
        return view('Allbook',['bok'=>$book]);
    }
}
