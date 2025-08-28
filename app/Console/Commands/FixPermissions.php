<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class FixPermissions extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'fix:permissions';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Fix common Laravel permission issues';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $this->info('Fixing Laravel permissions...');
        
        $directories = [
            'storage',
            'storage/app',
            'storage/app/public',
            'storage/framework',
            'storage/framework/cache',
            'storage/framework/sessions',
            'storage/framework/views',
            'storage/logs',
            'bootstrap/cache',
        ];
        
        foreach ($directories as $directory) {
            $path = base_path($directory);
            
            if (!is_dir($path)) {
                $this->info("Creating directory: {$path}");
                mkdir($path, 0755, true);
            }
            
            $this->info("Setting permissions for: {$path}");
            chmod($path, 0755);
            
            // For files inside directories
            if (is_dir($path)) {
                $files = glob($path . '/*');
                foreach ($files as $file) {
                    if (is_file($file)) {
                        chmod($file, 0644);
                    }
                }
            }
        }
        
        $this->info('Clearing caches...');
        $this->call('config:clear');
        $this->call('cache:clear');
        $this->call('route:clear');
        $this->call('view:clear');
        
        $this->info('Permissions fixed successfully!');
        
        return 0;
    }
}