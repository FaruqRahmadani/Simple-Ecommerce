<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrepaidController extends Controller
{
  public function order(){
    return view('prepaid.order');
  }
}
