<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
     function show(){
       return view('users')
       ->with('name','karansin')
       ->with('title','Laravel tutorial');
  }
}
