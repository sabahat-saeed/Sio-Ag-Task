import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/js/app.js',
            ],
            refresh: true,
        }),
    ],
    server: {
        port: 80, // Your desired port
        // Set the base path to '/src/' assuming your project is in a 'src' folder inside the Docker container
        base: '/src/',
    },
});
