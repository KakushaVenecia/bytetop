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
                    <!-- Link to go to the review page -->


                </div>
                <div class="col-md-12">
                    <div class="product-reviews">
                        @forelse($product->reviews as $review)
                        <!-- Individual Review -->
                        <div class="card mt-3">
                            <div class="card-body" style="text-align:left; width:100%;">
                                <h5 class="card-title"><strong>{{ $review->user->name }}</strong></h5>
                                <p class="card-text">{{ $review->content }}</p>
                                <p class="card-text"><small class="text-muted">Rating: {{ $review->rating }}/5</small></p>
                                @if ($review->admin_reply)
                                <div class="admin-reply alert alert-info">
                                    <strong>Admin Reply:</strong>
                                    <p>{{ $review->admin_reply }}</p>
                                </div>
                                @endif
                                <!-- Admin Reply Form -->
                                @if($is_admin)
                                <form method="post" action="{{ route('product.review.reply', $review->id) }}">
                                    @csrf
                                    <div class="mb-3">
                                        <label for="replyContent" class="form-label">Reply</label>
                                        <textarea class="form-control" width="200" id="replyContent" name="reply_content" rows="2" required>{{ $review->admin_reply }}</textarea>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Send Reply</button>
                                </form>
                                @endif
                            </div>
                        </div>
                        @empty
                        <p>No reviews yet. Be the first to write a review!</p>
                        @endforelse
                    </div>
                    <div class="mt-3">
                        <h5>Add Your Review</h5>
                        <div class="row">
                            <div class="col-md-4">
                                <form method="post" action="{{ route('product.review.store', $product->name) }}">
                                    @csrf
                                    <input type="hidden" name="product_image" value="{{ asset('storage/images/' . $product->image) }}">
                                    <div class="mb-3">
                                        <label for="reviewContent" class="form-label">Your Review</label>
                                        <textarea class="form-control" id="reviewContent" name="content" rows="3" required></textarea>
                                    </div>
                                    <div class="mb-3">
                                        <label for="reviewRating" class="form-label">Rating (0-5)</label>
                                        <input type="range" class="form-range" id="reviewRating" name="rating" min="0" max="5" step="1" required>
                                        <output for="reviewRating" class="form-label mt-2">3</output>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Submit Review</button>
                                </form>
                            </div>
                        </div>

                        <script>
                            // Get the range input and output elements
                            const rangeInput = document.getElementById('reviewRating');
                            const output = document.querySelector('output[for="reviewRating"]');

                            // Add event listener for input event on range input
                            rangeInput.addEventListener('input', function() {
                                // Update the content of the output element with the current value of the range input
                                output.textContent = this.value;
                            });
                        </script>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection