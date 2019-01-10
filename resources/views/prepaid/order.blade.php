@extends('layouts.app')
@section('header', 'Prepaid Order')
@section('content')
  <div class="card-body">
    <form action="" method="post">
      <div class="form-group row">
        <label class="col-md-2 col-form-label">Mobile Phone Number</label>
        <div class="col-md-10">
          <input type="text" class="form-control" placeholder="Mobile Phone Number">
        </div>
      </div>
      <div class="form-group row">
        <label class="col-md-2 col-form-label">Value</label>
        <div class="col-md-10">
          <select class="form-control" name="value">
            <option value="">Select Value</option>
            <option value="10000">10.000</option>
            <option value="50000">50.000</option>
            <option value="100000">100.000</option>
          </select>
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
