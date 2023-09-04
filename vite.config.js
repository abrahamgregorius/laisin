import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';


export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/js/app.js',
                'resources/sass/app.scss',
                // Kalo misalnya ada file css/js yg
                // gk mau dimasukin bareng dengan
                // app.css atau app.js
                // tambahin aja path filenya,
                // terus import di bladenya pake @vite([])
            ],
            refresh: true,
        }),
    ],
});