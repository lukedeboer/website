module.exports = {
  purge: [
    'source/**/*.blade.php',
    'source/**/*.md',
    'source/**/*.html',
  ],
  theme: {
    fontFamily:{
      'sans': ['Resist'],
      'serif': ['Concretica'],
      'mono': ['Roboto']



    },
    

    screens: {
      'mobile': '375px',
      'xs': '376px',
      'sm': '640px',
      // => @media (min-width: 640px) { ... }

      'md': '768px',
      // => @media (min-width: 768px) { ... }

      'lg': '1024px',
      // => @media (min-width: 1024px) { ... }

      'xl': '1280px',
      // => @media (min-width: 1280px) { ... }

      '2xl': '1536px',
      // => @media (min-width: 1536px) { ... }
    },


    extend: {
      spacing: {
        '22': '6rem',
        '128':'32rem',
        '144':'36rem',
        '146':'38rem',
        '156':'42rem',
        '160':'41rem',
        
        '166':'44rem',
        '190':'46rem',
        '200':'50rem',
        '210':'60rem',
        '220':'70rem'

      },
      fontSize: {
        '10xl': '10rem'

      }
      

    },
  },
  variants: {
    extend: {},
  },
  plugins: [],
}
