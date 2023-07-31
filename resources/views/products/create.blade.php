@extends('products.layout')

@section('content')
<section class="w-75 mx-auto bg-white py-5">
    <div class="text-center mt-4">
        <h3>Create new product</h3>
    </div>
    <div class="w-50 mx-auto mx-5">
        <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group mb-3">
                <label class="mb-2" for="name">Name</label>
                <input type="text" id="name" class="form-control" value="{{ old('name') }}" name="name" />
                @error('name')
                <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>
            <div class="form-group mb-3">
                <label class="mb-2" for="description"> description</label>
                <input type="text" id="description" class="form-control" value="{{ old('description') }}" name="description" />
                @error('description')
                <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>
            <div class="form-group mb-3">
                <label class="mb-2" for="price">price </label>
                <input type="number" step="any" id="price" class=" form-control" value="{{ old('price') }}" name="price" />
                @error('price')
                <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>
            <div class="form-group mb-3">
                <label class="mb-2" for="image"></label>
                <input type="file" id="image" class="form-control" name="image" />
                @error('image')
                <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>
            <div class="form-group mb-3 text-center">
                <button type="submit" class="btn btn-sm btn-primary">
                    Create Product
                </button>
            </div>
        </form>
    </div>
</section>
@endsection