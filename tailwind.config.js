module.exports = {
  mode: 'jit',
  purge: [
    "**/*.html"
  ],
  darkMode: false, // or 'media' or 'class'
  theme: {
    screens:{
      sm: '420px',
      md: '768px',
      lg: '1170px',
      xl: '1440px',
    },
  },
  variants: {
    extend: {},
  },
  plugins: [],
}
