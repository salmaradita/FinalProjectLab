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
    <h1 class="text-center mt-3 mb-3">Check What You've Bought!</h1>

    <div class="card mb-3" style="background-color:rgb(239, 241, 243)">
        <div class="card-body">
          <p><strong>22-05-31</strong></p>
            <li>1 pc(s) Black T-Shirt Rp 60.000 </li>
            <li>1 pc(s) Brown Hoodie Rp 200.000 </li>
            <br>
          <h4>Total Price Rp 260.000</h4>
        </div>
    </div>

    <div class="card" style="background-color:rgb(239, 241, 243)">
        <div class="card-body">
          <p><strong>22-05-31</strong></p>
            <li>1 pc(s) Black T-Shirt Rp 60.000 </li>
            <li>1 pc(s) Brown Hoodie Rp 200.000 </li>
            <br>
          <h4>Total Price Rp 260.000</h4>
        </div>
    </div>

@endsection
