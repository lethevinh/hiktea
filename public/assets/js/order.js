$(document).ready(async function () {
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
    let orderItemObject = {
        "quantity": 0,
        "extra": [],
        "options": [],
        "product_name": "",
        "product_id": 0,
        "price": 0,
        "total": 0,
        "note": ''
    };
    let orderObject = {
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
        cart = cart !== null ? JSON.parse(cart) : orderObject;
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
                    item.quantity = parseInt(item.quantity) + parseInt(product.quantity);
                    item.total = parseFloat(item.subtotal) * parseInt(item.quantity);
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
    function getProductId(el) {
        let parentProduct = $(el).parents('.row.product');
        let elProduct = parentProduct.find('.btn-plus.add-to-cart');
        if (elProduct.length > 0) {
            return $(elProduct[0]).data('product');
        }
        return null;
    }

    async function updatePriceCartProduct(el, isAddCart = false){
        let orderItem = orderItemObject;
        let product = getProductId(el);
        let elProduct = $('#product' + product.id);
        let qty = $('#product' + product.id + ' .form_cart-qty').val();
        let totalOption = 0;
        orderItem.options = [];
        elProduct.find('.ip-option:checked').each(function () {
            let option  = $(this).data('option');
            orderItem.options.push({
                title: option.title,
                price: option.price,
                id: option.id,
            });
            totalOption += parseFloat(option.price);
        });
        let subtotal = (parseFloat(product.price) + totalOption);
        let total = subtotal * parseInt(qty);
        orderItem.id = product.id;
        orderItem.product_id = product.id;
        orderItem.product_name = product.title;
        orderItem.quantity = parseInt(qty);
        orderItem.price = product.price;
        orderItem.total = total;
        orderItem.subtotal = subtotal;
        orderItem.note = elProduct.find('textarea').val();
        elProduct.find(' .form_cart-total').html(currency(total))
        if (isAddCart){
           await addToCart(orderItem);
           await updateViewCart();
           $('.modal.show').modal('hide');
        }
    }

    async function updateViewCart() {
        let cart = await getCart();
        let htmlCartItem = '';

        if (cart.items.length === 0){
            return ;
        }
        let elCart = $('.stickySidebar.cart');
        cart.items.forEach(function (item) {
            let textOption = '';
            if (item.options.length > 0) {
                textOption = '- ';
                item.options.forEach(function (option, i) {
                    textOption += ' ' + option.title;
                    if (i < item.options.length - 1) {
                        textOption += ', ';
                    }
                });
            }
            if (item.note) {
                if (textOption){
                    textOption += '<br>';
                }
                textOption +='- ' + item.note
            }
            htmlCartItem += '<div class="item">';
            htmlCartItem += '<div class="title"><span class="ti-plus"></span><span>'+ item.quantity +'</span><span class="ti-trash"></span>' + item.product_name + '</div>';
            htmlCartItem += '<div class="description">' + textOption + '</div>';
            htmlCartItem += '<div class="price">' + currency(item.total) + ' </div>';
            htmlCartItem += '</div>';
        });
        elCart.find('.cart_sidebar').html(htmlCartItem);
        let elSubTotal = elCart.find('.subtotal-price span:nth-child(2)');
        let elTotal = elCart.find('.total-price span:nth-child(2)');
        console.log(elSubTotal, elTotal,  cart.total)
        elSubTotal.html(currency(cart.total));
        elTotal.html(currency(cart.total));
    }
    await updateViewCart();

    $('.list-order-product .product .modal .add-cart').click(function () {
        updatePriceCartProduct(this, true);
    });

    $('.list-order-product .product .modal .quantity input.btn-qty').click(function () {
        updatePriceCartProduct(this);
    });

    $('.list-order-product .product .modal .ip-option').click(function () {
        updatePriceCartProduct(this);
    });
    $(".stickySidebar.cart .item .ti-trash").on("click", function(){
        alert("clicked");
    });
    $(".stickySidebar.cart .item .ti-plus").on("click", function(){
        alert("clicked");
    });
});
