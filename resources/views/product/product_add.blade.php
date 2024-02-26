
@extends('adminLTE.app')
@section('content')
<div class="container">
    <div class="row mt-2">
        <div class="col-md-3">

        </div>
        <div class="col-md-9">
        @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif
        <b>Add Product</b>
<form method="POST" action="{{ url('products.store') }}"  enctype="multipart-data">
    @csrf
    <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}" required>
            </div>
            <div class="form-group">
                <label for="description">Description:</label>
                <textarea class="form-control" id="description" name="description" rows="3">{{ old('description') }}</textarea>
            </div>
            <div class="form-group">
                <label for="price">Price:</label>
                <input type="number" class="form-control" id="price" name="price" step="0.01" value="{{ old('price') }}" required>
            </div>
            <button type="submit" class="btn btn-primary text-dark mb-2">Add Product</button>
</form>
        </div>
    </div>
</div>

@endsection



