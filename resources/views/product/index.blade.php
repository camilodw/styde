@extends('layouts.app')
@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12 text-center">
<a href="{{ route('products.create') }}" class="btn btn-success">➕</a>
            </div>
            @forelse ($products as $p)
            <div class="card" style="width: 18rem;">

                <div class="card-body">
                  <h5 class="card-title">{{$p->name}}</h5>
                  <p class="card-text">Price:{{$p->price}}</p>
                  <p class="card-text">{{$p->description}}</p>
                  <a href="#" class="btn btn-primary">Go</a>
                </div>
              </div>
            @empty

            @endforelse
        </div>
    </div>
@endsection
