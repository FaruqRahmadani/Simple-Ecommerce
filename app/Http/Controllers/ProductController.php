<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;

class ProductController extends Controller
{
  public function order(){
    return view('product.order');
  }

  public function submit(Request $request){
    Validator::make($request->all(),[
      'product' => ['required', 'between:10,150'],
      'address' => ['required', 'between:10,150'],
      'price' => ['required', 'numeric'],
    ])->validate();
    dd($request->all());
  }
}
