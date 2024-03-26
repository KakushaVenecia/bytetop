<?php

namespace App\Console\Commands;

use App\Models\User;
use App\Notifications\AdminWelcomeEmail;
use Illuminate\Console\Command;
use Illuminate\Support\Str;

class InitializeDatabase extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:initialize-database';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Initialize the database';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $token = Str::random(60);
        $password = Str::random(10);
        // Create initial administrative user
        $admin = User::create([

            'name' => 'Mairaj Khan',
            'email' => 'khan.mairaj78@gmail.com',
            'password' => bcrypt($password),
            'role' => 'super_admin',
            'status' => 'active',
            'email_verification_token' => $token, // Generate email verification token
        ]);

        // Specify the base URL of your application
        // $baseUrl = 'http://127.0.0.1:8000/email/verify/' . $admin->id;

        // Generate verification URL with user's ID
        // $verificationUrl = $baseUrl . '?hash=' . $token;

        // Send welcome email with verification link
        $admin->notify(new AdminWelcomeEmail($admin->email, $password));

        $this->info('Database initialized successfully.');
    }
}
