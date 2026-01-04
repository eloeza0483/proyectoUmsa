import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: true,
        }),
    ],
    // Agrega esto si no lo tienes para asegurar rutas relativas
    build: {
        outDir: 'public/build',
    }
});