@extends('layouts.app')

@section('content')

<section class="content">
    <div class="card card-secondary card-outline">
        <div class="card-header">
            <h3 class="card-title"><a href="{{ route('car.create') }}" class="btn btn-primary">Add New </a> </h3>
        </div>
        <div class="card-body">
            <table class="table table-sm" id="myTable">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Car Name</th>
                        <th>Year</th>
                        <th>License</th>
                        <th>Price</th>
                        <th>Type</th>
                        <th>Brand</th>
                        <th>Action</th>
                    </tr>
                </thead>

                 
@endpush