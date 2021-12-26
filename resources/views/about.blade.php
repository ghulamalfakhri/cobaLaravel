@extends('layouts.app')

@section('title', 'about')

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
    <section class="py-5 text-center container">
    <img src="https://www.rentalmobilagape.com/wp-content/uploads/2014/01/logo-rental-mobil-agape.jpg" style="width: 200px; height: 200px; margin: 0px;">
    <div class="row py-lg-5">
      <div class="col-lg-6 col-md-8 mx-auto">
        <h1 class="fw-light">Azki Trans</h1>
        <p class="lead text-muted">Kami  adalah perusahaan Jasa Rental Mobil dengan Driver service di 
            kota Malang yang selalu mengedepankan kenyamananan dan keselamatan customer kami selama dalam Perjalanan. 
            Tempat kami cukup strategis, hanya 5 menit dari Bandara Abd Saleh, 
            10 menit ke terminal arjosari dan 15 menit ke Stasiun Kota Baru Malang. 
            Sehingga kami akan memberikan fast response jika ada Customer yang membutuhkan pelayanan cepat untuk
            Antar atau Jemput dari tempat tempat tersebut.</p>
        <div class="tp-bgimg defaultimg " data-bgcolor="undefined" style="background-repeat: no-repeat; background-image: url(&quot;https://www.devatransmlg.com/wp-content/uploads/2018/11/Sewa-Mobil-Di-Pangandaran-640x320.jpg&quot;); background-size: cover; background-position: center center; width: 100%; height: 100%; opacity: 1; visibility: inherit; z-index: 20;" src="https://www.devatransmlg.com/wp-content/uploads/2018/11/Sewa-Mobil-Di-Pangandaran-640x320.jpg"></div>
      </div>
    </div>
    </section>
@endsection
