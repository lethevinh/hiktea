var pages = require('./pages');

const HtmlWebpackPlugin = require('html-webpack-plugin');
module.exports = {
    libraries: ['jquery', 'bootstrap', 'shufflejs', 'lity', 'slick-carousel'],
    pages: [
        ...pages.map(p => {
            return new HtmlWebpackPlugin({
                ...p,
                chunks: [...p.chunks, 'reloader']
            });
        }),
    ],
};