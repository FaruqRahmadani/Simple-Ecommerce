@extends('layouts.app')
@section('header', 'Prepaid Order')
@section('content')
  <div class="card-body">
    <form action="{!! route('prepaidSubmit') !!}" method="post">
      @csrf
      <div class="form-group row">
        <label class="col-md-2 col-form-label">Mobile Phone Number</label>
        <div class="col-md-10">
          <input type="text" class="form-control" name="phone_number" placeholder="Mobile Phone Number" value="{{old('phone_number')}}" required>
          @if ($errors->has('phone_number'))
            @foreach ($errors->get('phone_number') as $error)
              <p class="text-danger">{{$error}}</p>
            @endforeach
          @endif
        </div>
      </div>
      <div class="form-group row">
        <label class="col-md-2 col-form-label">Value</label>
        <div class="col-md-10">
          <select class="form-control" name="value" required>
            <option value="">Select Value</option>
            <option value="10000" @if(old('value') == 10000) selected @endif>10.000</option>
            <option value="50000" @if(old('value') == 50000) selected @endif>50.000</option>
            <option value="100000" @if(old('value') == 100000) selected @endif>100.000</option>
          </select>
          @if ($errors->has('value'))
            @foreach ($errors->get('value') as $error)
              <p class="text-danger">{{$error}}</p>
            @endforeach
          @endif
        </div>
      </div>
      <div class="form-group row justify-content-end">
        <div class="col-md-3">
          <button class="btn btn-block btn-success mt-3" type="submit">Submit</button>
        </div>
      </div>
    </form>
  </div>
@endsection
