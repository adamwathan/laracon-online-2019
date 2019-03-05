const defaultTheme = require('tailwindcss/defaultTheme')()

module.exports = {
  theme: {
    fontFamily: {
      sans: [
        'Barter Exchange',
        ...defaultTheme.fontFamily.sans,
      ]
    },
    colors: {
      white: {
        20: 'rgba(255,255,255,.2)',
        40: 'rgba(255,255,255,.4)',
        60: 'rgba(255,255,255,.6)',
        80: 'rgba(255,255,255,.8)',
        default: '#fff',
      },
      grey: {
        0: '#f8fafc',
        1: '#f1f5f9',
        2: '#dde6ee',
        3: '#aebfcf',
        4: '#8a9fb2',
        5: '#657b8f',
        6: '#475c70',
        7: '#304558',
        8: '#1f3142',
        9: '#11212f',
      },
      yellow: {
        0: '#fdfdf0',
        1: '#fdfade',
        2: '#fcf3c3',
        3: '#fae4a3',
        4: '#f7cf7f',
        5: '#f0b159',
        6: '#e08b36',
        7: '#c96116',
        8: '#a53c07',
        9: '#802203',
      },
      blue: {
        0: '#e0f1fa',
        1: '#b2def7',
        2: '#7fc1ec',
        3: '#58a6de',
        4: '#3d86c1',
        5: '#326fa6',
        6: '#315f8c',
        7: '#2e4f73',
        8: '#29415d',
        9: '#253851',
        'accent': '#aff2ff',
      },
      red: {
        0: '#fff0f0',
        1: '#fec4c4',
        2: '#f69595',
        3: '#ee6a6a',
        4: '#e04242',
        5: '#d12424',
        6: '#b91717',
        7: '#9a1414',
        8: '#7b1717',
        9: '#581818',
      },
      green: {
        0: '#e3feed',
        1: '#b1f3cc',
        2: '#8be7b4',
        3: '#69d69f',
        4: '#4ec18b',
        5: '#399f74',
        6: '#308162',
        7: '#2c6a56',
        8: '#255346',
        9: '#20463d',
      }
    }
  }
}
