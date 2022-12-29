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
            <img src="{{ asset($home->image) }}" class="img-fluid rounded-start" alt="clothes">
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h4 class="card-title">{{ $home->name }}</h4>
              <p class="card-text">{{ $home->price }}</p>
              <hr>
              <h5 class="card-title">Product Detail</h5>
              <p class="card-text">Unisex</p>
              <hr style="border-width:10px">
              <p class="card-text"><strong>Quantity:</strong></p>
              <div class="d-grid gap-2 d-md-block">
                <button class="btn btn-white" type="button">1</button>
                <button class="btn btn-success" type="button">Add to Cart</button>
              </div>
              <button class="btn btn-danger mt-3" type="button">Back</button>
            </div>
          </div>
        </div>
      </div>
</div>
@endsection
