@extends('layouts.app')
@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-6">
                <div class="card">
                    <div class="card-body text-center">
                      <h5 class="card-title">Name:{{ $product->name }}</h5>
                      <p class="card-text">Price:{{ $product->price }}</p>
                      <p class="card-text">Description:{{ $product->description }}</p>
                    </div>
                  </div>
            </div>
        </div>
    </div>
@endsection