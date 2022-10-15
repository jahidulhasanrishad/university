<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BackendController extends Controller
{
   public function home()
     {
    	return view('Backend.home');
    }
    public function Calender()
     {
    	return view('Backend.Calender');
    }
}
