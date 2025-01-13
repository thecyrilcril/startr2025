import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    darkMode: 'selector',

    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    safelist: [],

    theme: {
        extend: {
            fontFamily: {
                sans: ['BR Firma', ...defaultTheme.fontFamily.sans],
            },
        },
    },

    plugins: [forms],
};
