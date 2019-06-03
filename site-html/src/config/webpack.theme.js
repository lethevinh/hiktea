const merge = require('webpack-merge'),
    common = require('./webpack.common.js'),
   ExtractTextPlugin = require('extract-text-webpack-plugin'),
    path = require("path");

const HtmlBeautifyPlugin = require('html-beautify-webpack-plugin');

const extractAppStyle = new ExtractTextPlugin({
    filename: "css/app.css"
});

module.exports = merge(common, {
    devtool: 'inline-source-map',
    mode: 'development',
    output: {
        filename: 'js/[name].min.js',
        path: path.join(__dirname, "../../../theme/"),
        libraryTarget: 'umd',
        umdNamedDefine: true,
    },
    plugins: [
        new HtmlBeautifyPlugin({
            config: {
                html: {
                    end_with_newline: true,
                    indent_size: 2,
                    indent_with_tabs: true,
                    indent_inner_html: true,
                    preserve_newlines: true,
                    unformatted: ['p', 'i', 'b', 'span']
                }
            },
            replace: [' type="text/javascript"']
        }),
        extractAppStyle
    ]
});