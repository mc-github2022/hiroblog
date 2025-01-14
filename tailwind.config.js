/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./**/*.{html,js,php}"],
  theme: {
    fontFamily: {
      playlistScript: "Playlist-Script",
      crimson: "Crimson Pro",
    },
    extend: {
      colors: {
        primary: "#0268A8",
        secondary: "#F7F2ED",
        light: "#ffffff",
        dark: "#2b2b2b",
      },
    },
  },
  plugins: [],
};
