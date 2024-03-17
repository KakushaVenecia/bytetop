@extends('admindashboard.layout')
@section('title', 'Dashboard')
@section('content')
    <div class="content">
        <div id="dashboard">
            <div class="user-bar" style="float: right">
                @if(auth()->check())
                    <p>Hello, {{ auth()->user()->name }}</p>
                @endif
            </div>
            <h3>Super Admin Dashboard</h3>
            <div>
            <div class="card-container">
        <div class="card">
            <div class="card-icon"><i class="fas fa-chart-line"></i></div>
            <div class="card-title">Total Sales</div>
            <div class="card-value">$5000</div>
        </div>
        <div class="card">
            <div class="card-icon"><i class="fas fa-box"></i></div>
            <div class="card-title">Total Products</div>
            {{-- <div class="card-value">{{$productCount}}</div> --}}
        </div>
        <div class="card">
            <div class="card-icon"><i class="fas fa-users"></i></div>
            <div class="card-title">Users</div>
            <div class="card-value">500</div>
        </div>
        <div class="card">
            <div class="card-icon"><i class="fas fa-chart-line"></i></div>
            <div class="card-title">Total Sales</div>
            <div class="card-value">$5000</div>
        </div>
        </div>
        <div class="flex-container">
                <div class="table-container">
                    <table class="table" >
                        <thead>
                            <tr>
                                <th>Product Name</th>
                                <th>Price</th>
                                <th>Category</th>
                                <th>Stock</th>
                            </tr>
                        </thead>
                        <!-- Table body -->
                        <tbody>
                            <!-- Replace the sample data with your actual product data -->
                            {{-- <!-- @foreach($products as $product) -->
                            <tr>
                                <td>{{ $product->name }}</td> 
                                <td>{{ $product->price }}</td> 
                                <td>{{ $product->category }}</td> 
                                {{-- <td>{{ $product->stock }}</td> --}}
                                {{-- <td>Product stock </td> --}}
                            </tr>
                            {{-- <!-- @endforeach --> --}} --}}
                        </tbody>
                    </table>
                </div>
                <div class="order-card">
                    <div class="card-icon"><i class="fas fa-shopping-cart"></i></div>
                    <div class="card-title">Orders</div>
                    <div class="card-value">
                        <!-- Replace the sample data with your actual order counts -->
                        <p>Pending Orders: 22</p>
                        <p>Sold Goods: 2003</p>
                        <p>Returned Goods: 1</p>
                    </div>
                </div>
            </div>
        </div>
    </div>          
</div>
@endsection
