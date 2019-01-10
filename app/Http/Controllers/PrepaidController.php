<?php

namespace App\Http\Controllers;

use App\Repositories\PrepaidRepository;
use App\Repositories\OrderRepository;
use Illuminate\Validation\Rule;
use Illuminate\Http\Request;
use Faker\Factory;
use Validator;

class PrepaidController extends Controller
{
  public function order(){
    return view('prepaid.order');
  }

  public function submit(Request $request, OrderRepository $order, PrepaidRepository $prepaid){
    Validator::make($request->all(),[
      'phone_number' => ['required', 'numeric', 'digits_between:7,12', 'starts_with:081'],
      'value' => 'required',
    ])->validate();
    $faker = Factory::create();
    $orderData['type'] = 1;
    $orderData['price'] = $request->value + ($request->value*0.05);
    do {
      $orderData['number'] = $faker->numerify('##########');
    } while ($order->where('number', $orderData['number'])->get()->count());
    $order = $order->store($orderData);
    $prepaid->store(array_merge($request->all(), ['order_id' => $order->id]));
    return redirect()->route('prepaidDetail', ['id' => encrypt($order->id)]);
  }

  public function detail($id, OrderRepository $order){
    $order = $order->get($id);
    return view('prepaid.detail', compact('order'));
  }
}
