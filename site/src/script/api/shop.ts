/**
 * Mocking client-server processing
 */
const _products = [
    {"id": 1, "title": "iPad 4 Mini", "price": 500.01, "inventory": 2},
    {"id": 2, "title": "H&M T-Shirt White", "price": 10.99, "inventory": 10},
    {"id": 3, "title": "Charli XCX - Sucker CD", "price": 19.99, "inventory": 5}
];
import request from './request';

export default {
    async getProducts (callback) {
        var categories = await request.get('/api/db/category/product/');
        var products = [];
        await categories.data.list.forEach(function (category) {
            products.push(...category.products)
        });
        callback(products)
    },
    buyProducts (products, cb, errorCb) {
        setTimeout(() => {
            // simulate random checkout failure.
            (Math.random() > 0.5 || navigator.userAgent.indexOf('PhantomJS') > -1)
                ? cb()
                : errorCb()
        }, 100)
    }
}