/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  darkMode: 'media',
  theme: {
      screens: {
        'xs': '375px',
        'sm': '540px',
        'md': '720px',
        'lg': '960px',
        'xl': '1140px',
        '2xl': '1280px',
        '3xl': '1440px',
        '4xl': '1550px',
      },
      container: {
        center: true,
        padding: {
          DEFAULT: '20px',
          xs: '16px',
          sm: '16px',
        },
      },
      fontFamily: {
      'sans': ['Dela Gothic One', 'sans-serif'],
      },

      extend: {
        colors: {
            brand: "#14252C",   
            brandLight:"#173D49",    
            accent: "#2199C1",
            accentSecondary: "#95C6F8",
        },
      },
  },
  plugins: []
}

