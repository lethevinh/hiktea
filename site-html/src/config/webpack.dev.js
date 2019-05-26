const merge = require('webpack-merge'),
    common = require('./webpack.common.js'),
    path = require("path"),
    ExtractTextPlugin = require('extract-text-webpack-plugin');
const port = process.env.NODE_PORT ? process.env.NODE_PORT : '8080';

module.exports = merge(common, {
    devtool: 'source-map',
    mode: 'development',
    output: {
        filename: 'js/[name].min.js',
        chunkFilename: 'js/[name].min.js',
        path: path.join(__dirname, "../../dist/"),
        publicPath: 'http://localhost:' + port + '/',
        libraryTarget: 'umd',
        umdNamedDefine: true,
    },
    devServer: {
        contentBase: path.join(__dirname, "../../dist/"),
        port: port,
        hot: true,
        open: false
    },
    watch: true,
    plugins: [
        new ExtractTextPlugin("css/[name].min.css")
    ]
});