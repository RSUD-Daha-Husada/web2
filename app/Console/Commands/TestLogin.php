<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class TestLogin extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'auth:test-login {email} {password}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Test login with provided credentials';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $email = $this->argument('email');
        $password = $this->argument('password');
        
        $this->info("Testing login for email: {$email}");
        
        // Find user
        $user = User::where('email', $email)->first();
        
        if (!$user) {
            $this->error("User with email {$email} not found!");
            return 1;
        }
        
        $this->info("User found:");
        $this->line("ID: {$user->id}");
        $this->line("Name: {$user->name}");
        $this->line("Email: {$user->email}");
        $this->line("Is Admin: " . ($user->is_admin ? 'Yes' : 'No'));
        $this->line("Password Hash: {$user->password}");
        
        // Test password verification
        $passwordValid = Hash::check($password, $user->password);
        $this->line("Password Valid: " . ($passwordValid ? 'Yes' : 'No'));
        
        if (!$passwordValid) {
            $this->error("Password is invalid!");
            return 1;
        }
        
        // Test authentication
        $this->info("\nTesting authentication...");
        
        if (Auth::attempt(['email' => $email, 'password' => $password])) {
            $this->info("Authentication successful!");
            $this->line("Auth::check(): " . (Auth::check() ? 'Yes' : 'No'));
            $this->line("Auth::id(): " . Auth::id());
            $this->line("Auth::user()->name: " . Auth::user()->name);
            $this->line("Auth::user()->is_admin: " . (Auth::user()->is_admin ? 'Yes' : 'No'));
            
            // Check session
            $this->info("\nSession data:");
            $this->line("Session ID: " . session()->getId());
            $this->line("Session has user_id: " . (session()->has('user_id') ? 'Yes' : 'No'));
            $this->line("Session has is_admin: " . (session()->has('is_admin') ? 'Yes' : 'No'));
            
            return 0;
        } else {
            $this->error("Authentication failed!");
            return 1;
        }
    }
}