<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
function showhello($name){
   return '<h1>Hello:'.$name.'</h1>';
   }
}
