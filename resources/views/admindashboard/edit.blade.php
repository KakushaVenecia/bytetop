

<!-- resources/views/products/create.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Product</title>
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
    @if(session('success'))
        <div>{{ session('success') }}</div>
    @endif
    <h1>Edit Product</h1>

    <form action="{{ route('admin.products.update', $product->id) }}"  enctype="multipart/form-data" method="POST">
        @csrf
        @method('PUT')

        <div>
            <label for="name">Product Name:</label><br>
            <input type="text" id="name" name="name" value="{{ $product->name }}" required><br>
        </div>

        <div>
            <label for="description">Description:</label><br>
            <textarea id="description" name="description" required>{{ $product->description }}</textarea><br>
        </div>

        <div>
            <label for="price">Price:</label><br>
            <input type="number" id="price" name="price" value="{{ $product->price }}" step="0.01" required><br>
        </div>

        <div>
            <label for="tags">Tags:</label><br>
            <input type="text" id="tags" name="tags" value="{{ $product->tags }}" required><br>
        </div>

        <!-- <div>
            <label for="image">Images:</label><br>
            <input type="text" id="images" name="images" value="{{ $product->images }}" required><br>
        </div> -->

        <div class="mb-6">
            <label for="image" class="inline-block text-lg mb-2">Product Image</label>
            <input type="file" value="{{ $product->image }}" class="border border-gray-200 rounded p-2 w-full" name="image">
            @error('image')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label for="category">Category:</label><br>
            <input type="text" id="category" name="category" value="{{ $product->category }}" required><br>
        </div>
        <div class="mb-6">
            <label for="quantity" class="inline-block text-lg mb-2">Quantity</label>
         <input type="number" class="border border-gray-200 rounded p-2 w-full" name="quantity"  id="quantity" value="{{ $product->quantity }}" placeholder="Enter quantity">
        </div>

        <div>
            <button type="submit">Update Product</button>
        </div>
    </form>
</div>
</div>
    <script src="{{ asset('js/products.js') }}"></script> 
</body>
</html>
