@extends('admindashboard.layout')
@section('title', 'Products')

@section('content')
<div class="content">
<div id="products">
            <h1>Products</h1>
            <button class="navbutton"><a href="{{ route('admin.products.create') }}">Create Product</a></button>
            <div class="flex-table">
                @foreach($uniqueProductNames as $name)
                    @php
                        $product = $products->firstWhere('name', $name);
                        $totalStock = $products->where('name', $name)->sum('quantity');
                    @endphp
                    <div class="flex-row">
                        <div class="flex-cell">
                            <img width="100" src="{{ asset('storage/images/' . $product->image) }}" alt="Product Image">
                        </div>
                        <div class="flex-cell">
                            <strong>{{ $product->name }}</strong>
                        </div>
                        <div class="flex-cell">
                            Description: {{ $product->description }} <br>
                            Price: {{ $product->price }} <br>
                            Tags: {{ $product->tags }} <br>
                            Category: {{ $product->category }} <br>
                        </div>
                        <div class="flex-cell">
                            Stock: {{ $productCounts[$name] }}
                        </div>
                        <div class="flex-cell">
                            <form action="{{ route('admin.products.edit', $product->id) }}" method="GET">
                                @csrf
                                <button type="submit" class="navbutton edit-button">Edit Product</button>
                            </form>
                            <!-- Add delete form -->
                            <form action="{{ route('admin.products.destroy', $product->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="navbutton" onclick="return confirm('Are you sure you want to delete this product?')">Delete Product</button>
                            </form>
                        </div>
                    </div>
                @endforeach
            </div>
            {{ $products->links() }}
        </div>
</div>
@endsection