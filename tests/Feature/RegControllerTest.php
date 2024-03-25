<?php

use App\Http\Controllers\RegController;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Tests\TestCase;

class RegControllerTest extends TestCase
{
   
    public function testLoginWithValidCredentials()
    {
        $user = User::factory()->create([
            'email_verified_at' => now(), // Assuming email is verified
            'password' => bcrypt('password'),
        ]);

        // $request = $this->mock(Request::class);
        // $request->shouldReceive('only')->andReturn(['email' => $user->email, 'password' => 'password']);


        $request = new Request([
            'email' => $user->email,
            'password' => 'password'
        ]);

        $controller = new RegController();

        // Mock the Auth facade's attempt method to return true
        Auth::shouldReceive('attempt')->andReturn(true);
        Auth::shouldReceive('user')->andReturn($user);

        // Assuming the user's role is not super_admin or admin
        $user->role = 'regular_user';

        // Expecting redirect to 'landing' route for regular users
        $response = $controller->login($request);
        $this->followRedirects($response)->assertSee('Login successful');

        // $response->assertRedirect(route('landing'))->assertSessionHas('success', 'Login successful');
    }

    public function testLoginWithInvalidCredentials()
    {
        $request = new Request([
            'email' => 'user@gmail.com',
            'password' => 'password'
        ]);

        $controller = new RegController();

        // Mock the Auth facade's attempt method to return false
        Auth::shouldReceive('attempt')->andReturn(false);

        // Expecting redirect back with error message for invalid credentials
        $response = $controller->login($request);
        $this->followRedirects($response)->assertSee('Invalid credentials');

    }

    // Add more test cases for other scenarios such as unverified email, pending status, etc.
}
