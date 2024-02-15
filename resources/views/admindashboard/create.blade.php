<!-- resources/views/products/create.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Product</title>
 <style> 
.container {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
}

.form-wrapper {
    max-width: 400px;
    width: 100%;
    padding: 20px;
    border: 1px solid #ccc;
    border-radius: 5px;
    background-color: #fff;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
}

.form-wrapper input[type="text"],
.form-wrapper input[type="number"],
.form-wrapper textarea,
.form-wrapper select,
.form-wrapper button {
    width: 100%;
    padding: 10px;
    margin-bottom: 15px;
    border: 1px solid #ccc;
    border-radius: 5px;
    box-sizing: border-box;
}

.form-wrapper button {
    background-color: #007bff;
    color: #fff;
    border: none;
    padding: 10px 20px;
    border-radius: 5px;
    cursor: pointer;
}

.form-wrapper button:hover {
    background-color: #0056b3;
}

a{
    list-style: none;
}
</style>
</head>
<body>
    <div class="container">
        <div class="form-wrapper">
    <h1>Create Product</h1>
    @if(session('success'))
        <div>{{ session('success') }}</div>
    @endif
    <form method="POST" action="{{ route('products.store') }}" enctype="multipart/form-data">
        @csrf
        <div class="mb-6">
            <label for="name" class="inline-block text-lg mb-2">Product Name</label>
            <input type="text" class="border border-gray-200 rounded p-2 w-full" name="name" value="{{ old('name') }}" placeholder="Enter product name">
            @error('name')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
            @enderror
        </div>
        <div class="mb-6">
            <label for="description" class="inline-block text-lg mb-2">Description</label>
            <textarea class="border border-gray-200 rounded p-2 w-full" name="description" rows="5" placeholder="Enter product description">{{ old('description') }}</textarea>
            @error('description')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
            @enderror
        </div>
    
        <div class="mb-6">
            <label for="category" class="inline-block text-lg mb-2">Category</label>
            <select name="category" class="border border-gray-200 rounded p-2 w-full">
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
            <button class="bg-laravel text-white rounded py-2 px-4 hover:bg-black">Add Product</button>
            <a href="/admin/dashboard" class="text-black ml-4">Back to the Dashboard</a>
        </div>
    </form>
</div>
</div>
    <script src="{{ asset('js/products.js') }}"></script> 
</body>
</html>
