import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/css/signup.css', 
                'resources/css/signupVerify.css' 
            ],
            refresh: true,
        }),
    ],
});
