import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/bootstrap.css', // Bootstrap styles
                'resources/js/bootstrap.js',
                'resources/css/tailwind.css',  // Tailwind styles
            ],
            refresh: true,
        }),
    ],
});
