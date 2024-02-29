import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import path from 'path'

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css','resources/css/header.css', 'resources/js/app.js'],
            refresh: true,
        }),
    ],
    resolve: {
        alias: {
            '~fonts' : path.resolve(__dirname,'resources/fonts')
        }
    },
    server: {
        // respond to all network requests (same as '0.0.0.0')
        host: true,
        // we need a strict port to match on PHP side
        watch: {
            usePolling: true,
        },
        strictPort: true,
        port: 4040,
        hmr: {
            // TODO: Is this the best way to achieve that? 🤔
            // Force the Vite client to connect via SSL
            // This will also force a "https://" URL in the public/hot file
            // The host where the Vite dev server can be accessed
            // This will also force this host to be written to the public/hot file
            host: `gena-clinic.local`
        }
    },
});
