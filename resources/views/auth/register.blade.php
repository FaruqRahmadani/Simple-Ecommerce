@extends('layouts.app')
@section('header', 'Register')
@section('content')
  <form route="{!! route('registerSubmit') !!}" method="post">
    @csrf
    <div class="form-group">
      <div class="input-group with-focus">
        <input class="form-control border-right-0" type="email" name="email" placeholder="Email"
        autocomplete="off" required>
        <div class="input-group-append">
          <span class="input-group-text text-muted bg-transparent border-left-0">
            <em class="fa fa-envelope"></em>
          </span>
        </div>
      </div>
      @if ($errors->has('email'))
        <p class="text-danger">{{$errors->first('email')}}</p>
      @endif
    </div>
    <div class="form-group">
      <div class="input-group with-focus">
        <input class="form-control border-right-0" type="text" name="name" placeholder="Name" required>
        <div class="input-group-append">
          <span class="input-group-text text-muted bg-transparent border-left-0">
            <em class="fa fa-user"></em>
          </span>
        </div>
      </div>
      @if ($errors->has('name'))
        <p class="text-danger">{{$errors->first('name')}}</p>
      @endif
    </div>
    <div class="form-group">
      <div class="input-group with-focus">
        <input class="form-control border-right-0" type="password" name="password" placeholder="Password" required>
        <div class="input-group-append">
          <span class="input-group-text text-muted bg-transparent border-left-0">
            <em class="fa fa-lock"></em>
          </span>
        </div>
      </div>
      @if ($errors->has('password'))
        <p class="text-danger">{{$errors->first('password')}}</p>
      @endif
    </div>
    <div class="row text-center">
      <div class="col-lg-4 offset-lg-4">
        <span>
          <button class="btn btn-block btn-info mt-3" type="submit">Register</button>
        </span>
        <p class="mt-3">or</p>
        <span>
          <a href="{!! route('loginForm') !!}" class="btn btn-block btn-success mt-3 text-light">Login</a>
        </span>
      </div>
    </div>
  </form>
@endsection
