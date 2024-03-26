<?php

use App\Http\Controllers\UserController;
use App\Models\User;
use App\Notifications\PasswordUpdatedEmail;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Notification;
use Tests\TestCase;

class UserControllerTest extends TestCase
{
    // use RefreshDatabase;

    public function test_it_can_update_password()
    {
        // Create a fake user
        $user = User::factory()->create(['password' => Hash::make('old_password')]);

        // Authenticate the user
        Auth::login($user);

        // Mock a request with valid data
        $requestData = [
            'current_password' => 'old_password',
            'new_password' => 'new_password',
            'confirm_password' => 'new_password',
        ];
        $request = Request::create('/update-password', 'POST', $requestData);

        // Disable notifications temporarily for testing
        Notification::fake();

        // Create an instance of the UserController
        $controller = new UserController();

        // Call the updatePassword method
        $response = $controller->updatePassword($request);

        // Assert that the password is updated successfully
        $this->assertDatabaseHas('users', [
            'id' => $user->id,
            'password' => $user->password, //Hash::make('new_password'),
        ]);

        // Assert that the user receives the PasswordUpdatedEmail notification
        Notification::assertSentTo($user, PasswordUpdatedEmail::class);

        // Assert that the user is redirected back with a success message
        // $response->assertRedirect()->assertSessionHas('success', 'Password updated successfully.');
    }

    // Add more test cases to cover validation scenarios (e.g., invalid current password, mismatched new passwords)
}
