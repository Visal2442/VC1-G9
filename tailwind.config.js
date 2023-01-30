/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./src/**/*.{html,js}"],
  theme: {
    extend: {},
      screens: {
        // @media (max-width: 1279px) 
        'xl': {'max': '1279px'},
  
        // @media (max-width: 1023px)
        'lg': {'max': '1023px'},
  
        // @media (max-width: 767px)
        'md': {'max': '767px'},
  
        // @media (max-width: 639px) { ... }
        'sm': {'max': '639px'},
      }
  },
  plugins: [],
}
