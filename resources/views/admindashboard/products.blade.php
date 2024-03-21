@extends('admindashboard.layout')
@section('title', 'Products')

@section('content')
{{-- <div class="content"> --}}

            <h1 style="text-align: center">Products</h1>
            <a href="{{ route('admin.products.create') }}"><button>Create Products</button></a>
    <div class="card-body">
        @if(count($products) > 0)
            <div class="table-responsive">
                <table class="table table-bordered" id="product-dataTable">
                    <thead>
                        <tr>
                            <th>Product Brand Name</th>
                            <th>Description</th>
                            <th>Category</th>
                            <th>Price</th>
                            <th>Stock</th>
                            <th>Photo</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($products as $product)
                        <tr>
                            <td>{{ $product->name }}</td>
                            <td>{{ $product->description }}</td> 
                            <td>{{ $product->category }}</td> 
                            <td>£{{ number_format($product->price, 2) }}</td>
                            <td>
                                @php
                                $productName = $product->name;
                                $productCount = $productQuantities[$productName] ?? 0;
                                @endphp
                                @if($productCount > 5)
                                    <span class="badge badge-success">Low Stock:  ({{ $productCount }})</span>
                                @else
                                    <span class="badge badge-danger">Insufficient Stock: ({{ $productCount }})</span>
                                @endif
                        
                            </td>
                            <td>
                                @if($product->image)
                                    <img src="{{ asset('storage/images/' . $product->image) }}" class="img-fluid zoom" style="max-width: 80px" alt="Product Image">
                                @else
                                    <img src="{{ asset('storage/images/default.jpg') }}" class="img-fluid" style="max-width: 80px" alt="Default Image">
                                @endif
                            </td>
                            <td>
                                <div class="tooltip">
                                    <a href="{{ route('admin.products.edit', $product->id) }}" class="btn btn-primary" data-toggle="tooltip" title="Edit">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    <span class="tooltiptext">Edit</span>
                                </div>
                                <div class="tooltip">
                                    <form action="{{ route('admin.products.destroy', $product->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this product?')">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="bg-red-500 text-white rounded py-2 px-4 hover:bg-red-700">Delete Product</button>
                                        <a href="{{ route('dashboard') }}" class="text-black ml-4">Cancel</a>
                                    </form>
                                    <span class="tooltiptext">Delete</span>
                                </div>
                            </td>                            
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
            <div class="d-flex justify-content-end">
                {{ $products->links() }}
            </div>
        @else
            <h6 class="text-center">No Products found! Please create a Product.</h6>
        @endif
    </div>
@endsection