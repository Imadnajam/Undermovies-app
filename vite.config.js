# This code snippet demonstrates a simple Vite configuration for a Vue.js project.

import { defineConfig } from 'vite';
import vue from '@vitejs/plugin-vue';

// Export the Vite configuration
export default defineConfig({
  plugins: [vue()], 
  server: {
    port: 8000, 
    open: true, 
  },
  build: {
    outDir: 'dist', 
    sourcemap: true, 
  },
  resolve: {
    alias: {
      '@': '/src',
    },
  },
});
