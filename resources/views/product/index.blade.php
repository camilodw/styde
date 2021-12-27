@extends('layouts.app')
@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12 text-center m-3">
<a href="{{ route('products.create') }}" class="btn btn-success rounded-circle"><i class="fas fa-plus"></i></a>
            </div>
            @forelse ($products as $products)
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                  <h5 class="card-title">Name: {{$products->name}}</h5>
                  <p class="card-text">Price: {{$products->price}}</p>
                  <p class="card-text">Description: {{$products->description}}</p>
                  <a href="{{route('products.show',$products->id)}}" class="btn btn-primary form-control">View</a>
                  <div class="d-flex justify-content-center">
                        <a href="{{route('products.edit',$products->id)}}" class="btn btn-secondary"><i class="fas fa-edit"></i></a>

                        <form action="{{ route('products.destroy', $products->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                                <button type="submit" class=" btn btn-danger"><i
                                    class="fas fa-trash"></i></button>
                         </form>

                    </div>
                </div>
              </div>
            @empty
                <p class="text text-danger">Data not found</p>
            @endforelse
        </div>
    </div>
@endsection
