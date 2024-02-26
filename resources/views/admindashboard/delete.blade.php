<!-- resources/views/admindashboard/delete.blade.php -->
@extends('layouts.app') {{-- Adjust the layout based on your application structure --}}

@section('content')
    <h1>Delete Product</h1>

    <p>Are you sure you want to delete this product?</p>

    <form action="{{ route('admin.products.destroy', $product->id) }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit" class="bg-red-500 text-white rounded py-2 px-4 hover:bg-red-700">Delete Product</button>
        <a href="{{ route('admin.dashboard') }}" class="text-black ml-4">Cancel</a>
    </form>
@endsection
