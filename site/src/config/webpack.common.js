const path = require('path'),
    webpack = require('webpack'),
    _ = require('lodash'),
    UglifyJsPlugin = require("uglifyjs-webpack-plugin"),
    OptimizeCSSAssetsPlugin = require("optimize-css-assets-webpack-plugin"),
    CopyWebpackPlugin = require('copy-webpack-plugin'),
    ExtractTextPlugin = require('extract-text-webpack-plugin'),
    CleanWebpackPlugin = require("clean-webpack-plugin"),
    WriteFilePlugin = require("write-file-webpack-plugin"),
    VueLoaderPlugin = require('vue-loader/lib/plugin');

var configs = require('./configs');
var package = require('../../package.json');

// Copy file
const copyFiles = new CopyWebpackPlugin([
    { from: 'src/assets/js', to: 'js' },
    { from: 'src/assets/images', to: 'images' },
    { from: 'src/assets/fonts', to: 'fonts' }
]);

// Css plugin


// Plugins
var plugins = _.concat([
    new CleanWebpackPlugin(),
    new webpack.ProvidePlugin({
        $: 'jquery',
        jQuery: 'jquery',
        'window.jQuery': 'jquery',
        'window.objectFitPolyfill': 'objectFitPolyfill',
    }),
    copyFiles,
    new WriteFilePlugin(),
    new VueLoaderPlugin(),
], configs.pages);

module.exports = {
    output: {
        filename: '[name].min.js',
        path: path.join(__dirname, "../../dist/"),
    },
    entry: {
        'vendor': configs.libraries,
        'app': './src/main.ts',
    },
    resolve: {
        alias: {
            'vue$': 'vue/dist/vue.esm.js'
        },
        extensions: ['*', '.vue', '.tsx', '.ts', '.js', ".scss", '.pug', '.css'],
    },
    module: {
        rules: [
            { test: /\.vue$/, loader: "vue-loader" },
            {
                test: /\.ts$/,
                loader: "ts-loader",
                options: { appendTsSuffixTo: [/\.vue$/] }
            }, {
                test: /\.html$/,
                loader: 'html-loader'
            },
            {
                test: /\.(sa|sc|c)ss$/,
                use: ExtractTextPlugin.extract({
                    fallback: 'style-loader',
                    use: ['css-loader', 'sass-loader']
                })
            },

            {
                test: /\.(png|jpe?g|gif|ico)$/,
                use: [{
                        loader: 'file-loader',
                        options: {
                            name: 'images/[name].[ext]',
                        }
                    },
                    {
                        loader: 'image-webpack-loader',
                        options: {
                            mozjpeg: {
                                progressive: true,
                                quality: 65
                            },
                            // optipng.enabled: false will disable optipng
                            optipng: {
                                enabled: false,
                            },
                            pngquant: {
                                quality: '65-90',
                                speed: 4
                            },
                            gifsicle: {
                                interlaced: false,
                            },
                            // the webp option will enable WEBP
                            webp: {
                                quality: 75
                            }
                        }
                    },
                ]

            },
            {
                test: /.(ttf|otf|eot|svg|woff(2)?)(\?[a-z0-9]+)?$/,
                use: [{
                    loader: 'file-loader',
                    options: {
                        name: 'fonts/[name].[ext]'
                    }
                }]
            },
            { test: /\.pug$/, loader: 'pug-loader' }
        ]
    },
    plugins: plugins
};