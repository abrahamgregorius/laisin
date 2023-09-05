import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';


export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/js/app.js',
                'resources/sass/app.scss',
                'resources/js/laisin-js/jquery.js',
                'resources/js/laisin-js/live-search.js',
                'resources/js/laisin-js/hamburger.js',
                'resources/js/laisin-js/laisin-product.js',
                'resources/js/laisin-js/contact.js',
                'resources/js/laisin-js/laisin-admin.js',
                'resources/js/laisin-js/laisin-chart.js',
                'resources/js/laisin-js/laisin-uploadfile.js',
                'resources/js/laisin-js/confirmdelete.js',
                'resources/js/laisin-js/sweetalert.all.js',
                'resources/js/bootstrap.js',
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