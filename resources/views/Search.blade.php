
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Results</title>
    <script src="https://kit.fontawesome.com/4d0aa3dbc2.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{ asset('css/landing.css') }}">	
</head>

<body class="container" style="min-height: 100vh">
    @include('partials.navbar')

    @if(isset($test) && $test->count() > 0)
        <h2>Search Results for "{{ $query }}"</h2>
        <div class="products">
            @foreach($test as $product)
            <div class="product" data-product-id="{{ $product->id }}" data-brand="{{ $product->brand }}" data-tags="{{ $product->tags }}">
                <a href="{{ route('product.show', $product->id) }}">
                    <img src="{{ asset('storage/images/' . $product->image) }}" alt="{{ $product->name }}">
                    <h3 style="color: blue;">{{ $product->name }}</h3>
                </a>
                <div class="product-details">
                    <p>Brand: {{ $product->brand }}</p>
                    <p>Description {{ $product->description }}</p>
                    <p class="product-price">Price: ${{ $product->price }}</p>
                    @foreach(explode(',', $product->tags) as $tag)
                        <span class="tag">{{ $tag }}</span>
                    @endforeach       
                    @if($isInCart[$product->id])
                    <p class="text-danger">This product is already in your cart.</p>
                     @else
                    <form action="{{ route('cart.add') }}" method="POST">
                            @csrf
                            <input type="hidden" name="product_id" value="{{ $product->id }}">
                            <input type="hidden" name="product_name" value="{{ $product->name }}">
                            <input type="hidden" name="product_quantity" value="1">
                            <input type="hidden" name="product_price" value="{{ $product->price }}">
                            <button type="submit" class="btn btn-add">Add to Cart</button>
                    </form>
                    @endif
                </div>
            </div>   
            @endforeach
        </div>
    @else
        <div class="container" style="min-height: 100vh">
            <h1>No Products Found</h1>
        </div>
    @endif

    @include('partials.footer')
</body>

</html>
