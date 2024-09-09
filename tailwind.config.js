/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./assets/website/src/**/*.ts",
    "./templates/**/*.html.twig",
  ],
  theme: {
    extend: {
      borderWidth: {
        '1': "1px"
      },
      // colors: {
      //   'dark': "#222222",
      // },
    },
  },
  plugins: [],
}

