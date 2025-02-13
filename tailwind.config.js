import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Poppins'],
            },
            colors:{
                'primary': "#4043C9",
                'primary-accent': "#5B5DCA",
                'gray-accent': "#57595C",
                'black-accent': "#1E1E1E",
                'accent-gray': "#D1D0D0",
            },
        },
    },

    plugins: [forms],
};
