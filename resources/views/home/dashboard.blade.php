@extends('layouts.app')
@section('header', 'Dashboard')
@section('content')
  <div class="card-body">
    <h5 class="card-title">Hi, {{Auth::User()->name}}</h5>
    <a href="{!! route('prepaidOrder') !!}" class="btn btn-primary">Need a prepaid balance?</a>
    <a href="#" class="btn btn-success">Want to buy something?</a>
  </div>
@endsection
