import {defineConfig} from 'vite'
import react from '@vitejs/plugin-react'

// https://vitejs.dev/config/
export default defineConfig({
    plugins: [react()],
    server: {
        // respond to all network requests (same as '0.0.0.0')
        host: true,
        // we need a strict port to match on PHP side
        watch: {
            usePolling: true,
        },
        strictPort: true,
        port:3000,
        hmr: {
            // TODO: Is this the best way to achieve that? 🤔
            // Force the Vite client to connect via SSL
            // This will also force a "https://" URL in the public/hot file
            // The host where the Vite dev server can be accessed
            // This will also force this host to be written to the public/hot file
            host: `gena-clinic.local`,
            clientPort: 3000,
        }
    },
    resolve: {
        extensions: ['.js', '.json', '.jsx', '.mjs', '.ts', '.tsx', '.vue'],
        alias: {
            "@": "/src/",

        },
    },
    esbuild: {
        minifyIdentifiers: false,
        keepNames: true,
    },

})
