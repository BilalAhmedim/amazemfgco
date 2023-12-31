module.exports = (ctx) => ({
    map: ctx.options.map,
    plugins: [
        require("postcss-import"),
        require("postcss-nested"),
        require("postcss-mixins"),
        require("postcss-simple-vars"),
        require("postcss-preset-env"),
        require("postcss-discard-comments"),
        require("autoprefixer"),
    ],
});