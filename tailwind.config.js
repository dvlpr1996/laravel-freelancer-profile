const defaultTheme = require('tailwindcss/defaultTheme');

/** @type {import('tailwindcss').Config} */
module.exports = {
	content: [
		'./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
		'./storage/framework/views/*.php',
		'./resources/views/**/*.blade.php',
	],
	daisyui: {
		themes: ["dark"],
	},
	theme: {
		screens: {
			'2xs': '270px',
			'xs': '360px',
			'sm': '640px',
			'md': '768px',
			'lg': '1024px',
			'xl': '1280px',
			'2xl': '1536px',
		},
		extend: {
			fontFamily: {
				sans: ['Nunito', ...defaultTheme.fontFamily.sans],
			},
		},
	},

	plugins: [
		require('daisyui'),
		require('@tailwindcss/forms'),
		require('tailwindcss-debug-screens'),
	],
};
