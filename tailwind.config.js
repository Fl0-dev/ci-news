/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./app/Views/**/*.php",
  ],
  theme: {
    extend: {
      fontFamily: {
        'sans': ['Roboto Slab', 'sans-serif'],
      },
      colors: {
        'font': '#FAFAFA',
        'primary': '#001B2D',
      }
    },
  },
  plugins: [],
}

