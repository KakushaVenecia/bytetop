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
        <!-- Add more fields as needed -->

        <button type="submit">Submit</button>
    </form>
    <script>{{asset('js/products.js')}}</script>
</body>
</html>
