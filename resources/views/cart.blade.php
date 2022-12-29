@extends('layouts.main2')

<!-- {{-- Navbar --}}
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
  {{-- Akhir Navbar --}} -->

@section('container')

<h1 class="text-center">My cart</h1>
<h3 class="text-end">Total Price: Rp 259.000 <button class="btn btn-primary" type="button">Check out</button> </h3>

<div class="container">
    <div class="row mt-5">
        @foreach ($carts as $cart)
        <div class="col-3 mb-3 order-1">
            <div class="card shadow bg-body rounded">
                <img src="{{ asset($cart->image) }}" class="card-img-top" alt="clothes">
              <div class="card-body">
                <h5 class="card-title"><strong>{{ $cart->name }}</strong></h5>
                <p class="card-text w-full">{{ $cart->price  }}</p>
                <p class="card-text">Qty: 1</p>
                  <a href="{{ url('detail_cart', $cart->id) }}" class="btn btn-primary" data-toogle="collapse"> Edit Cart</a>
                <a href="#" class="btn btn-danger" data-toggle="collapse">Remove from Cart</a>
                
              </div>
            </div>
          </div>
        @endforeach
    </div>
</div>
@endsection
