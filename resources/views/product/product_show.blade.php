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



        <h2>Product List</h2>
        <table class="table">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Price</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($products as $product)
                <tr>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->description }}</td>
                    <td>{{ $product->price }}</td>
                    <td>

                        <a href="{{ url('products.edit', $product->id) }}" class="btn btn-primary">Edit</a>
                        <form action="{{ url('products.destroy', $product->id) }}" method="POST" style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger bg-danger">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
</div>
@endsection
