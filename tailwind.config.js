const defaultTheme = require('tailwindcss/defaultTheme')

module.exports = {
    darkMode: 'class',

    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        './resources/js/**/*.js',
    ],

    theme: {
        container: {
            center: true,
            padding: '16px',
        },
        extend: {
            colors: {
                primary: '#1746F9',
                secondary: '#FFD900',
                three: '#1E2748',
                four: '#111629',
                dark: {
                    'eval-0': '#151823',
                    'eval-1': '#222738',
                    'eval-2': '#2A2F42',
                    'eval-3': '#2C3142',
                },
            },
            fontFamily: {
                raleway: ['Montserrat', 'sans-serif'],
                nunito: ['Playfair Display', 'serif'],
            },
            screens: {
                '2xl': '1320px',
            },
        },
    },

    plugins: [require('@tailwindcss/forms')],
}
