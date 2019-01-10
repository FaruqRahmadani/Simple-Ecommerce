@extends('layouts.app')
@section('header', 'Payment')
@section('content')
  <div class="card-body">
    <form action="{!! route('paymentSubmit') !!}" method="post">
      @csrf
      <div class="form-group row">
        <label class="col-md-2 col-form-label">Order Number</label>
        <div class="col-md-10">
          <input type="text" name="payment_id" class="form-control" placeholder="Order Number" value="{{old('payment_id')??$id}}">
          @if (session('error'))
            <p class="text-danger">{{session('error')}}</p>
          @endif
        </div>
      </div>
      <div class="text-center">
        <button type="submit" class="btn btn-primary">Pay Here</button>
      </div>
    </form>
  </div>
@endsection
