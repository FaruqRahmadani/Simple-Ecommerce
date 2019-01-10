<?php

namespace App\Http\Controllers;

use App\Repositories\ProductRepository;
use App\Repositories\OrderRepository;
use Illuminate\Http\Request;
use Faker\Factory;
use Carbon\Carbon;
use Auth;

class OrderController extends Controller
{
  public function history(OrderRepository $order){
    $order = $order->where('user_id', Auth::User()->id)->orderBy('created_at', 'desc')->paginate(20);
    return view('order.history', compact('order'));
  }

  public function paymentForm($id = null){
    $nowTime = Carbon::now()->format("H");
    return view('order.payment', compact('id'));
  }

  public function paymentSubmit(Request $request, OrderRepository $orderRepo, ProductRepository $productRepo){
    $order = $orderRepo->where('number', $request->payment_id)->first();
    if ((!$order) || ($order->user_id != Auth::User()->id)) return redirect()->back()->withInput()->with(['error' => 'Data Not Found']);
    if ($order->isCanceled()) return redirect()->back()->withInput()->with(['error' => 'Order has Expired']);
    if ($order->status) return redirect()->back()->withInput()->with(['error' => 'Order Already Paid']);
    $faker = Factory::create();
    if ($order->type == 1) {
      $nowTime = Carbon::now()->format("H");
      $chance = ((9 <= $nowTime) && ($nowTime <= 17))? 90 : 40;
      $chanceSuccess = $faker->boolean($chance);
      $dataOrder['status'] = $chanceSuccess? 1 : 2;
    }else{
      $dataOrder['status'] = 1;
      $dataProduct['shipment_code'] = $faker->numerify('########');
      $productRepo->update($order->Product->id, $dataProduct);
    }
    $orderRepo->update($order->id, $dataOrder);
    return redirect()->route('orderHistory');
  }
}
