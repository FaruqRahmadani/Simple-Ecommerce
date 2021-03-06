@extends('layouts.app')
@section('header', "Detail Order #{$order->number}")
@section('content')
  <div class="card-body text-center">
    <h4>Your Order Number</h4>
    <p class="card-text"> {{$order->number}} </p>

    <h4>Total</h4>
    <p class="card-text"> {{number_format($order->price)}} </p>

    <h5>{{$order->Product->product}} that cost {{number_format($order->price)}} will be shipped to {{$order->Product->address}} after you pay</h5>
    <a href="{!! route('paymentForm', ['id' => $order->number]) !!}" class="btn btn-primary mt-4">Pay Here</a>
  </div>
@endsection
