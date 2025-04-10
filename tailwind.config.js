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
        eerieblack: "#2F318Bff",
        davysgray: "#FFFFFFff",
        silver: "#BFC0D3ff",
        yellow: "#F9CB13ff",
      }
    },
  },
  plugins: [
    require('flowbite/plugin')
  ],
}

