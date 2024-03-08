{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Product</title>
</head>
<body>
    <h1>Create Product</h1>
    <form>
    <form method="POST" id="productForm" action="{{ route('admin.products.store') }}">
        @csrf
        
        <label for="product-name">Productjhkjhkjhkjhkj</label>
        <select name="product-name" id="product-name">
            <option value="">Select a Product</option>
            <!-- Add options for existing products -->
            <option value="__custom__">Enter Custom Product Name</option>
        </select>

        <div id="custom-name-section" style="display: none;">
            <label for="custom-name">Custom Product Name</label>
            <input type="text" id="custom-name" name="custom-name">
        </div>

        <label for="product-description">Product Description</label>
        <textarea id="product-description" name="product-description"></textarea>

        <div id="custom-description-section" style="display: none;">
            <label for="custom-description">Custom Product Description</label>
            <textarea id="custom-description" name="custom-description"></textarea>
        </div>

        <button type="submit">Submit</button>
    </form>
</body>
</html> --}}
{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Product</title>
    <link rel="stylesheet" href="{{ asset('css/products.css') }}">
</head>
<body>
    <div class="container">
        <div class="form-wrapper">
            <h1>Create Product</h1>
            @if(session('success'))
                <div>{{ session('success') }}</div>
            @endif
            <form method="POST" id="productForm" action="{{ route('admin.products.store') }}" enctype="multipart/form-data">
                @csrf
            <label for="name" class="inline-block text-lg mb-2">Brand Name</label>
            {{-- <select name="name" id="product-name" class="border border-gray-200 rounded p-2 w-full">
                <option value="">Select a product</option>
                @php
                    $unique_names = [];
                @endphp
                @foreach ($products as $product)
                    @if (!in_array($product->name, $unique_names))
                        <option value="{{ $product->name }}">{{ $product->name }}</option>
                        @php
                            $unique_names[] = $product->name;
                        @endphp
                    @endif
                @endforeach
                <option value="__custom__">Enter Custom Product Name</option>
            </select>  
            <label for="product-name">Product Name</label>
        <select name="product-name" id="product-name"> --}}
            {{-- <option value="">Select a Product</option>
            <!-- Add options for existing products -->
            <option value="__custom__">Enter Custom Product Name</option>
        </select>

        <div id="custom-name-section" style="display: none;">
            <label for="custom-name">Custom Product Name</label>
            <input type="text" id="custom-name" name="custom-name">
        </div>

        <label for="product-description">Product Description</label>
        <textarea id="product-description" name="product-description"></textarea>

        <div id="custom-description-section" style="display: none;">
            <label for="custom-description">Custom Product Description</label>
            <textarea id="custom-description" name="custom-description"></textarea>
        </div> --}}
            {{-- <div id="custom-name-section" style="display: none;">
                <label for="custom-name" class="inline-block text-lg mb-2">Custom Product Name</label>
                <input type="text" id="custom-name" name="custom_name" class="border border-gray-200 rounded p-2 w-full" placeholder="Enter custom product name">
            </div>

                    <div class="mb-6">
                        <label for="description" class="inline-block text-lg mb-2">Description</label>
                        <textarea id="product-description" class="border border-gray-200 rounded p-2 w-full" name="description" rows="5" placeholder="Description"></textarea>
                    </div>
    
          
            <!-- Additional input field for custom product description -->
            <div id="custom-description-section" style="display: none;">
                <label for="custom-description" class="inline-block text-lg mb-2">Product Description</label>
                <textarea id="custom-description" name="custom_description" class="border border-gray-200 rounded p-2 w-full" rows="4" placeholder="Enter product description"></textarea>
            </div> --}}

                {{-- <div class="mb-6">
                    <label for="category" class="inline-block text-lg mb-2">Category</label>
                    <select name="category" class="border border-gray-200 rounded p-2 w-full">
                        <option value="">Select a Product Category</option>
                        <option value="Laptops" @if(old('category') == 'Laptops') selected @endif>Laptops</option>
                        <option value="Computers" @if(old('category') == 'Computers') selected @endif>Computers</option>
                        <option value="Accessories" @if(old('category') == 'Accessories') selected @endif>Accessories</option>
                    </select>
                    @error('category')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>
                
                <div class="mb-6">
                    <label for="price" class="inline-block text-lg mb-2">Price</label>
                    <input type="number" class="border border-gray-200 rounded p-2 w-full" name="price" placeholder="Enter product Price" value="{{ old('price') }}">
                    @error('price')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-6">
                    <label for="tags" class="inline-block text-lg mb-2">Tags (Comma Separated)</label>
                    <input type="text" class="border border-gray-200 rounded p-2 w-full" name="tags" value="{{ old('tags') }}" placeholder="Enter tags">
                    @error('tags')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-6">
                    <label for="image" class="inline-block text-lg mb-2">Product Image</label>
                    <input type="file" class="border border-gray-200 rounded p-2 w-full" name="image">
                    @error('image')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-6">
                    <label for="quantity" class="inline-block text-lg mb-2">Quantity</label> --}}
                    {{-- <input type="number" class="border border-gray-200 rounded p-2 w-full" name="quantity" value="1" min="1" placeholder="Enter quantity">
                </div>
                <div class="mb-6">
                    <button class="bg-laravel text-white rounded py-2 px-4 hover:bg-black">Add Product</button>
                    <a href="/admin/dashboard" class="text-black ml-4">Back to the Dashboard</a>
                </div>
            </form>
        </div>
    </div>
    <script src="{{ asset('js/products.js') }}"></script> 
</body>
</html> --}} -

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Product</title>
</head>
<body>
    <h1>Create Productsss</h1>
    <form>
    {{-- <form method="POST" id="productForm" action="{{ route('admin.products.store') }}"> --}}
        @csrf
        
        <label for="product-name">Productjhkjhkjhkjhkj</label>
        <select name="product-name" id="product-name">
            <option value="">Select a Product</option>
            <!-- Add options for existing products -->
            <option value="__custom__">Enter Custom Product Name</option>
        </select>

        <div id="custom-name-section" style="display: none;">
            <label for="custom-name">Custom Product Name</label>
            <input type="text" id="custom-name" name="custom-name">
        </div>

        <label for="product-description">Product Description</label>
        <textarea id="product-description" name="product-description"></textarea>

        <div id="custom-description-section" style="display: none;">
            <label for="custom-description">Custom Product Description</label>
            <textarea id="custom-description" name="custom-description"></textarea>
        </div>

        <button type="submit">Submit</button>
    </form>
</body>
</html>