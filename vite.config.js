import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: true,
        }),
    ],
    server: {
        host: '0.0.0.0', // Allows external access
        port: 5173,
        hmr: {
          host: '194.61.65.208', // Replace with your server's IP address
        },
      },
});
