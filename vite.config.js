import { defineConfig } from 'vite'
import laravel from 'laravel-vite-plugin'
import path from 'path'  // ← Tambahkan ini di atas

export default defineConfig({
  server: {
    host: 'localhost',
    port: 5173,
    hmr: {
      host: 'localhost',
      protocol: 'ws',
    },
  },
  plugins: [
    laravel({
      input: ['resources/css/app.css', 'resources/js/app.js'],
      refresh: true,
    }),
  ],
  resolve: {
    alias: {
      // ← TAMBAHKAN INI
      '/fonts': path.resolve(__dirname, 'public/fonts'),
    },
  },
})
