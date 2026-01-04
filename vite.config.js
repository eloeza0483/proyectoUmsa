import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import tailwindcss from '@tailwindcss/vite'; // <--- ESTA IMPORTACIÓN ES OBLIGATORIA

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: true,
        }),
        tailwindcss(), // <--- ESTO DEBE ESTAR AQUÍ
    ],
    build: {
        outDir: 'public/build',
        assetsDir: 'assets',
    }
});