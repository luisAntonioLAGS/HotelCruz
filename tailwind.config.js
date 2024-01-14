const defaultTheme = require('tailwindcss/defaultTheme')
/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
      ],
  theme: {
    extend: {
        fontFamily: {
            'greatvibes': ['Great Vibes', 'cursive'],
          },
    },
  },
  plugins: [
    require('@tailwindcss/forms'),
    ],
}

