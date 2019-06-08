var Mock = require('mockjs');
var image = {
    'id|+1': 1,
    url: "@IMAGE"
};
var user = {
    'id|+1': 1,
    'email': '@EMAIL',
    'fullname': '@FISRT @LAST',
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
    'name': '@EMAIL',
    'price': '',
    'price_discount': '',
    'description': '',
    'content': '',
    'thumbnail': image,
    'galleries': galleries,
    'post': post
};
var post = {
    'id|+1': 1,
    'title': '@EMAIL',
    'description': '',
    'content': '',
    'thumbnail': image,
    'galleries': galleries
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
// Post
Mock.mock(/api\/db\/post/, {
    'list|1-10': [post]
});
Mock.mock(/api\/db\/post\/([1-9]+)/, {
    'data': post
});
//Galleries
Mock.mock(/api\/db\/gallery/, {
    'data': galleries
});
//# sourceMappingURL=index.js.map