<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\User;
use App\Notifications\WelcomeEmail;
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
        // Create initial administrative user
        $admin = User::create([
            'name' => 'Bytetop Admin',
            'email' => 'kakushavenecia@gmail.com',
            'password' => bcrypt('Bytetop1pot!'),
            'role' => 'admin',
            'email_verification_token' => Str::random(60), // Generate email verification token
        ]);

        // Send welcome email with verification link
        $admin->notify(new WelcomeEmail($admin));

        $this->info('Database initialized successfully.');
    }
}

