
/** @type {import('tailwindcss').Config} */
export default {
  content: [
    './resources/views/**/*.blade.php',
  ], 
  theme: {
    data: {
      checked: 'ui~="checked"',
    },
    fontSize: {
      sm: '0.8rem',
      base: '1rem',
      xl: '1.25rem',
      '2xl': '1.563rem',
      '3xl': '1.953rem',
      '4xl': '2.441rem',
      '5xl': '3.052rem',
      '6xl' : '76px',
      '7xl' : '96px',
      '8xl' : '100px',
      '9xl' : '150px',
    },
    extend: {
      colors: {
        'lightB': '#D0D6F9',
        'darkB': '#0B0D17',
      },
    },
    fontFamily: {
      'bellefair': ["Bellefair"],
      'barlow':["Barlow"],
      'barlowC':["Barlow Condensed"],
    },
    screens: {

      'xs': '300px',
    // => @media (min-width: 300px) { ... }

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
