import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 
                    'resources/js/app.js',
                    'resources/js/Bahan.js',
                    'resources/js/BookEksternal.js',
                    'resources/js/BookingMhs.js',
                    'resources/js/Landing.js',
                    'resources/js/PinjamRuang.js'],
            refresh: true,
        }),
    ],
    server: {
        port: 3000,
        host: '127.0.0.1'
    }
});
