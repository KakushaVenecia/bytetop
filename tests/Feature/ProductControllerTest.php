<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Tests\TestCase; // Import Str class

class ProductControllerTest extends TestCase
{
    // use RefreshDatabase;

    /** @test */
    public function it_can_create_a_product()
    {
        Storage::fake('public');

        $data = [
            'name' => 'Test Product '.Str::random(6), // update name each time running the test, because name is unique
            'description' => 'Test description',
            'price' => 10.99,
            'tags' => 'tag1, tag2',
            'category' => 'Laptops',
            'image' => UploadedFile::fake()->create('images/33353.jpg', 1024),
            'quantity' => 5,
        ];

        $response = $this->postJson('/admin/products', $data);

        $response->assertStatus(200)
            ->assertJson(['success' => true, 'message' => 'Product created successfully']);

        // $this->assertDatabaseCount('product_details', 6); // Check if 5 products are created, update number of products each time running the test

        // Additional assertions to check product details in the database
        $this->assertDatabaseHas('product_details', [
            'name' => $data['name'],
            'description' => $data['description'],
            'price' => $data['price'],
            'tags' => $data['tags'],
            'category' => $data['category'],

            // Add more assertions as needed
        ]);

        // Assert that the image was stored
        // Storage::disk('public')->assertExists('images/' . $response['image']);
    }

    // Add more test cases as needed for validation, error handling, etc.
}
