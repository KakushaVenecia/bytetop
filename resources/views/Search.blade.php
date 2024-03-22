
<form method="post" action="/Search">				
<input type="text" name= "search">
<input type="hidden" name="_token" value="{{ csrf_token() }}">
<button>Search Now</button>				
</form>
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
    <h1>No Products Found</h1>
@endif