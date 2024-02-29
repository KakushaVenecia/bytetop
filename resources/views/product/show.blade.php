<!-- resources/views/products/show.blade.php -->
@extends('layouts.app')

@section('content')

<div class="container mt-0">
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    <img src="{{ asset('storage/images/' . $product->image) }}" class="" alt="{{ $product->name }}">

                </div>
                <div class="col-md-6">
                    <h4 class="card-title">{{ $product->name }}</h4>
                    <h5 class="card-title">{{ $product->category }}</h5>
                    <h5 class="card-title">{{ $product->tags }}</h5>
                    <p class="card-text">{{ $product->description }}</p>
                    <p class="card-text"><strong>Price:</strong> $ {{ $product->price }}</p>
                    <button type="button" class="btn btn-primary">Add to Cart</button>
                </div>

            </div>
        </div>
    </div>

    <div class="mt-4">
        <hr class="my-5" />

        <h3>Customer Reviews</h3>

        @forelse($product->reviews as $review)
        <!-- Individual Review -->
        <div class="card mt-3">
            <div class="card-body " style="text-align:left; width:100%; ">
                <h5 class="card-title"><strong>{{ $review->user_name }}</strong></h5>
                <p class="card-text">{{ $review->content }}</p>
                <p class="card-text"><small class="text-muted">Rating: {{ $review->rating }}/5</small></p>
            </div>
        </div>
        @empty
        <p>No reviews yet. Be the first to write a review!</p>
        @endforelse


        <hr class="my-5" />

        <!-- Add Review Form -->
        <div class="mt-3">
            <h5>Add Your Review</h5>
            <form method="post" action="{{ route('reviews.store', ['productId' => $product->id]) }}">
                @csrf
                <div class="mb-3">
                    <label for="reviewName" class="form-label">Your Name</label>
                    <input type="text" class="form-control" id="reviewName" name="user_name" required>
                </div>
                <div class="mb-3">
                    <label for="reviewContent" class="form-label">Your Review</label>
                    <textarea class="form-control" id="reviewContent" name="content" rows="3" required></textarea>
                </div>
                <div class="mb-3">
                    <label for="reviewRating" class="form-label">Rating (0-5)</label>
                    <input type="range" class="form-range" id="reviewRating" name="rating" min="0" max="5" step="1" required>
                    <output for="reviewRating" class="form-label mt-2">0</output>
                </div>
                <button type="submit" class="btn btn-primary">Submit Review</button>
            </form>
        </div>
    </div>

    <script>
        // Add event listener to the range input to update the output value
        document.getElementById('reviewRating').addEventListener('input', function() {
            document.querySelector('output[for="reviewRating"]').textContent = this.value;
        });
    </script>
</div>
@endsection