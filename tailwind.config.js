module.exports = {
    purge: ["./resources/views/**/*.blade.php", "./resources/css/**/*.css"],
    theme: {
        extend: {},
    },
    variants: {},
    plugins: [
        require("@tailwindcss/ui"),
        require("@tailwindcss/forms"),
        require("tailwindcss-plugins/pagination")({
            /* Customizations here... */
        }),
    ],
};
