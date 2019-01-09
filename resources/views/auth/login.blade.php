@extends('layouts.app')
@section('header', 'Login')
@section('content')
  <form route="{!! route('loginSubmit') !!}" method="post">
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
    </div>
    <div class="row">
      <div class="col-lg-6">
        <button class="btn btn-block btn-success mt-3" type="submit">Login</button>
      </div>
      <div class="col-lg-6">
        <a href="{!! route('registerForm') !!}" class="btn btn-block btn-info mt-3 text-light">Register</a>
      </div>
    </div>
  </form>
@endsection
