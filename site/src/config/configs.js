var pages = require('./pages');

const HtmlWebpackPlugin = require('html-webpack-plugin');
module.exports = {
    libraries: ['jquery'],
    pages: [
        ...pages.map(p => {
            return new HtmlWebpackPlugin({
                ...p,
                chunks: [...p.chunks, 'reloader']
            });
        }),
    ],
};