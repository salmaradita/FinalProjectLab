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

    <div class="card mt-5 text-center">
        <div class="card-body">
            <h1>My Profile</h1>
            <a href="#" class="btn btn-secondary">Member</a>
            <p class="card-text"><strong>username: kenziestar</strong></p>
            <p class="card-text">kenziestarlet@gmail.com</p>
            <p class="card-text">Address: Jl. Gn Agung</p>
            <p class="card-text">Phone : 628167829028</p>
            <div class="d-grid gap-2 d-md-block">
                <button class="btn btn-primary" type="button">Edit Profile</button>
                <button class="btn btn-outline-primary" type="button">Edit Password</button>
            </div>
        </div>
    </div>

@endsection
