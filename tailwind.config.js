const colors = require("tailwindcss/colors");
module.exports = {
    purge: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    darkMode: false, // or 'media' or 'class'
    theme: {
        extend: {},
        colors: {
            transparent: "transparent",
            current: "currentColor",
            gray: colors.gray,
            red: colors.red,
            blue: colors.lightBlue,
            yellow: colors.amber,
            orange: colors.orange,
            white: colors.white,
        },
    },
    variants: {
        extend: {},
    },
    plugins: [],
};
