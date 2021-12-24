@extends('layouts.app')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 text-center">
<a href="{{ route('products.create') }}" class="btn btn-success">➕</a>
            </div>
            @forelse ($products as $p)
                
            @empty
                
            @endforelse
        </div>
    </div>
@endsection