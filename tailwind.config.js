const defaultTheme = require('tailwindcss/defaultTheme')

module.exports = {
    purge: [
        "app/**/*.php",
        "resources/**/*.js",
        "resources/**/*.php",
      ],
  darkMode: false, // or 'media' or 'class'
  theme: {
    fontFamily: {
        sans: ['Montserrat', ...defaultTheme.fontFamily.sans],
      },
    extend: {},
  },
  variants: {
    extend: {},
  },
  plugins: [],
}

