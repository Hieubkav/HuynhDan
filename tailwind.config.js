/** @type {import('tailwindcss').Config} */
import preset from './vendor/filament/support/tailwind.config.preset'
export default {
    presets: [preset],
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
        'node_modules/preline/dist/*.js',
        "./node_modules/flowbite/**/*.js",
    ],
    theme: {
        fontFamily: {
            sans: ['Roboto', 'sans-serif'],
        },
        extend: {
            gridTemplateColumns: {
                'desktop': 'repeat(3, minmax(0, 1fr))',
                'tablet': 'repeat(2, minmax(0, 1fr))',
            },
            colors: {
                'farm': {
                    'green': '#2E7D32',
                    'brown': '#795548',
                    'gray': '#F5F5F5',
                    'orange': '#FF5722'
                }
            }
        },
    },
    plugins: [
        require('preline/plugin'),
        require('flowbite/plugin')
    ],
    darkMode: 'class',
}

