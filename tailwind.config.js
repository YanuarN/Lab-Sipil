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
        eerieblack: "#141414ff",
        davysgray: "#545453",
        silver: "#A9A9A7",
        yellow: "#FDFC01",
        night: "#141414",
      }
    },
  },
  plugins: [],
}

