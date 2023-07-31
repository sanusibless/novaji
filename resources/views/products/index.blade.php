@extends('products.layout')

@section('content')
<section class="bg-white">
    <div class="pt-4 px-5 d-flex justify-content-between">
        <h3>Product</h3>
        <div>
            <a href="{{ route('products.create') }}" class="btn btn-sm btn-dark">+ Add New Product</a>
        </div>
    </div>

    <div>
        @if (count($products) !== 0)
        <table class="table mt-5">
            <thead>
                <th>S/N</th>
                <th>Image</th>
                <th>Name</th>
                <th>Action</th>
            </thead>
            <tbody>

                @foreach ($products as $product)
                <tr>
                    <td>{{ ++$loop->index }}</td>
                    <td><img height="50px" width="50px" src="{{ url('storage/'. $product->image ) }}" alt="{{ $product->name }}"></td>
                    <td>{{ $product->name }}</td>
                    <td>
                        <a href="{{ route('products.show',['product' => $product->id ]) }}" class="btn btn-sm btn-outline-info">view</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <div>

        </div>
        @else
        <p class="text-center mt-5">No Records </p>
        @endif

    </div>

</section>
@endsection