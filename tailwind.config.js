/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./app-modules/*/resources/**/*.blade.php",
        "./app-modules/*/resources/**/*.js",
    ],
    theme: {
        extend: {},
    },
    plugins: [],
}
