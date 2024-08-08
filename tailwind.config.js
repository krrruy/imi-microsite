/** @type {import('tailwindcss').Config} */

module.exports = {
  content: ["./*.php", "./node_modules/flowbite/**/*.js"],
  theme: {
    colors: {
      "imi-red": "#CC3333",
      "dark-red": "#BF171D",
      "imi-gray": "#707070",
      "dark-gray": "#666666",
      "imi-black": "#262324",
    },
    fontFamily: {
      montserrat_bold: ['montserrat_bold', 'sans-serif'],
      montserrat_regular: ['montserrat_regular', 'sans-serif'],
      montserrat_medium: ['montserrat_medium', 'sans-serif'],
      montserrat_semibold: ['montserrat_semibold', 'sans-serif'],
    },
    extend: {},
  },
  plugins: [require("flowbite/plugin")],
};
