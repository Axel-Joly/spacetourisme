
/** @type {import('tailwindcss').Config} */
export default {
  content: [
    './resources/views/**/*.blade.php',
  ], 
  theme: {
    data: {
      checked: 'ui~="checked"',
    },
    extend: {
      colors: {
        'light-blue': '#D0D6F9',
        'dark-blue': '#0B0D17',
      },
      
    },
    fontFamily: {
      'bellefair': ["Bellefair"],
      'barlow' :["Barlow Condensed"],
    },
    screens: {
    'sm': '540px',
    // => @media (min-width: 540px) { ... }

    'md': '800px',
    // => @media (min-width: 800px) { ... }

    'lg': '1100px',
    // => @media (min-width: 1100px) { ... }

    'xl': '1422px',
    // => @media (min-width: 1422px) { ... }

    '2xl': '1536px',
    // => @media (min-width: 1536px) { ... }
    },
    backgroundImage: {
      'index1': "url(../../public/img/Background.png);",
      'index2': "url(../../public/img/Background2.png);",
      'crew': "url(../../public/img/bgcrew.png);",
      'desti': "url(../../public/img/bgdesti.png);",
      'tech': "url(../../public/img/bgtech.png);",
    }
  }
  
};
