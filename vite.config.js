import { defineConfig } from 'vite'
import laravel from 'laravel-vite-plugin'
import tailwindcss from 'tailwindcss' // Ensure this is imported

export default defineConfig({
  plugins: [
    laravel({
      input: ['resources/css/app.css', 'resources/js/app.js'],
      refresh: true,
    }),
  ],
  css: {
    postcss: {
      plugins: [
        tailwindcss(), // Ensure this is included
      ],
    },
  },
})