/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.css",
  ],
  theme: {
    extend: {
      fontFamily: {
        'comforter': ['Comforter'],
        'port':['Pacifico'],
        'glory': ['Gloria Hallelujah'],
        'press': ['Press Start 2P'],
        'rubik': ['Rubik Mono One'],
        'bang': ['Bangers'],
        'bruno': ['Bruno Ace SC'],
        'body': ['Monda'],
        'monot':['Monoton'],
        'cabin': ['Cabin Sketch'],
        'kre':['Kreon'],
        'popy':['Mochiy Pop One'],
        'fuz': ['Fugaz One'],
        'aith':['Athiti'],
        'audio':['Audiowide'],
        'rye':['Bungee Inline'],
        'road':['Turret Road']
      },
    },
  },
  plugins: [],
}
