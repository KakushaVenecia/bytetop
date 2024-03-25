<?php

namespace Tests\Feature;

use App\Models\ProductDetail;
use App\Models\Review;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Http\Response;
use Tests\TestCase;

class ReviewControllerTest extends TestCase
{
    // use RefreshDatabase;
    use WithFaker;

    /** @test */
    public function it_can_reply_to_review()
    {
        // $productDetail = ProductDetail::factory()->create();

        $productDetail = ProductDetail::factory()->create([
            'name' => $this->faker->word,
            'description' => $this->faker->sentence,
            'price' => $this->faker->randomFloat(2, 10, 500),
            'tags' => $this->faker->words(3, true),
            'category' => $this->faker->randomElement(['Laptops', 'Accessories', 'Computers', 'Monitors']),
            'image' => $this->faker->imageUrl(),
            'quantity' => $this->faker->numberBetween(1, 100),
            'rating' => $this->faker->optional()->randomFloat(2, 1, 5),
        ]);

        
        $user = User::first();

        // Create a Review instance associated with the ProductDetail and User
        $review = Review::create([
            'content' => 'Sample review content',
            'rating' => 5,
            'product_detail_id' => $productDetail->id,
            'user_id' => $user->id,
        ]);


        $replyContent = $this->faker->sentence;
        $response = $this->post(route('product.review.reply', ['reviewId' => $review->id]), [
            'reply_content' => $replyContent,
        ]);



        $response->assertStatus(Response::HTTP_FOUND)
            ->assertSessionHas('success', 'Reply sent successfully!');

        $updatedReview = Review::find($review->id);
        $this->assertEquals($replyContent, $updatedReview->admin_reply);
        
        // Assert that the user is redirected to the correct product page
        $response->assertRedirect(route('product.show', ['productId' => $productDetail->id]));
    }
}
