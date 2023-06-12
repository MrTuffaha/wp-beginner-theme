
import postcssImport from "postcss-import";
import postcssNested from "postcss-nested";
import tailwindcss from "tailwindcss";
import postcssSortMediaQueries from "postcss-sort-media-queries";
import autoprefixer from "autoprefixer";
import cssnano from "cssnano";
import tailwindConfig from "./tailwind.config.js";
import tailwindcssNesting from "@tailwindcss/nesting";

export default [
    postcssImport(),
    tailwindcssNesting(postcssNested),
    tailwindcss(tailwindConfig),
    postcssSortMediaQueries(),
    autoprefixer(),
    // cssnano(),
];