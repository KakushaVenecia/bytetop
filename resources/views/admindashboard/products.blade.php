@extends('admindashboard.layout')
@section('title', 'Products')

@section('content')
<div class="content">
<div id="products">
            <h1>Products</h1>
             <button class="navbutton"><a href="{{ route('admin.products.create') }}">Create Product</a></button> 
            {{-- <div class="flex-table">
        @foreach ($uniqueProducts as $product)
    <div>
        <p style="font-weight:bold">{{ $product['name'] }}</p>
        <p>Description: {{ $product['description'] }}</p>
        <p>Price: {{ $product['price'] }}</p>
        <p>Tags: {{ $product['tags'] }}</p>
        <p>Category: {{ $product['category'] }}</p>
    </div>
 
@endforeach
<p> {{ $uniqueProducts->links() }}</p> --}} 
               
</div>
@endsection