import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import vue from '@vitejs/plugin-vue';

export default defineConfig({
    plugins: [
        laravel({
            input: 'resources/js/app.ts',
            refresh: true,
        }),
        vue({
            template: {
                transformAssetUrls: {
                    base: null,
                    includeAbsolute: false,
                },
            },
        }),
    ],
    server: {
        host: '127.0.0.1', // or 'localhost'
        port: 5173,
        strictPort: true,
        cors: true, // allow all origins OR
        headers: {
            'Access-Control-Allow-Origin':"*",
        }
    }
});
