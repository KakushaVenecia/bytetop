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

            <p>Description: {{ $product->description }}</p>

            <p class="product-price">Price: ${{ $product->price }}</p>

            @foreach(explode(',', $product->tags) as $tag)
                <span class="tag">{{ $tag }}</span>
            @endforeach

        </div>

    </div>

    @endforeach

</div>
