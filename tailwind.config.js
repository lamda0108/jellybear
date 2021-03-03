module.exports = {
  purge: [
    './resources/**/*.blade.php',
    './resources/**/*.js',
    './resources/**/*.vue',
  ],
  darkMode: false, // or 'media' or 'class'
  theme: {
    extend: {
      colors: {
      transparent: 'transparent',
      current: 'currentColor',
      blue: {
        default: '#0496ff',
        dark: '#006ba6',
        light: '#43bccd'
      },
      pink: {
        default: '#d81159',
        dark: '#8f2d56',
        light: '#ff206e',
        lighter: '#ff70a6'
        
      },
      yellow: {
        default: '#ffbc42',
        light: '#ffd670'
      },
      orange: {
        default: '#fb5607',
        light: '#ff9770',
        dark: '#af4319'
      },
      brown:{
        light: '#ddb892',
        default: '#733709',
        dark: '#592a05'
      }
      },
      height: {
        mainHeight: 'calc(100vh - 7rem)' ,
      },
      minHeight: {
        '3/4screen': '75vh'
      },
      width: {
        fortyScreen: '40vw',
        seventyScreen: '70vw'
      },
      boxShadow: {
        whiteShadow: '8px 8px 0 rgb(255,255,255)'
      }
    },
  },
  variants: {
    extend: {},
  },
  plugins: [],
}
