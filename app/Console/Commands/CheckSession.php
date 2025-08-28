<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Storage;

class CheckSession extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'session:check';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Check session files and information';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $this->info('=== Session Check ===');
        
        // Check session directory
        $sessionPath = storage_path('framework/sessions');
        
        if (!is_dir($sessionPath)) {
            $this->error("Session directory not found: {$sessionPath}");
            return 1;
        }
        
        $this->info("Session directory: {$sessionPath}");
        
        // List session files
        $files = glob($sessionPath . '/*');
        $this->info("Number of session files: " . count($files));
        
        if (count($files) > 0) {
            $this->info("Recent session files:");
            
            // Sort files by modification time
            usort($files, function($a, $b) {
                return filemtime($b) - filemtime($a);
            });
            
            // Show last 5 session files
            $files = array_slice($files, 0, 5);
            
            foreach ($files as $file) {
                $filename = basename($file);
                $size = filesize($file);
                $modified = date('Y-m-d H:i:s', filemtime($file));
                
                $this->line("File: {$filename}");
                $this->line("Size: {$size} bytes");
                $this->line("Modified: {$modified}");
                
                // Try to read session data
                try {
                    $sessionId = str_replace(['sess_', '.'], ['', ''], $filename);
                    $sessionData = file_get_contents($file);
                    
                    if ($sessionData) {
                        $this->line("Session ID: {$sessionId}");
                        $this->line("Session Data (raw): " . substr($sessionData, 0, 100) . "...");
                    }
                } catch (\Exception $e) {
                    $this->error("Could not read session file: " . $e->getMessage());
                }
                
                $this->line('-----------------------------------');
            }
        }
        
        // Check session configuration
        $this->info("\n=== Session Configuration ===");
        $this->line("Session Driver: " . config('session.driver'));
        $this->line("Session Lifetime: " . config('session.lifetime') . " minutes");
        $this->line("Session Path: " . config('session.files'));
        
        // Check directory permissions
        $this->info("\n=== Directory Permissions ===");
        $this->line("Storage directory: " . substr(sprintf('%o', fileperms(storage_path())), -4));
        $this->line("Session directory: " . substr(sprintf('%o', fileperms($sessionPath)), -4));
        
        return 0;
    }
}