<style>
h1 {
    text-align: center;
    color: white;
}

.container {
    height: 70vh; /* 50% of viewport height */
    background-color: #001E2C; 
    padding: 5px 20px;
    border-radius: 10px;
    max-width: 600px;
    width: 100%;
    margin:auto;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    overflow-y: auto; /* Enable vertical scrolling */
}

.form-wrapper {
    text-align: left; 
}

label {
    display: block;
    margin-bottom: 5px;
    font-size: 14px;
    color: white;
}

input[type="text"],
input[type="number"],
select,
textarea,
button {
    width: 100%;
    padding: 8px;
    border-radius: 5px;
    border: 1px solid #ccc;
    margin-bottom: 8px;
    font-size: 14px;
}

button {
    background-color: #007BFF;
    color: white;
    border: none;
    cursor: pointer;
}

button:hover {
    background-color: #0056b3;
}

a {
    text-decoration: none;
    color: white;
    margin-top: 10px;
    display: block; 
    text-align: center;
    cursor: pointer;
}

a:hover {
    color: orange; 
}
</Style>

    <div class="container">
        <h1>Create Product</h1>
        <div class="form-wrapper">
                    @if(session('success'))
                        <div>{{ session('success') }}</div>
                    @endif
                    <form method="POST" id="productForm" action="{{ route('admin.products.store') }}" enctype="multipart/form-data">
                        @csrf
                        <label for="product-name" class="inline-block text-lg mb-2">Select Product</label>
                        <select name="product-name" id="product-name" class="border border-gray-200 rounded p-2 w-full">
                            <option value="">Select a product</option>
                            @foreach ($products as $product)
                                @if (!($product->name))
                                    <option value="{{ $product->name }}">{{ $product->name }}</option>
                                    @php
                                       $product->name;
                                    @endphp
                                @endif
                            @endforeach
                            <option value="__custom__">Enter Custom Product Name</option>
                        </select>
                        <div id="custom-product-name" style="display: none;">
                            <label for="custom-name" class="inline-block text-lg mb-2">Custom Product Name</label>
                            <input type="text" id="custom-name" name="custom_name" class="border border-gray-200 rounded p-2 w-full" placeholder="Enter custom product name">
                            @if (session()->has('custom_name'))
                            <div style="color: red;">{{ session('custom_name') }}</div>
                            @endif
                            @if ($errors->has('product_description'))
                            <span class="text-red-500">{{ $errors->first('product_description') }}</span>
                           @endif
                        </div>
                        <div id="default-product-description" style="display: block;">
                            <label for="product-description" class="inline-block text-lg mb-2">Product Description</label>
                            <textarea id="product-description" name="product_description" class="border border-gray-200 rounded p-2 w-full" rows="4" placeholder="Enter product description"></textarea>
                            @if (session()->has('error'))
                            <div style="color: red;">{{ session('error') }}</div>
                            @endif
                            @if ($errors->has('product_description'))
                            <span class="text-red-500">{{ $errors->first('product_description') }}</span>
                           @endif
                        </div>
                        <div id="custom-description-section" style="display: none;">
                            <label for="custom-description" class="inline-block text-lg mb-2">Custom Product Description</label>
                            <textarea id="custom-description" name="custom_description" class="border border-gray-200 rounded p-2 w-full" rows="4" placeholder="Enter custom product description"></textarea>
                            @if (session()->has('error'))
                            <div style="color: red;">{{ session('error') }}</div>
                            @endif
                            @if ($errors->has('custom_description'))
                            <span class="text-red-500">{{ $errors->first('custom_description') }}</span>
                           @endif
                        </div>
                    <div>
                    <label for="category" class="inline-block text-lg mb-2">Category</label>
                    <select name="category" class="border border-gray-200 rounded p-2 w-full">
                        <option value="">Select a Product Category</option>
                        <option value="Laptops" @if(old('category') == 'Laptops') selected @endif>Laptops</option>
                        <option value="Computers" @if(old('category') == 'Computers') selected @endif>Computers</option>
                        <option value="Accessories" @if(old('category') == 'Accessories') selected @endif>Accessories</option>
                        <option value="Monitors" @if(old('category') == 'Computer Monitors') selected @endif>Monitors</option>
                        <option value="All in One Desktops" @if(old('category') == 'All in One Desktops') selected @endif>All in One Desktops</option>
                    </select>
                    @if (session()->has('error'))
                            <div style="color: red;">{{ session('error') }}</div>
                     @endif
                     @if ($errors->has('category'))
                            <span class="text-red-500">{{ $errors->first('category') }}</span>
                           @endif
                </div>
                <div >
                    <label for="price" class="inline-block text-lg mb-2">Price</label>
                    <input type="text" class="border border-gray-200 rounded p-2 w-full" name="price" placeholder="Enter product Price" value="{{ old('price') }}">
                    @if (session()->has('error'))
                            <div style="color: red;">{{ session('error') }}</div>
                            @endif
                            @if ($errors->has('price'))
                            <span class="text-red-500">{{ $errors->first('price') }}</span>
                           @endif
                </div>
                <div>
                    <label for="brand" class="inline-block text-lg mb-2">Brand</label>
                    <input type="text" class="border border-gray-200 rounded p-2 w-full" name="brand" value="{{ old('brands') }}" placeholder="Enter Brand Name">
                    @if (session()->has('error'))
                            <div style="color: red;">{{ session('error') }}</div>
                            @endif
                            @if ($errors->has('brand'))
                             <span class="text-red-500">{{ $errors->first('brand') }}</span>
                            @endif
                </div>
                <div>
                    <label for="tags" class="inline-block text-lg mb-2">Tags (Comma Separated)</label>
                    <input type="text" class="border border-gray-200 rounded p-2 w-full" name="tags" value="{{ old('tags') }}" placeholder="Enter tags">
                    @if (session()->has('error'))
                            <div style="color: red;">{{ session('error') }}</div>
                            @endif
                            @if ($errors->has('tags'))
                             <span class="text-red-500">{{ $errors->first('tags') }}</span>
                            @endif
                </div>
                <div>
                    <label for="image" class="inline-block text-lg mb-2">Product Image</label>
                    <input type="file" class="border border-gray-200 rounded p-2 w-full" name="image" style="color: white;padding-bottom: 10px;">
                    @if (session()->has('error'))
                    <div style="color: red;">{{ session('error') }}</div>
                    @endif
                    @if (session()->has('image'))
                    <div style="color: red;">{{ session('image') }}</div>
                    @endif
                </div>
                <div>
                    <label for="quantity" class="inline-block text-lg mb-2">Quantity</label>
                    
                 <input type="number" class="border border-gray-200 rounded p-2 w-full" name="quantity" value="1" min="1" placeholder="Enter quantity">
                 @if (session()->has('quantity'))
                 <div style="color: red;">{{ session('quantity') }}</div>
                 @endif
                </div>
                <br>
                <div >
                    <button class="bg-laravel text-white rounded py-2 px-4 hover:bg-black">Add Product</button>
                    <br>
                    <a href="/admin/dashboard" class="text-black ml-4">Back to the Dashboard</a>
                </div>
            </form>
        </div>
    </div>   
<script src="{{ asset('js/products.js') }}"></script> 
 
