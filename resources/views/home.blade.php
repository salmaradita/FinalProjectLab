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
  <h1 class="text-center">Find Your Best Clothes Here!</h1>

  {{-- Clothes --}}
  <div class="row">
    @foreach ($homes as $home)
    <div class="col-3 mb-3 order-1">
      <div class="card">
      <img src="{{ asset($home->image) }}" class="card-img-top" alt="clothes">
          <div class="card-body">
              <h5 class="card-title"><strong>{{ $home->name }}</strong></h5>
              <p class="card-text w-full">{{ $home->price  }}</p>
              <a href="{{ url('detail_product', $home->id) }}" class="btn btn-primary"> More Detail</a>
          </div>
      </div>
    </div>
    @endforeach
  </div>


  {{-- <div class="row">
    <div class="col-md-3 mb-3">
      <div class="card shadow bg-body rounded">
        <img src="img/kaos1.jpg" class="card-img-top" alt="kaos 1" />
        <div class="card-body">
          <h5 class="card-title">Black T-Shirt</h5>
          <p class="card-text">Rp 60.000</p>
          <a href="#" class="btn btn-primary">More Detail</a>
        </div>
      </div>
    </div>

    <div class="col-md-3 mb-3">
      <div class="card shadow bg-body rounded">
        <img src="img/hoodie1.jpg" class="card-img-top" alt="hoodie 1" />
        <div class="card-body">
          <h5 class="card-title">Brown Hoodie</h5>
          <p class="card-text">Rp 199.000</p>
          <a href="#" class="btn btn-primary">More Detail</a>
        </div>
      </div>
    </div>

    <div class="col-md-3 mb-3">
        <div class="card shadow bg-body rounded">
          <img src="img/sweater1.jpg" class="card-img-top" alt="sweater 1" />
          <div class="card-body">
            <h5 class="card-title">Black Sweater</h5>
            <p class="card-text">Rp 150.000</p>
            <a href="#" class="btn btn-primary">More Detail</a>
          </div>
        </div>
    </div>

    <div class="col-md-3 mb-3">
        <div class="card shadow bg-body rounded">
          <img src="img/celana1.jpg" class="card-img-top" alt="project 3" />
          <div class="card-body">
            <h5 class="card-title">Beige Short</h5>
            <p class="card-text">Rp 135.000</p>
            <a href="#" class="btn btn-primary">More Detail</a>
          </div>
        </div>
    </div>
  </div>

  <div class="row">
    <div class="col-md-3 mb-3">
      <div class="card shadow bg-body rounded">
        <img src="img/kaos1.jpg" class="card-img-top" alt="kaos 1" />
        <div class="card-body">
          <h5 class="card-title">Black T-Shirt</h5>
          <p class="card-text">Rp 60.000</p>
          <a href="#" class="btn btn-primary">More Detail</a>
        </div>
      </div>
    </div>

    <div class="col-md-3 mb-3">
      <div class="card shadow bg-body rounded">
        <img src="img/hoodie1.jpg" class="card-img-top" alt="hoodie 1" />
        <div class="card-body">
          <h5 class="card-title">Brown Hoodie</h5>
          <p class="card-text">Rp 199.000</p>
          <a href="#" class="btn btn-primary">More Detail</a>
        </div>
      </div>
    </div>

    <div class="col-md-3 mb-3">
        <div class="card shadow bg-body rounded">
          <img src="img/sweater1.jpg" class="card-img-top" alt="sweater 1" />
          <div class="card-body">
            <h5 class="card-title">Black Sweater</h5>
            <p class="card-text">Rp 150.000</p>
            <a href="#" class="btn btn-primary">More Detail</a>
          </div>
        </div>
    </div>

    <div class="col-md-3 mb-3">
        <div class="card shadow bg-body rounded">
          <img src="img/celana1.jpg" class="card-img-top" alt="project 3" />
          <div class="card-body">
            <h5 class="card-title">Beige Short</h5>
            <p class="card-text">Rp 135.000</p>
            <a href="#" class="btn btn-primary">More Detail</a>
          </div>
        </div>
    </div>
  </div> --}}

  {{-- Akhir Clothes --}}

  <nav aria-label="Page navigation">
    <ul class="pagination justify-content-center">
      <li class="page-item active" aria-current="page">
        <span class="page-link">1</span>
      </li>
      <li class="page-item"><a class="page-link" href="#">2</a></li>
      <li class="page-item"><a class="page-link" href="#">3</a></li>
    </ul>
  </nav>

  @endsection


