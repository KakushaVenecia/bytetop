
		
<script src="https://kit.fontawesome.com/4d0aa3dbc2.js" crossorigin="anonymous"></script>
<link rel="stylesheet" href="{{ asset('css/landing.css') }}">	
@include('partials.navbar')
<body class="container" style="min-height: 100vh">
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
</body>
@include('partials.footer')