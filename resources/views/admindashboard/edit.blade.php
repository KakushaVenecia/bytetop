@section('content')
    <h1>Edit Product</h1>

    <form action="{{ route('products.update', $product->id) }}" method="POST">
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

        <div>
            <label for="images">Images:</label><br>
            <input type="text" id="images" name="images" value="{{ $product->images }}" required><br>
        </div>

        <div>
            <label for="category">Category:</label><br>
            <input type="text" id="category" name="category" value="{{ $product->category }}" required><br>
        </div>

        <!-- Add more fields as needed -->

        <div>
            <button type="submit">Update Product</button>
        </div>
    </form>
@endsection