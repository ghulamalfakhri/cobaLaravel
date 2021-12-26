@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <div class="container">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="nav-item nav-link" href="/">Home</a>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                <a class="nav-item nav-link" href="/mobil">Mobil</a>
                <a class="nav-item nav-link" href="sewa">Sewa Mobil</a>
                <a class="nav-item nav-link" href="/about">About Me</a>
                </div>
            </div>
        </div>
    </nav>
    </div>
    <div class="container mt-4">
        <h1 class="text-muted">Rental Mobil GF</h1>
        <p class="lead text-success">Rental Mobil GF, Nyaman dan Memuaskan</p>
        <img data-lazyloaded="1" src="https://www.rentalkaltim.com/wp-content/uploads/2018/10/k5rfc83epzcjglnn6lr0.png" data-src="https://www.rentalkaltim.com/wp-content/uploads/2018/10/k5rfc83epzcjglnn6lr0.png" alt="" class="litespeed-loaded" data-was-processed="true">
    </div>
@endsection
