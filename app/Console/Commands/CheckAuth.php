<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class CheckAuth extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'auth:check {email? : User email to check}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Check authentication status and user information';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $this->info('=== Authentication Check ===');
        
        // Check if user email is provided
        $email = $this->argument('email');
        
        if ($email) {
            $this->checkSpecificUser($email);
        } else {
            $this->checkAllUsers();
        }
        
        return 0;
    }
    
    private function checkSpecificUser($email)
    {
        $this->info("Checking user with email: {$email}");
        
        $user = User::where('email', $email)->first();
        
        if (!$user) {
            $this->error("User with email {$email} not found!");
            return;
        }
        
        $this->displayUserInfo($user);
    }
    
    private function checkAllUsers()
    {
        $this->info('Checking all users in database:');
        
        $users = User::all();
        
        if ($users->isEmpty()) {
            $this->error('No users found in database!');
            return;
        }
        
        foreach ($users as $user) {
            $this->displayUserInfo($user);
            $this->line('-----------------------------------');
        }
    }
    
    private function displayUserInfo($user)
    {
        $this->line("ID: {$user->id}");
        $this->line("Name: {$user->name}");
        $this->line("Email: {$user->email}");
        $this->line("Is Admin: " . ($user->is_admin ? 'Yes' : 'No'));
        $this->line("Email Verified At: " . ($user->email_verified_at ? $user->email_verified_at : 'Not verified'));
        $this->line("Created At: {$user->created_at}");
        $this->line("Updated At: {$user->updated_at}");
    }
}