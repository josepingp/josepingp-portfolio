/** @type {import('tailwindcss').Config} */
export default {
  content: [
	'./storage/framework/views/*.php',
	'./resources/**/*.{blade.php,js,css}',
  ],
  theme: {
    extend: {},
  },
  plugins: [require("./plugin")],
}

