<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function view()
    {
     return view('Frontend.home');
   }
   public function Table()
    {
     return view('Frontend.table');
   }
}
