@extends('layouts.app')

@section('title', 'sewa')

@section('content')
    <div class="container">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="nav-item nav-link" href="/">Home</a>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                <a class="nav-item nav-link" href="/mobil">Mobil</a>
                <a class="nav-item nav-link" href="/sewa">Sewa Mobil</a>
                <a class="nav-item nav-link" href="/about">About Me</a>
                </div>
            </div>
        </div>
    </nav>
    </div>
    <div class="container">
        <div class="card-body">
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                          <label>Nama Penyewa</label>
                          <input type="text" name="name" id="" class="form-control border-dark-50" required="">
                        </div>
                    </div>
                    <div class="row">
                    <div class="col">
                        <div class="form-group">
                          <label>No Hp</label>
                          <input type="text" name="name" id="" class="form-control border-dark-50" required="">
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                          <label>Alamat</label>
                          <input type="text" name="name" id="" class="form-control border-dark-50" required="">
                        </div>
                    </div>
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                          <label>Merk Mobil</label>
                          <input type="text" name="color" id="" class="form-control border-dark-50" required="">
                        </div>
                    </div>
                </div>    
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                          <label>Nomer Polisi</label>
                          <input type="text" name="license_number" id="" class="form-control border-dark-50" required="">
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                          <label>Tahun</label>
                          <input type="text" name="year" id="" class="form-control border-dark-50" required="">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                          <label>Tanggal Sewa</label>
                          <input type="text" name="price" id="" class="form-control border-dark-50" required="">
                        </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                          <label>Tanggal Kembali</label>
                          <input type="text" name="price" id="" class="form-control border-dark-50" required="">
                        </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="form-gorup">
                            <button type="submit" class="btn btn-primary  shadow-sm">Simpan</button>
                        </div>
                    </div>
                </div>
@endsection
