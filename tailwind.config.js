/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ['index.html'],
  theme: {
    container:{
      center:true,
      padding:'25px',
    },
    extend: {
      colors:{
        primary:'#EF5B38',
        state:'#FF8366',
        dark:'#393D4E',
        secondary:'#677487',
      },
      zIndex: {
        '9999': 9999,
      },
      screens:{
        '2xl':'1536px',
      },
      fontFamily: {
        sans: ['Montserrat', 'sans-serif'],
      }
      
    },
  },
  plugins: [],
}

