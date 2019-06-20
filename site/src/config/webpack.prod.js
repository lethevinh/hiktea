const webpack = require('webpack'),
    merge = require('webpack-merge'),
    ExtractTextPlugin = require('extract-text-webpack-plugin'),
    UglifyJsPlugin = require("uglifyjs-webpack-plugin"),
    OptimizeCSSAssetsPlugin = require("optimize-css-assets-webpack-plugin"),
    path = require('path');

const common = require('./webpack.common.js');

module.exports = merge(common, {
    output: {
        filename: 'js/[name].[hash:6].min.js',
        chunkFilename: 'js/[id].[hash:6].min.js',
        path: path.join(__dirname, "../../../docs/"),
    },
    mode: 'production',
    devtool: 'source-map',
    watch: false,
    stats: {
        colors: true,
        hash: true,
        timings: true,
        assets: true,
        chunks: true,
        chunkModules: true,
        modules: true,
        children: true,
        errorDetails: true
    },
    optimization: {
        minimizer: [
            new OptimizeCSSAssetsPlugin({})
        ],
        minimize: true,
        runtimeChunk: false,
    },
    plugins: [
        new ExtractTextPlugin('[name].min.css'),
        new webpack.DefinePlugin({
            'process.env': {
                NODE_ENV: JSON.stringify('production')
            },
        })
    ],
});