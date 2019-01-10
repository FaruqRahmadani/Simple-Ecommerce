<?php

namespace App\Http\Controllers;

use App\Repositories\ProductRepository;
use App\Repositories\OrderRepository;
use Illuminate\Http\Request;
use Faker\Factory;
use Validator;

class ProductController extends Controller
{
  public function order(){
    return view('product.order');
  }

  public function submit(Request $request, OrderRepository $order, ProductRepository $product){
    Validator::make($request->all(),[
      'product' => ['required', 'between:10,150'],
      'address' => ['required', 'between:10,150'],
      'price' => ['required', 'numeric'],
    ])->validate();
    $faker = Factory::create();
    $orderData['type'] = 2;
    $orderData['price'] = $request->price + 10000;
    do {
      $orderData['number'] = $faker->numerify('##########');
    } while ($order->where('number', $orderData['number'])->get()->count());
    $order = $order->store($orderData);
    $product->store(array_merge($request->all(), ['order_id' => $order->id]));
    return redirect()->route('productDetail', ['id' => encrypt($order->id)]);
  }

  public function detail($id, OrderRepository $order){
    $order = $order->get($id);
    return view('product.detail', compact('order'));
  }
}
