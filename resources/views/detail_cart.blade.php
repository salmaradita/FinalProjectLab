@extends('layouts.main2')

{{-- Navbar --}}
<nav class="navbar navbar-expand-lg bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Mai Boutique</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Search</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Cart</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">History</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Profile</a>
          </li>
        </ul>
      </div>
    </div>
</nav>
  {{-- Akhir Navbar --}}

@section('container')

<div class="container">
    <div class="card justify-content-center" style="max-width: 800px; margin: 75px">
        <div class="row g-0">
          <div class="col-md-4">
            <img src="{{ asset($cart->image) }}" class="img-fluid rounded-start" alt="clothes">
          </div>
          <div class="col-md-8">
            <div class="card-body">
                <h5 class="card-title"><strong>{{ $cart->name }}</strong></h5>
                <p class="card-text w-full">{{ $cart->price  }}</p>
              <hr>
              <h5 class="card-title">Product Detail</h5>
              <p class="card-text">Unisex</p>
              <hr style="border-width:10px">
              <div class="d-grid gap-2 d-md-block">
                <p class="card-text">Qty: 1</p>
                <div class="d-grid gap-2 d-md-block">
                    <button class="btn btn-white" type="button">1</button>
                    <button class="btn btn-success mb-2" type="button">Update Cart</button>
                </div>
                    <a href="{{ url('cart', $cart->id) }}" class="btn btn-primary"> Back</a>
                {{-- <a href="#" class="btn btn-danger">Remove from Cart</a> --}}
                {{-- <button class="btn btn-danger" type="button">Delete Item</button> --}}
              </div>
            </div>
          </div>
        </div>
    </div>
</div>
@endsection
