@extends('admindashboard.layout')
@section('title', 'Products')

@section('content')
<div class="content">
<div id="products">
            <h1>Products</h1>
            <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary float-left">Product Lists</h6>
</div>
<div class="card-body">
    <div class="table-responsive">
        <table class="table table-bordered" id="product-dataTable" width="100%" cellspacing="0">
            <thead>
                <tr>
                    <th>S.N.</th>
                    <th>Title</th>
                    <th>Category</th>
                    <th>Is Featured</th>
                    <th>Price</th>
                    <th>Discount</th>
                    <th>Size</th>
                    <th>Condition</th>
                    <th>Brand</th>
                    <th>Stock</th>
                    <th>Photo</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tfoot>
                <tr>
                    <th>S.N.</th>
                    <th>Title</th>
                    <th>Category</th>
                    <th>Is Featured</th>
                    <th>Price</th>
                    <th>Discount</th>
                    <th>Size</th>
                    <th>Condition</th>
                    <th>Brand</th>
                    <th>Stock</th>
                    <th>Photo</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </tfoot>
            <tbody>
                <tr>
                    <td>Product id</td>
                    <td>Product Title</td>
                    <td> 
                        <sub>
                           Sub category
                        </sub>
                    </td>
                    <td>is Featured</td>
                    <td> Price</td>
                    <td>Discount </td>
                    <td>Size</td>
                    <td>Condition</td>
                    <td>Branr Tittle</td>
                    <td>
                      <!-- good stock -->
                        <span class="badge badge-primary"> Stock</span>
                <!-- bad stock -->
                        <span class="badge badge-danger">Stock</span>
                    
                    </td>
                    <td>
                      
                        <!-- image -->
                    </td>
                
                    <td>
                        <!-- delete and edit buttons here  -->
                    </td>
                </tr>
               
            </tbody>
        </table>
        <span style="float:right">Pagination</span>
    
        <h6 class="text-center">No Products found!!! Please create Product</h6>
    
    </div>
</div>
@endsection