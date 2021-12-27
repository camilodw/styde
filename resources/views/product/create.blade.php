@extends('layouts.app')
@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-lg-4">
                <form action="{{ route('products.store') }}" method="post">
                    @csrf
                    <div class="form-group">
                         <label for="name" class="form-label">Name:</label>
                         <input type="text" class="form-control" name="name" id="name" placeholder="input name">
                     </div>
                          <div class="form-group">
                              <label for="description" class="form-label">Description:</label>
                              <input type="text" class="form-control" name="description" id="description" placeholder="input description">
                          </div>
                          <div class="form-group">
                              <label for="price" class="form-label">Price:</label>
                              <input type="number" class="form-control" name="price" id="price" placeholder="input price">
                          </div>

                     <button type="submit" class="btn btn-primary">Save changes</button>
                 </form>
            </div>
        </div>
    </div>
@endsection
