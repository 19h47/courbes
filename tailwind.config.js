const { fontFamily } = require("tailwindcss/defaultTheme");

const borderRadius = {};
const colors = {};
const fontSize = {};
const maxWidth = {};
const spacing = {};
const transitionDuration = {};

const zIndex = {
	1: "1",
	2: "2",
	3: "3",
	4: "4",
	5: "5",
	9: "9",
};

module.exports = {
	content: ["./views/**/*.twig", "./src/**/*.{html,js}", "./includes/**/*.{php,json}"],
	theme: {
		container: {
			center: true,
			padding: '2rem'
		},
		extend: {
			gridTemplateColumns: {},
			gridColumn: {},
			borderRadius,
			colors,
			fontSize,
			maxWidth,
			spacing,
			transitionDuration,
			zIndex,
		},
		fontFamily: {
			sans: ['"Maison Neue"', ...fontFamily.sans],
			serif: ['"League Spartan"', ...fontFamily.serif],
		},
	},
	plugins: [
		require('@tailwindcss/typography'),
	]
};
