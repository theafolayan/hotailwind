// module.exports = {
//     purge: ["./resources/views/**/*.blade.php", "./resources/css/**/*.css"],
//     variants: {},
//     plugins: [
//         require("@tailwindcss/ui"),
//         require("tailwindcss-plugins/pagination")({
//             /* Customizations here... */
//         }),
//     ],
// };

module.exports = {
    purge: ["./resources/views/**/*.blade.php", "./resources/css/**/*.css"],
    darkMode: false, // or 'media' or 'class'
    theme: {
        extend: {},
    },
    variants: {
        extend: {},
    },
    plugins: [require("@tailwindcss/ui"), require("@tailwindcss/forms")],
};
