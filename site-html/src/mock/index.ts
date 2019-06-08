const Mock = require('mockjs');

var image = {
    'id|+1': 1,
    url: "@IMAGE"
};

var user = {
    'id|+1': 1,
    'email': '@EMAIL',
    'link': '@url()',
    'username': '@FIRST@LAST',
    'fullname': '@FIRST @LAST',
    'regexp3': /\d{5,10}/,
    'avatar': image
};

var galleries = {
    'images|1-10': [image]
};

var branch = {
    'id|+1': 1,
    'name': '@title',
    'link': '',
    'address': '@FISRT @LAST',
    'phone': '@FISRT @LAST',
    'email': '@FISRT @LAST',
    'location': '@FISRT @LAST',
    'thumbnail': '@IMAGE("350x200")',
    'galleries': galleries,
    'description': '@sentence()',
    'content': '@paragraph()'
};

var product = {
    'id|+1': 1,
    'name': '@title(2,4)',
    'price': /\d{2}\.000/,
    'price_discount': /\d{2}\.000/,
    'link': '@url()',
    'description': '',
    'content': '',
    'thumbnail': 'images/product_img2.jpg',
    'galleries': galleries,
    'post': post,
    "status|1": [
        { key: 'bg_green', value: 'Khuyến Mãi' },
        { key: 'bg_red', value: 'Hot' },
        { key: 'bg_orange', value: '-10%' },
        { key: 'bg_orange', value: '-20%' },
        { key: 'bg_orange', value: '-30%' },
    ]
};

var post = {
    'id|+1': 1,
    'title': '@title(3)',
    'link': '@url()',
    'description': '@sentence()',
    'content': '@paragraph()',
    'thumbnail': 'images/blog_img1.jpg',
    'galleries': galleries,
    'createdAt': '@datetime()',
    'updateddAt': '@datetime()',
    'author': user
};
var category = {
    'id|+1': 2,
    'name': '@title(2)',
    'link': '@url()',
    'description': '@sentence()',
    'content': '@paragraph()',
    'thumbnail': '@IMAGE(350x200)',
    'products|5-10': [product]
};
var slide = {
    'id|+1': 2,
    'name': '@title(2)',
    'link': '@url()',
    'description': '@sentence()',
    'content': '@paragraph()',
    'thumbnail': '@IMAGE(350x200)',
    'image': "@image()"
};

//user
Mock.mock(/api\/db\/user/, {
    'list|1-10': [user]
});
Mock.mock(/api\/db\/user\/([1-9]+)/, {
    'data': user
});
// branch
Mock.mock(/api\/db\/branch/, {
    'list|6-16': [branch]
});
Mock.mock(/api\/db\/branch\/([1-9]+)/, {
    'data': branch
});
// Product
Mock.mock(/api\/db\/product/, {
    'list|1-10': [product]
});
Mock.mock(/api\/db\/product\/([1-9]+)/, {
    'data': product
});
Mock.mock(/api\/db\/category\/product/, {
    'list|5-10': [category]
});
// Post
Mock.mock(/api\/db\/post/, {
    'list|5-10': [post]
});
Mock.mock(/api\/db\/post\/([1-9]+)/, {
    'data': post
});
//Galleries
Mock.mock(/api\/db\/gallery/, {
    'data': galleries
});
// Slide
Mock.mock(/api\/db\/slide/, {
    'list|5-10': [slide]
});
// About

Mock.mock(/api\/db\/about/, {
    'data': {
        infor: {
            phone: "+123 456 7890",
            email: "info@yourmail.com",
            address: "123 Street, Old Trafford, NewYork, USA"
        },
        social: {},
        description: "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit massa enim. Nullam id varius nunc id varius nunc.",
        logo: "",
        menu: {},
        menufooter: {

        }
    }
});