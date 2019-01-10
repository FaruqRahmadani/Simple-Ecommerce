@extends('layouts.app')
@section('header', 'Product Order')
@section('content')
  <div class="card-body">
    <form action="{!! route('productSubmit') !!}" method="post">
      @csrf
      <div class="form-group row">
        <label class="col-md-2 col-form-label">Product</label>
        <div class="col-md-10">
          <textarea name="product" rows="4" class="form-control" required>{{old('product')}}</textarea>
          @if ($errors->has('product'))
            @foreach ($errors->get('product') as $error)
              <p class="text-danger">{{$error}}</p>
            @endforeach
          @endif
        </div>
      </div>
      <div class="form-group row">
        <label class="col-md-2 col-form-label">Shipping Address</label>
        <div class="col-md-10">
          <textarea name="address" rows="4" class="form-control" required>{{old('address')}}</textarea>
          @if ($errors->has('address'))
            @foreach ($errors->get('address') as $error)
              <p class="text-danger">{{$error}}</p>
            @endforeach
          @endif
        </div>
      </div>
      <div class="form-group row">
        <label class="col-md-2 col-form-label">Price</label>
        <div class="col-md-10">
          <input type="text" name="price" value="{{old('price')}}" class="form-control">
          @if ($errors->has('price'))
            @foreach ($errors->get('price') as $error)
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
