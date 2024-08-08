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
    extend: {},
  },
  plugins: [require("flowbite/plugin")],
};
