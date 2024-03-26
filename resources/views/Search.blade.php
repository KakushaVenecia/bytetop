{{-- 
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
                <div class="product">
                    <h2>{{ $product->name }}</h2>
                    <p>{{ $product->description }}</p>
                    <img src="{{ asset('storage/images/' . $product->image) }}" alt="{{ $product->name }}" class="product-image">
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

</html> --}}
