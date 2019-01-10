<?php

namespace App\Http\Controllers;

use App\Repositories\OrderRepository;
use Illuminate\Http\Request;
use Auth;

class OrderController extends Controller
{
  public function history(OrderRepository $order){
    $order = $order->where('user_id', Auth::User()->id)->orderBy('created_at', 'desc')->paginate(20);
    return view('order.history', compact('order'));
  }
}
