module.export = (ctx) => ({
    map: ctx.option.map,
    plugins:[
        require("postcss-imports"),
        require("postcss-nested"),
        require("postcss-mixins"),
        require("postcss-simple-vars"),
        require("postcss-preset-env"),
        require("postcss-discard-comments"),
        require("autoprefixer"),
    ],
});