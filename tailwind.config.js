/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/css/app.css",
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      keyframes: {
        spinOnce: {
          '0%': { transform: 'rotate(0deg)', opacity: 0 },
          '100%': { transform: 'rotate(360deg)', opacity: 1 },
        },
        'fade-animation': {
          '0%': {transform: 'translateY(25px)', visibility: 'hidden', opacity: 0},
          '100%': {transform: 'translateY(0px)', visibility: 'visible', opacity: 1}
        }
      },
      animation: {
        spinOnce: 'spinOnce 0.5s ease-out forwards',
        'fade-section': 'fade-animation 0.5s linear 1 forwards',
      }
    },
  },
  plugins: [
    function ({ addUtilities }) {
      addUtilities({
        '.animation-delay-500': {
          'animation-delay': '0.5s',
        },
        '.animation-delay-1000': {
          'animation-delay': '1s',
        },
        '.animation-delay-1500': {
          'animation-delay': '1.5s',
        },
        '.animation-delay-2000': {
          'animation-delay': '2s',
        },
      })
    },
  ],
}

