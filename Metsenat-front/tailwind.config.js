/** @type {import('tailwindcss').Config} */
export default {
    content: [
    "./index.html",
    "./src/**/*.{vue,js,ts,jsx,tsx}",
  ],
  theme: {
    extend: {
      colors:{
        blue: '#3366FF',
        white:'#F5F5F7;',
        lightWhite:'rgba(0, 0, 0, 0.50)',
        green:'rgb(0, 174, 105)'
      },
      screens:{
        xs:'480px',
        ss:'620px',
        sm:'768px',
        md:'1060px',
        lg:'1200px',
        xl:'17000px',
      }
    },
  },  
  plugins: [],
}

