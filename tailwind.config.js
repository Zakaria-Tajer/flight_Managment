module.exports = {
  content: ["./views/**/*.{html,js,php}",
            "./public/**/*.js"],
  theme: {
    extend: {
      fontFamily: {
        "poppins": 'Poppins',
        "openSans": 'Open Sans',
        "Nato": 'Noto Sans',
      },

    },
    screens: {
      'sm': '425px',
      // => @media (min-width: 640px) { ... }

      'md': '768px',
      // => @media (min-width: 768px) { ... }

      'lg': '1024px',
      // => @media (min-width: 1024px) { ... }

      'xl': '1280px',
      // => @media (min-width: 1280px) { ... }

      '2xl': '1536px',
      // => @media (min-width: 1536px) { ... }

      '3xl': '1920px',
      // => @media (min-width: 1920px) { ... }

    },
  },
  plugins: [],
}
