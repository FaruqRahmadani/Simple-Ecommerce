<?php

namespace App\Http\Controllers;

use Illuminate\Validation\Rule;
use Illuminate\Http\Request;
use Validator;

class PrepaidController extends Controller
{
  public function order(){
    return view('prepaid.order');
  }

  public function submit(Request $request){
    Validator::make($request->all(),[
      'phone_number' => ['required', 'numeric', 'digits_between:7,12', 'starts_with:081'],
      'value' => 'required'
    ])->validate();
    dd($request->all());
  }
}
