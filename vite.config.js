import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',   // file CSS global
                'resources/js/app.js',     // file JS global
                'resources/js/index/navbar.js', // JS komponen navbar
                // tambahkan JS lain untuk komponen lain jika ada
            ],
            refresh: true,
        }),
    ],
});