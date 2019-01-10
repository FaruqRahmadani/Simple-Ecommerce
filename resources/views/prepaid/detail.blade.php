@extends('layouts.app')
@section('header', "Detail Order #{$order->number}")
@section('content')
  <div class="card-body text-center">
    <h4>Your Order Number</h4>
    <p class="card-text"> {{$order->number}} </p>

    <h4>Total</h4>
    <p class="card-text"> {{number_format($order->price)}} </p>

    <h5>Your Mobile Phone Number {{$order->Prepaid->phone_number}} will be topped up for {{number_format($order->Prepaid->value)}} after you pay</h5>
    <a href="#" class="btn btn-primary mt-4">Pay Here</a>
  </div>
@endsection
