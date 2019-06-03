const constants = require('./constants');
const routes = require('../routes/page');

const getTemplatePath = (templateName) => {
  return constants.TEMPLATE_PATH + 'views/' + templateName;
};

const baseConfig = {
  title: constants.SITE_TITLE,
  filename: 'index.html',
  template: getTemplatePath('index'),
  inject: true,
  hash: false,
  cache: true,
  chunks: ['app','vendor'],
  class: ""
};

module.exports = [
    ...routes.map(
        (route) => {
            let md;
            let title;
            title = route.title;
            md = {
                meta: {
                    slug: 'index'
                }
            };
            return {
                ...baseConfig,
                ...route,
                title: `${title.toLowerCase()} | Giasunhantri.net`,
                filename: `${route.slug}.html`,
                template: getTemplatePath(route.template),
                chunks: [...baseConfig.chunks, ...(route.chunks || [])],
                md,
            }
        }
    )
];