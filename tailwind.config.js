import defaultTheme from "tailwindcss/defaultTheme";
import forms from "@tailwindcss/forms";
import { light } from "@fortawesome/fontawesome-svg-core/import.macro";

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/views/**/*.blade.php",
        "./resources/js/**/*.vue",
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ["Figtree", ...defaultTheme.fontFamily.sans],
                hadings: [
                    "Berlin Sans FB Demi",
                    ...defaultTheme.fontFamily.sans,
                ],
            },
            colors: {
                white: "#ffffff",
                blue: "#193266",
                lightBlue: "#93b0ec",
                dark_pink: "#a3293d",
                darkBlue: "#000c24",
                sygBlue: "#99E4FF",
                green: "#BBFF00",
                darkYellow: "#CC6D00",
                yellow: "#FFCC00",
                pink: "#c32f47",
                lightPink: "#e18493",
            },
        },
    },

    plugins: [forms],
};
