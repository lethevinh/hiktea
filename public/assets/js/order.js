$(document).ready(function () {
    let customer = {
        "name": "",
        "phone": ""
    };
    let deliveryAddress = {
        "address": {
            "lat": 0,
            "lng": 0,
            "street": ""
        },
        "name": "",
        "phone": ""
    };
    let orderItem = {
        "quantity": 0,
        "extra": [],
        "options": [],
        "product_name": "",
        "product_id": 0,
        "price": 0
    };
    let order = {
        "src": "HIK-WEB",
        "customer": customer,
        "deliveryAddress": deliveryAddress,
        "note": null,
        "items": [],
        "payment": [
            {
                "text": "Thanh toán khi giao hàng",
                "method": "COD",
                "key": "COD",
                "image": "icon.cash",
                "default": true
            }
        ],
        "coupon_code": null,
        "shop": null,
        "phone_confirm": null,
        "adjustment": [],
        "subtotal": 0,
        "quantity": 0,
        "discount": 0,
        "total": 0,
        "message": "",
        "ship": 0
    };
    const CONST_KEY_CART = '_shop_cart';

    function currency(value) {
        const formatter = new Intl.NumberFormat('vi-VN', {
            style: 'currency',
            currency: 'VND',
            minimumFractionDigits: 0
        });
        return formatter.format(value);
    }

    async function getCart() {
        let cart = await localStorage.getItem(CONST_KEY_CART);
        cart = cart !== null ? JSON.parse(cart) : {items: [], count: 0, total: 0};
        return cart;
    }

    async function updateCart(cart) {
        await localStorage.setItem(CONST_KEY_CART, JSON.stringify(cart));
    }

    async function removeCart(id) {
        let cart = await getCart();
        cart.items = cart.items.filter(item => item.id !== id);
        cart.count = cart.items.length;
        cart.total = cart.items.reduce((pre, item) => pre + parseFloat(item.total), 0);
        await updateCart(cart);
    }

    async function addToCart(product) {
        let cart = await getCart();
        let items = cart.items;
        let item = items.find(item => item.id === product.id);
        if (item) {
            items = items.map((item) => {
                if (item.id === product.id) {
                    item.qty = parseInt(item.qty) + parseInt(product.qty);
                    item.total = parseFloat(item.price) * parseInt(item.qty);
                }
                return item;
            })
        } else {
            items.push(product);
        }
        //
        cart = {
            items,
            count: items.length,
            total: cart.items.reduce((pre, item) => pre + parseFloat(item.total), 0)
        };
        await localStorage.setItem(CONST_KEY_CART, JSON.stringify(cart));
    }

    async function updateToCart(product) {
        let cart = await getCart();
        cart.items = cart.items.map(item => {
            if (item.id === product.id) {
                item = product;
            }
            return item;
        });
        cart = {
            items: cart.items,
            count: cart.items.length,
            total: cart.items.reduce((pre, item) => pre + parseFloat(item.total), 0)
        };
        await updateCart(cart);
    }
    $('.add-to-cart').click(function () {
        console.log($(this).data('product'))
    });
    console.log(order)
});
