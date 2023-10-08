/** @type {import('tailwindcss').Config} */
module.exports = {
	content: ["./src/**/*.{html,js}"],
	theme: {
		extend: {
			fontFamily: {
				inter: ['Inter', 'sans-serif'],
				lato: ['Lato', 'sans-serif'],
				playfair: ['Playfair Display', 'sans-serif'],
				montserrat: ['Montserrat', 'sans-serif']
			},
			color: {
				blueais: '#1675CA',
			}
		},
	},
	plugins: [],
}

