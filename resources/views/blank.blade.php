<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>Simple E-Commerce</title>
  <link rel="stylesheet" href="{!! asset('css/app.css') !!}">
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-info">
    <div class="container">
      <a class="navbar-brand d-none d-md-block" href="#">Simple E-Commerce</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="pull-right">
        <div class="collapse navbar-collapse pull-left" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="#">Prepaid Store</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Product Store</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Login</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </nav>
  <div class="content container mt-5">
    <div class="card">
      <div class="card-header">
        Featured
      </div>
      <div class="card-body">
        <h5 class="card-title">Special title treatment</h5>
        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
        <a href="#" class="btn btn-primary">Go somewhere</a>
      </div>
    </div>
  </div>
</body>
<script src="{{ asset('js/app.js') }}"></script>
</html>
