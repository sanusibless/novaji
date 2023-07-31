@extends('products.layout')

@section('content')
<section class="bg-white">
    <div>
        <h2 class="py-3 text-center">
            {{ $product->name }}
        </h2>
        <div class="row d-flex justify-content-between">
            <div class="col-6 col-sm-12">
                <img width="30%" src="{{ url('storage/'.$product->image) }}" class="img-fluid">
            </div>
            <div class="col-6 col-sm-12">
                <div>
                    <p>
                        {{ $product->description }}
                    </p>
                </div>
                <div class="d-flex justify-contents-center">
                    <div>
                        <a href="{{ route('products.edit', [ 'product' => $product->id ] )}}" class="btn btn-sm btn-outline-secondary">Edit</a>
                    </div>
                    <div>
                        <form action="{{ route('products.destroy', [ 'product' => $product->id ] )}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button onclick="confirm('Are You sure you want to delete?')" class="btn btn-sm btn-outline-danger">
                                Delete</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>
@endsection