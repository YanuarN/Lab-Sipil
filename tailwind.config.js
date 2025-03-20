/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      colors:{
        eerieblack: "#222831",
        davysgray: "#393E46",
        silver: "#A9A9A7",
        yellow: "#FFD369",
      }
    },
  },
  plugins: [],
}

