/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./index.html",
    "./src/**/*.{js,ts,jsx,tsx}",
  ],
  theme: {
    extend: {
      colors : {
        purple : "#4b21c3",
        blue : "#126cb8",
        whiteColor : "#f1f1f1"
      },
    },
  },
  plugins: [],
}

