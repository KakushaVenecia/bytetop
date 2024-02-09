<!-- resources/views/products/create.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Product</title>
</head>
<body>
    <h1>Create Product</h1>

    @if(session('success'))
        <div>{{ session('success') }}</div>
    @endif

    <form action="{{ route('products.store') }}" method="POST">
        @csrf
        <div>
        <label for="name">Product Name:</label><br>
        <input type="text" id="name" name="name" value="{{ old('name') }}" required><br>
    </div>

    <div>
        <label for="description">Description:</label><br>
        <textarea id="description" name="description" required>{{ old('description') }}</textarea><br>
    </div>

    <div>
        <label for="price">Price:</label><br>
        <input type="number" id="price" name="price" value="{{ old('price') }}" step="0.01" required><br>
    </div>

    <div>
        <label for="tags">Tags:</label><br>
        <input type="text" id="tags" name="tags" value="{{ old('tags') }}" required><br>
    </div>

    <div>
        <label for="images">Images:</label><br>
        <input type="text" id="images" name="images" value="{{ old('images') }}" required><br>
    </div>

    <div>
        <label for="category">Category:</label><br>
        <input type="text" id="category" name="category" value="{{ old('category') }}" required><br>
    </div>

        <button type="submit">Submit</button>
    </form>
    <script>{{asset('js/products.js')}}</script>
</body>
</html>
