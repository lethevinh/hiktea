<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class srcDevDebugProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = $allowSchemes = array();
        if ($ret = $this->doMatch($pathinfo, $allow, $allowSchemes)) {
            return $ret;
        }
        if ($allow) {
            throw new MethodNotAllowedException(array_keys($allow));
        }
        if (!in_array($this->context->getMethod(), array('HEAD', 'GET'), true)) {
            // no-op
        } elseif ($allowSchemes) {
            redirect_scheme:
            $scheme = $this->context->getScheme();
            $this->context->setScheme(key($allowSchemes));
            try {
                if ($ret = $this->doMatch($pathinfo)) {
                    return $this->redirect($pathinfo, $ret['_route'], $this->context->getScheme()) + $ret;
                }
            } finally {
                $this->context->setScheme($scheme);
            }
        } elseif ('/' !== $pathinfo) {
            $pathinfo = '/' !== $pathinfo[-1] ? $pathinfo.'/' : substr($pathinfo, 0, -1);
            if ($ret = $this->doMatch($pathinfo, $allow, $allowSchemes)) {
                return $this->redirect($pathinfo, $ret['_route']) + $ret;
            }
            if ($allowSchemes) {
                goto redirect_scheme;
            }
        }

        throw new ResourceNotFoundException();
    }

    private function doMatch(string $rawPathinfo, array &$allow = array(), array &$allowSchemes = array()): ?array
    {
        $allow = $allowSchemes = array();
        $pathinfo = rawurldecode($rawPathinfo);
        $context = $this->context;
        $requestMethod = $canonicalMethod = $context->getMethod();

        if ('HEAD' === $requestMethod) {
            $canonicalMethod = 'GET';
        }

        switch ($pathinfo) {
            default:
                $routes = array(
                    '/_profiler/' => array(array('_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'), null, null, null),
                    '/_profiler/search' => array(array('_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'), null, null, null),
                    '/_profiler/search_bar' => array(array('_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'), null, null, null),
                    '/_profiler/phpinfo' => array(array('_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'), null, null, null),
                    '/_profiler/open' => array(array('_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'), null, null, null),
                    '/login/check' => array(array('_route' => 'api_login_check'), null, null, null),
                    '/docs' => array(array('_route' => 'swagger_ui', '_controller' => 'api_platform.swagger.action.ui'), null, null, null),
                );

                if (!isset($routes[$pathinfo])) {
                    break;
                }
                list($ret, $requiredHost, $requiredMethods, $requiredSchemes) = $routes[$pathinfo];

                $hasRequiredScheme = !$requiredSchemes || isset($requiredSchemes[$context->getScheme()]);
                if ($requiredMethods && !isset($requiredMethods[$canonicalMethod]) && !isset($requiredMethods[$requestMethod])) {
                    if ($hasRequiredScheme) {
                        $allow += $requiredMethods;
                    }
                    break;
                }
                if (!$hasRequiredScheme) {
                    $allowSchemes += $requiredSchemes;
                    break;
                }

                return $ret;
        }

        $matchedPathinfo = $pathinfo;
        $regexList = array(
            0 => '{^(?'
                    .'|/api(?'
                        .'|(?:/(index)(?:\\.([^/]++))?)?(*:42)'
                        .'|/(?'
                            .'|docs(?:\\.([^/]++))?(*:72)'
                            .'|c(?'
                                .'|ontexts/(.+)(?:\\.([^/]++))?(*:110)'
                                .'|rops(?'
                                    .'|(?:\\.([^/]++))?(?'
                                        .'|(*:143)'
                                    .')'
                                    .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                        .'|(*:181)'
                                    .')'
                                .')'
                                .'|ustomers(?'
                                    .'|(?:\\.([^/]++))?(?'
                                        .'|(*:220)'
                                    .')'
                                    .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                        .'|(*:258)'
                                    .')'
                                .')'
                            .')'
                            .'|assignments(?'
                                .'|(?:\\.([^/]++))?(?'
                                    .'|(*:301)'
                                .')'
                                .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                    .'|(*:339)'
                                .')'
                            .')'
                            .'|farms(?'
                                .'|(?:\\.([^/]++))?(?'
                                    .'|(*:375)'
                                .')'
                                .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                    .'|(*:413)'
                                .')'
                            .')'
                            .'|greenhouses(?'
                                .'|(?:\\.([^/]++))?(?'
                                    .'|(*:455)'
                                .')'
                                .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                    .'|(*:493)'
                                .')'
                            .')'
                            .'|harvests(?'
                                .'|(?:\\.([^/]++))?(?'
                                    .'|(*:532)'
                                .')'
                                .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                    .'|(*:570)'
                                .')'
                            .')'
                            .'|order(?'
                                .'|s(?'
                                    .'|(?:\\.([^/]++))?(?'
                                        .'|(*:610)'
                                    .')'
                                    .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                        .'|(*:648)'
                                    .')'
                                .')'
                                .'|_items(?'
                                    .'|(?:\\.([^/]++))?(?'
                                        .'|(*:685)'
                                    .')'
                                    .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                        .'|(*:723)'
                                    .')'
                                .')'
                            .')'
                            .'|p(?'
                                .'|hases(?'
                                    .'|(?:\\.([^/]++))?(?'
                                        .'|(*:764)'
                                    .')'
                                    .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                        .'|(*:802)'
                                    .')'
                                .')'
                                .'|ollinates(?'
                                    .'|(?:\\.([^/]++))?(?'
                                        .'|(*:842)'
                                    .')'
                                    .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                        .'|(*:880)'
                                    .')'
                                .')'
                                .'|rogressions(?'
                                    .'|(?:\\.([^/]++))?(?'
                                        .'|(*:922)'
                                    .')'
                                    .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                        .'|(*:960)'
                                    .')'
                                .')'
                            .')'
                            .'|s(?'
                                .'|heets(?'
                                    .'|(?:\\.([^/]++))?(?'
                                        .'|(*:1001)'
                                    .')'
                                    .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                        .'|(*:1040)'
                                    .')'
                                .')'
                                .'|owings(?'
                                    .'|(?:\\.([^/]++))?(?'
                                        .'|(*:1078)'
                                    .')'
                                    .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                        .'|(*:1117)'
                                    .')'
                                .')'
                            .')'
                            .'|transplants(?'
                                .'|(?:\\.([^/]++))?(?'
                                    .'|(*:1161)'
                                .')'
                                .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                    .'|(*:1200)'
                                .')'
                            .')'
                            .'|u(?'
                                .'|nits(?'
                                    .'|(?:\\.([^/]++))?(?'
                                        .'|(*:1240)'
                                    .')'
                                    .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                        .'|(*:1279)'
                                    .')'
                                .')'
                                .'|sers(?'
                                    .'|(?:\\.([^/]++))?(?'
                                        .'|(*:1315)'
                                    .')'
                                    .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                        .'|(*:1354)'
                                    .')'
                                .')'
                            .')'
                            .'|varieties(?'
                                .'|(?:\\.([^/]++))?(?'
                                    .'|(*:1396)'
                                .')'
                                .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                    .'|(*:1435)'
                                .')'
                            .')'
                        .')'
                    .')'
                    .'|/_(?'
                        .'|error/(\\d+)(?:\\.([^/]++))?(*:1479)'
                        .'|wdt/([^/]++)(*:1500)'
                        .'|profiler/([^/]++)(?'
                            .'|/(?'
                                .'|search/results(*:1547)'
                                .'|router(*:1562)'
                                .'|exception(?'
                                    .'|(*:1583)'
                                    .'|\\.css(*:1597)'
                                .')'
                            .')'
                            .'|(*:1608)'
                        .')'
                    .')'
                .')$}sD',
        );

        foreach ($regexList as $offset => $regex) {
            while (preg_match($regex, $matchedPathinfo, $matches)) {
                switch ($m = (int) $matches['MARK']) {
                    case 143:
                        $matches = array('_format' => $matches[1] ?? null);

                        // api_crops_get_collection
                        $ret = $this->mergeDefaults(array('_route' => 'api_crops_get_collection') + $matches, array('_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Crop', '_api_collection_operation_name' => 'get'));
                        if (!isset(($a = array('GET' => 0))[$canonicalMethod])) {
                            $allow += $a;
                            goto not_api_crops_get_collection;
                        }

                        return $ret;
                        not_api_crops_get_collection:

                        // api_crops_post_collection
                        $ret = $this->mergeDefaults(array('_route' => 'api_crops_post_collection') + $matches, array('_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Crop', '_api_collection_operation_name' => 'post'));
                        if (!isset(($a = array('POST' => 0))[$requestMethod])) {
                            $allow += $a;
                            goto not_api_crops_post_collection;
                        }

                        return $ret;
                        not_api_crops_post_collection:

                        break;
                    case 181:
                        $matches = array('id' => $matches[1] ?? null, '_format' => $matches[2] ?? null);

                        // api_crops_get_item
                        $ret = $this->mergeDefaults(array('_route' => 'api_crops_get_item') + $matches, array('_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Crop', '_api_item_operation_name' => 'get'));
                        if (!isset(($a = array('GET' => 0))[$canonicalMethod])) {
                            $allow += $a;
                            goto not_api_crops_get_item;
                        }

                        return $ret;
                        not_api_crops_get_item:

                        // api_crops_delete_item
                        $ret = $this->mergeDefaults(array('_route' => 'api_crops_delete_item') + $matches, array('_controller' => 'api_platform.action.delete_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Crop', '_api_item_operation_name' => 'delete'));
                        if (!isset(($a = array('DELETE' => 0))[$requestMethod])) {
                            $allow += $a;
                            goto not_api_crops_delete_item;
                        }

                        return $ret;
                        not_api_crops_delete_item:

                        // api_crops_put_item
                        $ret = $this->mergeDefaults(array('_route' => 'api_crops_put_item') + $matches, array('_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Crop', '_api_item_operation_name' => 'put'));
                        if (!isset(($a = array('PUT' => 0))[$requestMethod])) {
                            $allow += $a;
                            goto not_api_crops_put_item;
                        }

                        return $ret;
                        not_api_crops_put_item:

                        break;
                    case 220:
                        $matches = array('_format' => $matches[1] ?? null);

                        // api_customers_get_collection
                        $ret = $this->mergeDefaults(array('_route' => 'api_customers_get_collection') + $matches, array('_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Customer', '_api_collection_operation_name' => 'get'));
                        if (!isset(($a = array('GET' => 0))[$canonicalMethod])) {
                            $allow += $a;
                            goto not_api_customers_get_collection;
                        }

                        return $ret;
                        not_api_customers_get_collection:

                        // api_customers_post_collection
                        $ret = $this->mergeDefaults(array('_route' => 'api_customers_post_collection') + $matches, array('_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Customer', '_api_collection_operation_name' => 'post'));
                        if (!isset(($a = array('POST' => 0))[$requestMethod])) {
                            $allow += $a;
                            goto not_api_customers_post_collection;
                        }

                        return $ret;
                        not_api_customers_post_collection:

                        break;
                    case 258:
                        $matches = array('id' => $matches[1] ?? null, '_format' => $matches[2] ?? null);

                        // api_customers_get_item
                        $ret = $this->mergeDefaults(array('_route' => 'api_customers_get_item') + $matches, array('_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Customer', '_api_item_operation_name' => 'get'));
                        if (!isset(($a = array('GET' => 0))[$canonicalMethod])) {
                            $allow += $a;
                            goto not_api_customers_get_item;
                        }

                        return $ret;
                        not_api_customers_get_item:

                        // api_customers_delete_item
                        $ret = $this->mergeDefaults(array('_route' => 'api_customers_delete_item') + $matches, array('_controller' => 'api_platform.action.delete_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Customer', '_api_item_operation_name' => 'delete'));
                        if (!isset(($a = array('DELETE' => 0))[$requestMethod])) {
                            $allow += $a;
                            goto not_api_customers_delete_item;
                        }

                        return $ret;
                        not_api_customers_delete_item:

                        // api_customers_put_item
                        $ret = $this->mergeDefaults(array('_route' => 'api_customers_put_item') + $matches, array('_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Customer', '_api_item_operation_name' => 'put'));
                        if (!isset(($a = array('PUT' => 0))[$requestMethod])) {
                            $allow += $a;
                            goto not_api_customers_put_item;
                        }

                        return $ret;
                        not_api_customers_put_item:

                        break;
                    case 301:
                        $matches = array('_format' => $matches[1] ?? null);

                        // api_assignments_get_collection
                        $ret = $this->mergeDefaults(array('_route' => 'api_assignments_get_collection') + $matches, array('_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Assignment', '_api_collection_operation_name' => 'get'));
                        if (!isset(($a = array('GET' => 0))[$canonicalMethod])) {
                            $allow += $a;
                            goto not_api_assignments_get_collection;
                        }

                        return $ret;
                        not_api_assignments_get_collection:

                        // api_assignments_post_collection
                        $ret = $this->mergeDefaults(array('_route' => 'api_assignments_post_collection') + $matches, array('_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Assignment', '_api_collection_operation_name' => 'post'));
                        if (!isset(($a = array('POST' => 0))[$requestMethod])) {
                            $allow += $a;
                            goto not_api_assignments_post_collection;
                        }

                        return $ret;
                        not_api_assignments_post_collection:

                        break;
                    case 339:
                        $matches = array('id' => $matches[1] ?? null, '_format' => $matches[2] ?? null);

                        // api_assignments_get_item
                        $ret = $this->mergeDefaults(array('_route' => 'api_assignments_get_item') + $matches, array('_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Assignment', '_api_item_operation_name' => 'get'));
                        if (!isset(($a = array('GET' => 0))[$canonicalMethod])) {
                            $allow += $a;
                            goto not_api_assignments_get_item;
                        }

                        return $ret;
                        not_api_assignments_get_item:

                        // api_assignments_delete_item
                        $ret = $this->mergeDefaults(array('_route' => 'api_assignments_delete_item') + $matches, array('_controller' => 'api_platform.action.delete_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Assignment', '_api_item_operation_name' => 'delete'));
                        if (!isset(($a = array('DELETE' => 0))[$requestMethod])) {
                            $allow += $a;
                            goto not_api_assignments_delete_item;
                        }

                        return $ret;
                        not_api_assignments_delete_item:

                        // api_assignments_put_item
                        $ret = $this->mergeDefaults(array('_route' => 'api_assignments_put_item') + $matches, array('_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Assignment', '_api_item_operation_name' => 'put'));
                        if (!isset(($a = array('PUT' => 0))[$requestMethod])) {
                            $allow += $a;
                            goto not_api_assignments_put_item;
                        }

                        return $ret;
                        not_api_assignments_put_item:

                        break;
                    case 375:
                        $matches = array('_format' => $matches[1] ?? null);

                        // api_farms_get_collection
                        $ret = $this->mergeDefaults(array('_route' => 'api_farms_get_collection') + $matches, array('_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Farm', '_api_collection_operation_name' => 'get'));
                        if (!isset(($a = array('GET' => 0))[$canonicalMethod])) {
                            $allow += $a;
                            goto not_api_farms_get_collection;
                        }

                        return $ret;
                        not_api_farms_get_collection:

                        // api_farms_post_collection
                        $ret = $this->mergeDefaults(array('_route' => 'api_farms_post_collection') + $matches, array('_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Farm', '_api_collection_operation_name' => 'post'));
                        if (!isset(($a = array('POST' => 0))[$requestMethod])) {
                            $allow += $a;
                            goto not_api_farms_post_collection;
                        }

                        return $ret;
                        not_api_farms_post_collection:

                        break;
                    case 413:
                        $matches = array('id' => $matches[1] ?? null, '_format' => $matches[2] ?? null);

                        // api_farms_get_item
                        $ret = $this->mergeDefaults(array('_route' => 'api_farms_get_item') + $matches, array('_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Farm', '_api_item_operation_name' => 'get'));
                        if (!isset(($a = array('GET' => 0))[$canonicalMethod])) {
                            $allow += $a;
                            goto not_api_farms_get_item;
                        }

                        return $ret;
                        not_api_farms_get_item:

                        // api_farms_delete_item
                        $ret = $this->mergeDefaults(array('_route' => 'api_farms_delete_item') + $matches, array('_controller' => 'api_platform.action.delete_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Farm', '_api_item_operation_name' => 'delete'));
                        if (!isset(($a = array('DELETE' => 0))[$requestMethod])) {
                            $allow += $a;
                            goto not_api_farms_delete_item;
                        }

                        return $ret;
                        not_api_farms_delete_item:

                        // api_farms_put_item
                        $ret = $this->mergeDefaults(array('_route' => 'api_farms_put_item') + $matches, array('_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Farm', '_api_item_operation_name' => 'put'));
                        if (!isset(($a = array('PUT' => 0))[$requestMethod])) {
                            $allow += $a;
                            goto not_api_farms_put_item;
                        }

                        return $ret;
                        not_api_farms_put_item:

                        break;
                    case 455:
                        $matches = array('_format' => $matches[1] ?? null);

                        // api_greenhouses_get_collection
                        $ret = $this->mergeDefaults(array('_route' => 'api_greenhouses_get_collection') + $matches, array('_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Greenhouse', '_api_collection_operation_name' => 'get'));
                        if (!isset(($a = array('GET' => 0))[$canonicalMethod])) {
                            $allow += $a;
                            goto not_api_greenhouses_get_collection;
                        }

                        return $ret;
                        not_api_greenhouses_get_collection:

                        // api_greenhouses_post_collection
                        $ret = $this->mergeDefaults(array('_route' => 'api_greenhouses_post_collection') + $matches, array('_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Greenhouse', '_api_collection_operation_name' => 'post'));
                        if (!isset(($a = array('POST' => 0))[$requestMethod])) {
                            $allow += $a;
                            goto not_api_greenhouses_post_collection;
                        }

                        return $ret;
                        not_api_greenhouses_post_collection:

                        break;
                    case 493:
                        $matches = array('id' => $matches[1] ?? null, '_format' => $matches[2] ?? null);

                        // api_greenhouses_get_item
                        $ret = $this->mergeDefaults(array('_route' => 'api_greenhouses_get_item') + $matches, array('_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Greenhouse', '_api_item_operation_name' => 'get'));
                        if (!isset(($a = array('GET' => 0))[$canonicalMethod])) {
                            $allow += $a;
                            goto not_api_greenhouses_get_item;
                        }

                        return $ret;
                        not_api_greenhouses_get_item:

                        // api_greenhouses_delete_item
                        $ret = $this->mergeDefaults(array('_route' => 'api_greenhouses_delete_item') + $matches, array('_controller' => 'api_platform.action.delete_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Greenhouse', '_api_item_operation_name' => 'delete'));
                        if (!isset(($a = array('DELETE' => 0))[$requestMethod])) {
                            $allow += $a;
                            goto not_api_greenhouses_delete_item;
                        }

                        return $ret;
                        not_api_greenhouses_delete_item:

                        // api_greenhouses_put_item
                        $ret = $this->mergeDefaults(array('_route' => 'api_greenhouses_put_item') + $matches, array('_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Greenhouse', '_api_item_operation_name' => 'put'));
                        if (!isset(($a = array('PUT' => 0))[$requestMethod])) {
                            $allow += $a;
                            goto not_api_greenhouses_put_item;
                        }

                        return $ret;
                        not_api_greenhouses_put_item:

                        break;
                    case 532:
                        $matches = array('_format' => $matches[1] ?? null);

                        // api_harvests_get_collection
                        $ret = $this->mergeDefaults(array('_route' => 'api_harvests_get_collection') + $matches, array('_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Harvest', '_api_collection_operation_name' => 'get'));
                        if (!isset(($a = array('GET' => 0))[$canonicalMethod])) {
                            $allow += $a;
                            goto not_api_harvests_get_collection;
                        }

                        return $ret;
                        not_api_harvests_get_collection:

                        // api_harvests_post_collection
                        $ret = $this->mergeDefaults(array('_route' => 'api_harvests_post_collection') + $matches, array('_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Harvest', '_api_collection_operation_name' => 'post'));
                        if (!isset(($a = array('POST' => 0))[$requestMethod])) {
                            $allow += $a;
                            goto not_api_harvests_post_collection;
                        }

                        return $ret;
                        not_api_harvests_post_collection:

                        break;
                    case 570:
                        $matches = array('id' => $matches[1] ?? null, '_format' => $matches[2] ?? null);

                        // api_harvests_get_item
                        $ret = $this->mergeDefaults(array('_route' => 'api_harvests_get_item') + $matches, array('_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Harvest', '_api_item_operation_name' => 'get'));
                        if (!isset(($a = array('GET' => 0))[$canonicalMethod])) {
                            $allow += $a;
                            goto not_api_harvests_get_item;
                        }

                        return $ret;
                        not_api_harvests_get_item:

                        // api_harvests_delete_item
                        $ret = $this->mergeDefaults(array('_route' => 'api_harvests_delete_item') + $matches, array('_controller' => 'api_platform.action.delete_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Harvest', '_api_item_operation_name' => 'delete'));
                        if (!isset(($a = array('DELETE' => 0))[$requestMethod])) {
                            $allow += $a;
                            goto not_api_harvests_delete_item;
                        }

                        return $ret;
                        not_api_harvests_delete_item:

                        // api_harvests_put_item
                        $ret = $this->mergeDefaults(array('_route' => 'api_harvests_put_item') + $matches, array('_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Harvest', '_api_item_operation_name' => 'put'));
                        if (!isset(($a = array('PUT' => 0))[$requestMethod])) {
                            $allow += $a;
                            goto not_api_harvests_put_item;
                        }

                        return $ret;
                        not_api_harvests_put_item:

                        break;
                    case 610:
                        $matches = array('_format' => $matches[1] ?? null);

                        // api_orders_get_collection
                        $ret = $this->mergeDefaults(array('_route' => 'api_orders_get_collection') + $matches, array('_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Order', '_api_collection_operation_name' => 'get'));
                        if (!isset(($a = array('GET' => 0))[$canonicalMethod])) {
                            $allow += $a;
                            goto not_api_orders_get_collection;
                        }

                        return $ret;
                        not_api_orders_get_collection:

                        // api_orders_post_collection
                        $ret = $this->mergeDefaults(array('_route' => 'api_orders_post_collection') + $matches, array('_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Order', '_api_collection_operation_name' => 'post'));
                        if (!isset(($a = array('POST' => 0))[$requestMethod])) {
                            $allow += $a;
                            goto not_api_orders_post_collection;
                        }

                        return $ret;
                        not_api_orders_post_collection:

                        break;
                    case 648:
                        $matches = array('id' => $matches[1] ?? null, '_format' => $matches[2] ?? null);

                        // api_orders_get_item
                        $ret = $this->mergeDefaults(array('_route' => 'api_orders_get_item') + $matches, array('_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Order', '_api_item_operation_name' => 'get'));
                        if (!isset(($a = array('GET' => 0))[$canonicalMethod])) {
                            $allow += $a;
                            goto not_api_orders_get_item;
                        }

                        return $ret;
                        not_api_orders_get_item:

                        // api_orders_delete_item
                        $ret = $this->mergeDefaults(array('_route' => 'api_orders_delete_item') + $matches, array('_controller' => 'api_platform.action.delete_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Order', '_api_item_operation_name' => 'delete'));
                        if (!isset(($a = array('DELETE' => 0))[$requestMethod])) {
                            $allow += $a;
                            goto not_api_orders_delete_item;
                        }

                        return $ret;
                        not_api_orders_delete_item:

                        // api_orders_put_item
                        $ret = $this->mergeDefaults(array('_route' => 'api_orders_put_item') + $matches, array('_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Order', '_api_item_operation_name' => 'put'));
                        if (!isset(($a = array('PUT' => 0))[$requestMethod])) {
                            $allow += $a;
                            goto not_api_orders_put_item;
                        }

                        return $ret;
                        not_api_orders_put_item:

                        break;
                    case 685:
                        $matches = array('_format' => $matches[1] ?? null);

                        // api_order_items_get_collection
                        $ret = $this->mergeDefaults(array('_route' => 'api_order_items_get_collection') + $matches, array('_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\OrderItem', '_api_collection_operation_name' => 'get'));
                        if (!isset(($a = array('GET' => 0))[$canonicalMethod])) {
                            $allow += $a;
                            goto not_api_order_items_get_collection;
                        }

                        return $ret;
                        not_api_order_items_get_collection:

                        // api_order_items_post_collection
                        $ret = $this->mergeDefaults(array('_route' => 'api_order_items_post_collection') + $matches, array('_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\OrderItem', '_api_collection_operation_name' => 'post'));
                        if (!isset(($a = array('POST' => 0))[$requestMethod])) {
                            $allow += $a;
                            goto not_api_order_items_post_collection;
                        }

                        return $ret;
                        not_api_order_items_post_collection:

                        break;
                    case 723:
                        $matches = array('id' => $matches[1] ?? null, '_format' => $matches[2] ?? null);

                        // api_order_items_get_item
                        $ret = $this->mergeDefaults(array('_route' => 'api_order_items_get_item') + $matches, array('_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\OrderItem', '_api_item_operation_name' => 'get'));
                        if (!isset(($a = array('GET' => 0))[$canonicalMethod])) {
                            $allow += $a;
                            goto not_api_order_items_get_item;
                        }

                        return $ret;
                        not_api_order_items_get_item:

                        // api_order_items_delete_item
                        $ret = $this->mergeDefaults(array('_route' => 'api_order_items_delete_item') + $matches, array('_controller' => 'api_platform.action.delete_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\OrderItem', '_api_item_operation_name' => 'delete'));
                        if (!isset(($a = array('DELETE' => 0))[$requestMethod])) {
                            $allow += $a;
                            goto not_api_order_items_delete_item;
                        }

                        return $ret;
                        not_api_order_items_delete_item:

                        // api_order_items_put_item
                        $ret = $this->mergeDefaults(array('_route' => 'api_order_items_put_item') + $matches, array('_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\OrderItem', '_api_item_operation_name' => 'put'));
                        if (!isset(($a = array('PUT' => 0))[$requestMethod])) {
                            $allow += $a;
                            goto not_api_order_items_put_item;
                        }

                        return $ret;
                        not_api_order_items_put_item:

                        break;
                    case 764:
                        $matches = array('_format' => $matches[1] ?? null);

                        // api_phases_get_collection
                        $ret = $this->mergeDefaults(array('_route' => 'api_phases_get_collection') + $matches, array('_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Phase', '_api_collection_operation_name' => 'get'));
                        if (!isset(($a = array('GET' => 0))[$canonicalMethod])) {
                            $allow += $a;
                            goto not_api_phases_get_collection;
                        }

                        return $ret;
                        not_api_phases_get_collection:

                        // api_phases_post_collection
                        $ret = $this->mergeDefaults(array('_route' => 'api_phases_post_collection') + $matches, array('_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Phase', '_api_collection_operation_name' => 'post'));
                        if (!isset(($a = array('POST' => 0))[$requestMethod])) {
                            $allow += $a;
                            goto not_api_phases_post_collection;
                        }

                        return $ret;
                        not_api_phases_post_collection:

                        break;
                    case 802:
                        $matches = array('id' => $matches[1] ?? null, '_format' => $matches[2] ?? null);

                        // api_phases_get_item
                        $ret = $this->mergeDefaults(array('_route' => 'api_phases_get_item') + $matches, array('_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Phase', '_api_item_operation_name' => 'get'));
                        if (!isset(($a = array('GET' => 0))[$canonicalMethod])) {
                            $allow += $a;
                            goto not_api_phases_get_item;
                        }

                        return $ret;
                        not_api_phases_get_item:

                        // api_phases_delete_item
                        $ret = $this->mergeDefaults(array('_route' => 'api_phases_delete_item') + $matches, array('_controller' => 'api_platform.action.delete_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Phase', '_api_item_operation_name' => 'delete'));
                        if (!isset(($a = array('DELETE' => 0))[$requestMethod])) {
                            $allow += $a;
                            goto not_api_phases_delete_item;
                        }

                        return $ret;
                        not_api_phases_delete_item:

                        // api_phases_put_item
                        $ret = $this->mergeDefaults(array('_route' => 'api_phases_put_item') + $matches, array('_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Phase', '_api_item_operation_name' => 'put'));
                        if (!isset(($a = array('PUT' => 0))[$requestMethod])) {
                            $allow += $a;
                            goto not_api_phases_put_item;
                        }

                        return $ret;
                        not_api_phases_put_item:

                        break;
                    case 842:
                        $matches = array('_format' => $matches[1] ?? null);

                        // api_pollinates_get_collection
                        $ret = $this->mergeDefaults(array('_route' => 'api_pollinates_get_collection') + $matches, array('_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Pollinate', '_api_collection_operation_name' => 'get'));
                        if (!isset(($a = array('GET' => 0))[$canonicalMethod])) {
                            $allow += $a;
                            goto not_api_pollinates_get_collection;
                        }

                        return $ret;
                        not_api_pollinates_get_collection:

                        // api_pollinates_post_collection
                        $ret = $this->mergeDefaults(array('_route' => 'api_pollinates_post_collection') + $matches, array('_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Pollinate', '_api_collection_operation_name' => 'post'));
                        if (!isset(($a = array('POST' => 0))[$requestMethod])) {
                            $allow += $a;
                            goto not_api_pollinates_post_collection;
                        }

                        return $ret;
                        not_api_pollinates_post_collection:

                        break;
                    case 880:
                        $matches = array('id' => $matches[1] ?? null, '_format' => $matches[2] ?? null);

                        // api_pollinates_get_item
                        $ret = $this->mergeDefaults(array('_route' => 'api_pollinates_get_item') + $matches, array('_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Pollinate', '_api_item_operation_name' => 'get'));
                        if (!isset(($a = array('GET' => 0))[$canonicalMethod])) {
                            $allow += $a;
                            goto not_api_pollinates_get_item;
                        }

                        return $ret;
                        not_api_pollinates_get_item:

                        // api_pollinates_delete_item
                        $ret = $this->mergeDefaults(array('_route' => 'api_pollinates_delete_item') + $matches, array('_controller' => 'api_platform.action.delete_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Pollinate', '_api_item_operation_name' => 'delete'));
                        if (!isset(($a = array('DELETE' => 0))[$requestMethod])) {
                            $allow += $a;
                            goto not_api_pollinates_delete_item;
                        }

                        return $ret;
                        not_api_pollinates_delete_item:

                        // api_pollinates_put_item
                        $ret = $this->mergeDefaults(array('_route' => 'api_pollinates_put_item') + $matches, array('_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Pollinate', '_api_item_operation_name' => 'put'));
                        if (!isset(($a = array('PUT' => 0))[$requestMethod])) {
                            $allow += $a;
                            goto not_api_pollinates_put_item;
                        }

                        return $ret;
                        not_api_pollinates_put_item:

                        break;
                    case 922:
                        $matches = array('_format' => $matches[1] ?? null);

                        // api_progressions_get_collection
                        $ret = $this->mergeDefaults(array('_route' => 'api_progressions_get_collection') + $matches, array('_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Progression', '_api_collection_operation_name' => 'get'));
                        if (!isset(($a = array('GET' => 0))[$canonicalMethod])) {
                            $allow += $a;
                            goto not_api_progressions_get_collection;
                        }

                        return $ret;
                        not_api_progressions_get_collection:

                        // api_progressions_post_collection
                        $ret = $this->mergeDefaults(array('_route' => 'api_progressions_post_collection') + $matches, array('_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Progression', '_api_collection_operation_name' => 'post'));
                        if (!isset(($a = array('POST' => 0))[$requestMethod])) {
                            $allow += $a;
                            goto not_api_progressions_post_collection;
                        }

                        return $ret;
                        not_api_progressions_post_collection:

                        break;
                    case 960:
                        $matches = array('id' => $matches[1] ?? null, '_format' => $matches[2] ?? null);

                        // api_progressions_get_item
                        $ret = $this->mergeDefaults(array('_route' => 'api_progressions_get_item') + $matches, array('_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Progression', '_api_item_operation_name' => 'get'));
                        if (!isset(($a = array('GET' => 0))[$canonicalMethod])) {
                            $allow += $a;
                            goto not_api_progressions_get_item;
                        }

                        return $ret;
                        not_api_progressions_get_item:

                        // api_progressions_delete_item
                        $ret = $this->mergeDefaults(array('_route' => 'api_progressions_delete_item') + $matches, array('_controller' => 'api_platform.action.delete_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Progression', '_api_item_operation_name' => 'delete'));
                        if (!isset(($a = array('DELETE' => 0))[$requestMethod])) {
                            $allow += $a;
                            goto not_api_progressions_delete_item;
                        }

                        return $ret;
                        not_api_progressions_delete_item:

                        // api_progressions_put_item
                        $ret = $this->mergeDefaults(array('_route' => 'api_progressions_put_item') + $matches, array('_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Progression', '_api_item_operation_name' => 'put'));
                        if (!isset(($a = array('PUT' => 0))[$requestMethod])) {
                            $allow += $a;
                            goto not_api_progressions_put_item;
                        }

                        return $ret;
                        not_api_progressions_put_item:

                        break;
                    case 1001:
                        $matches = array('_format' => $matches[1] ?? null);

                        // api_sheets_get_collection
                        $ret = $this->mergeDefaults(array('_route' => 'api_sheets_get_collection') + $matches, array('_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Sheet', '_api_collection_operation_name' => 'get'));
                        if (!isset(($a = array('GET' => 0))[$canonicalMethod])) {
                            $allow += $a;
                            goto not_api_sheets_get_collection;
                        }

                        return $ret;
                        not_api_sheets_get_collection:

                        // api_sheets_post_collection
                        $ret = $this->mergeDefaults(array('_route' => 'api_sheets_post_collection') + $matches, array('_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Sheet', '_api_collection_operation_name' => 'post'));
                        if (!isset(($a = array('POST' => 0))[$requestMethod])) {
                            $allow += $a;
                            goto not_api_sheets_post_collection;
                        }

                        return $ret;
                        not_api_sheets_post_collection:

                        break;
                    case 1040:
                        $matches = array('id' => $matches[1] ?? null, '_format' => $matches[2] ?? null);

                        // api_sheets_get_item
                        $ret = $this->mergeDefaults(array('_route' => 'api_sheets_get_item') + $matches, array('_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Sheet', '_api_item_operation_name' => 'get'));
                        if (!isset(($a = array('GET' => 0))[$canonicalMethod])) {
                            $allow += $a;
                            goto not_api_sheets_get_item;
                        }

                        return $ret;
                        not_api_sheets_get_item:

                        // api_sheets_delete_item
                        $ret = $this->mergeDefaults(array('_route' => 'api_sheets_delete_item') + $matches, array('_controller' => 'api_platform.action.delete_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Sheet', '_api_item_operation_name' => 'delete'));
                        if (!isset(($a = array('DELETE' => 0))[$requestMethod])) {
                            $allow += $a;
                            goto not_api_sheets_delete_item;
                        }

                        return $ret;
                        not_api_sheets_delete_item:

                        // api_sheets_put_item
                        $ret = $this->mergeDefaults(array('_route' => 'api_sheets_put_item') + $matches, array('_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Sheet', '_api_item_operation_name' => 'put'));
                        if (!isset(($a = array('PUT' => 0))[$requestMethod])) {
                            $allow += $a;
                            goto not_api_sheets_put_item;
                        }

                        return $ret;
                        not_api_sheets_put_item:

                        break;
                    case 1078:
                        $matches = array('_format' => $matches[1] ?? null);

                        // api_sowings_get_collection
                        $ret = $this->mergeDefaults(array('_route' => 'api_sowings_get_collection') + $matches, array('_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Sowing', '_api_collection_operation_name' => 'get'));
                        if (!isset(($a = array('GET' => 0))[$canonicalMethod])) {
                            $allow += $a;
                            goto not_api_sowings_get_collection;
                        }

                        return $ret;
                        not_api_sowings_get_collection:

                        // api_sowings_post_collection
                        $ret = $this->mergeDefaults(array('_route' => 'api_sowings_post_collection') + $matches, array('_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Sowing', '_api_collection_operation_name' => 'post'));
                        if (!isset(($a = array('POST' => 0))[$requestMethod])) {
                            $allow += $a;
                            goto not_api_sowings_post_collection;
                        }

                        return $ret;
                        not_api_sowings_post_collection:

                        break;
                    case 1117:
                        $matches = array('id' => $matches[1] ?? null, '_format' => $matches[2] ?? null);

                        // api_sowings_get_item
                        $ret = $this->mergeDefaults(array('_route' => 'api_sowings_get_item') + $matches, array('_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Sowing', '_api_item_operation_name' => 'get'));
                        if (!isset(($a = array('GET' => 0))[$canonicalMethod])) {
                            $allow += $a;
                            goto not_api_sowings_get_item;
                        }

                        return $ret;
                        not_api_sowings_get_item:

                        // api_sowings_delete_item
                        $ret = $this->mergeDefaults(array('_route' => 'api_sowings_delete_item') + $matches, array('_controller' => 'api_platform.action.delete_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Sowing', '_api_item_operation_name' => 'delete'));
                        if (!isset(($a = array('DELETE' => 0))[$requestMethod])) {
                            $allow += $a;
                            goto not_api_sowings_delete_item;
                        }

                        return $ret;
                        not_api_sowings_delete_item:

                        // api_sowings_put_item
                        $ret = $this->mergeDefaults(array('_route' => 'api_sowings_put_item') + $matches, array('_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Sowing', '_api_item_operation_name' => 'put'));
                        if (!isset(($a = array('PUT' => 0))[$requestMethod])) {
                            $allow += $a;
                            goto not_api_sowings_put_item;
                        }

                        return $ret;
                        not_api_sowings_put_item:

                        break;
                    case 1161:
                        $matches = array('_format' => $matches[1] ?? null);

                        // api_transplants_get_collection
                        $ret = $this->mergeDefaults(array('_route' => 'api_transplants_get_collection') + $matches, array('_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Transplant', '_api_collection_operation_name' => 'get'));
                        if (!isset(($a = array('GET' => 0))[$canonicalMethod])) {
                            $allow += $a;
                            goto not_api_transplants_get_collection;
                        }

                        return $ret;
                        not_api_transplants_get_collection:

                        // api_transplants_post_collection
                        $ret = $this->mergeDefaults(array('_route' => 'api_transplants_post_collection') + $matches, array('_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Transplant', '_api_collection_operation_name' => 'post'));
                        if (!isset(($a = array('POST' => 0))[$requestMethod])) {
                            $allow += $a;
                            goto not_api_transplants_post_collection;
                        }

                        return $ret;
                        not_api_transplants_post_collection:

                        break;
                    case 1200:
                        $matches = array('id' => $matches[1] ?? null, '_format' => $matches[2] ?? null);

                        // api_transplants_get_item
                        $ret = $this->mergeDefaults(array('_route' => 'api_transplants_get_item') + $matches, array('_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Transplant', '_api_item_operation_name' => 'get'));
                        if (!isset(($a = array('GET' => 0))[$canonicalMethod])) {
                            $allow += $a;
                            goto not_api_transplants_get_item;
                        }

                        return $ret;
                        not_api_transplants_get_item:

                        // api_transplants_delete_item
                        $ret = $this->mergeDefaults(array('_route' => 'api_transplants_delete_item') + $matches, array('_controller' => 'api_platform.action.delete_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Transplant', '_api_item_operation_name' => 'delete'));
                        if (!isset(($a = array('DELETE' => 0))[$requestMethod])) {
                            $allow += $a;
                            goto not_api_transplants_delete_item;
                        }

                        return $ret;
                        not_api_transplants_delete_item:

                        // api_transplants_put_item
                        $ret = $this->mergeDefaults(array('_route' => 'api_transplants_put_item') + $matches, array('_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Transplant', '_api_item_operation_name' => 'put'));
                        if (!isset(($a = array('PUT' => 0))[$requestMethod])) {
                            $allow += $a;
                            goto not_api_transplants_put_item;
                        }

                        return $ret;
                        not_api_transplants_put_item:

                        break;
                    case 1240:
                        $matches = array('_format' => $matches[1] ?? null);

                        // api_units_get_collection
                        $ret = $this->mergeDefaults(array('_route' => 'api_units_get_collection') + $matches, array('_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Unit', '_api_collection_operation_name' => 'get'));
                        if (!isset(($a = array('GET' => 0))[$canonicalMethod])) {
                            $allow += $a;
                            goto not_api_units_get_collection;
                        }

                        return $ret;
                        not_api_units_get_collection:

                        // api_units_post_collection
                        $ret = $this->mergeDefaults(array('_route' => 'api_units_post_collection') + $matches, array('_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Unit', '_api_collection_operation_name' => 'post'));
                        if (!isset(($a = array('POST' => 0))[$requestMethod])) {
                            $allow += $a;
                            goto not_api_units_post_collection;
                        }

                        return $ret;
                        not_api_units_post_collection:

                        break;
                    case 1279:
                        $matches = array('id' => $matches[1] ?? null, '_format' => $matches[2] ?? null);

                        // api_units_get_item
                        $ret = $this->mergeDefaults(array('_route' => 'api_units_get_item') + $matches, array('_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Unit', '_api_item_operation_name' => 'get'));
                        if (!isset(($a = array('GET' => 0))[$canonicalMethod])) {
                            $allow += $a;
                            goto not_api_units_get_item;
                        }

                        return $ret;
                        not_api_units_get_item:

                        // api_units_delete_item
                        $ret = $this->mergeDefaults(array('_route' => 'api_units_delete_item') + $matches, array('_controller' => 'api_platform.action.delete_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Unit', '_api_item_operation_name' => 'delete'));
                        if (!isset(($a = array('DELETE' => 0))[$requestMethod])) {
                            $allow += $a;
                            goto not_api_units_delete_item;
                        }

                        return $ret;
                        not_api_units_delete_item:

                        // api_units_put_item
                        $ret = $this->mergeDefaults(array('_route' => 'api_units_put_item') + $matches, array('_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Unit', '_api_item_operation_name' => 'put'));
                        if (!isset(($a = array('PUT' => 0))[$requestMethod])) {
                            $allow += $a;
                            goto not_api_units_put_item;
                        }

                        return $ret;
                        not_api_units_put_item:

                        break;
                    case 1315:
                        $matches = array('_format' => $matches[1] ?? null);

                        // api_users_get_collection
                        $ret = $this->mergeDefaults(array('_route' => 'api_users_get_collection') + $matches, array('_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\User', '_api_collection_operation_name' => 'get'));
                        if (!isset(($a = array('GET' => 0))[$canonicalMethod])) {
                            $allow += $a;
                            goto not_api_users_get_collection;
                        }

                        return $ret;
                        not_api_users_get_collection:

                        // api_users_post_collection
                        $ret = $this->mergeDefaults(array('_route' => 'api_users_post_collection') + $matches, array('_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\User', '_api_collection_operation_name' => 'post'));
                        if (!isset(($a = array('POST' => 0))[$requestMethod])) {
                            $allow += $a;
                            goto not_api_users_post_collection;
                        }

                        return $ret;
                        not_api_users_post_collection:

                        break;
                    case 1354:
                        $matches = array('id' => $matches[1] ?? null, '_format' => $matches[2] ?? null);

                        // api_users_get_item
                        $ret = $this->mergeDefaults(array('_route' => 'api_users_get_item') + $matches, array('_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\User', '_api_item_operation_name' => 'get'));
                        if (!isset(($a = array('GET' => 0))[$canonicalMethod])) {
                            $allow += $a;
                            goto not_api_users_get_item;
                        }

                        return $ret;
                        not_api_users_get_item:

                        // api_users_delete_item
                        $ret = $this->mergeDefaults(array('_route' => 'api_users_delete_item') + $matches, array('_controller' => 'api_platform.action.delete_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\User', '_api_item_operation_name' => 'delete'));
                        if (!isset(($a = array('DELETE' => 0))[$requestMethod])) {
                            $allow += $a;
                            goto not_api_users_delete_item;
                        }

                        return $ret;
                        not_api_users_delete_item:

                        // api_users_put_item
                        $ret = $this->mergeDefaults(array('_route' => 'api_users_put_item') + $matches, array('_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\User', '_api_item_operation_name' => 'put'));
                        if (!isset(($a = array('PUT' => 0))[$requestMethod])) {
                            $allow += $a;
                            goto not_api_users_put_item;
                        }

                        return $ret;
                        not_api_users_put_item:

                        break;
                    case 1396:
                        $matches = array('_format' => $matches[1] ?? null);

                        // api_varieties_get_collection
                        $ret = $this->mergeDefaults(array('_route' => 'api_varieties_get_collection') + $matches, array('_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Variety', '_api_collection_operation_name' => 'get'));
                        if (!isset(($a = array('GET' => 0))[$canonicalMethod])) {
                            $allow += $a;
                            goto not_api_varieties_get_collection;
                        }

                        return $ret;
                        not_api_varieties_get_collection:

                        // api_varieties_post_collection
                        $ret = $this->mergeDefaults(array('_route' => 'api_varieties_post_collection') + $matches, array('_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Variety', '_api_collection_operation_name' => 'post'));
                        if (!isset(($a = array('POST' => 0))[$requestMethod])) {
                            $allow += $a;
                            goto not_api_varieties_post_collection;
                        }

                        return $ret;
                        not_api_varieties_post_collection:

                        break;
                    case 1435:
                        $matches = array('id' => $matches[1] ?? null, '_format' => $matches[2] ?? null);

                        // api_varieties_get_item
                        $ret = $this->mergeDefaults(array('_route' => 'api_varieties_get_item') + $matches, array('_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Variety', '_api_item_operation_name' => 'get'));
                        if (!isset(($a = array('GET' => 0))[$canonicalMethod])) {
                            $allow += $a;
                            goto not_api_varieties_get_item;
                        }

                        return $ret;
                        not_api_varieties_get_item:

                        // api_varieties_delete_item
                        $ret = $this->mergeDefaults(array('_route' => 'api_varieties_delete_item') + $matches, array('_controller' => 'api_platform.action.delete_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Variety', '_api_item_operation_name' => 'delete'));
                        if (!isset(($a = array('DELETE' => 0))[$requestMethod])) {
                            $allow += $a;
                            goto not_api_varieties_delete_item;
                        }

                        return $ret;
                        not_api_varieties_delete_item:

                        // api_varieties_put_item
                        $ret = $this->mergeDefaults(array('_route' => 'api_varieties_put_item') + $matches, array('_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Variety', '_api_item_operation_name' => 'put'));
                        if (!isset(($a = array('PUT' => 0))[$requestMethod])) {
                            $allow += $a;
                            goto not_api_varieties_put_item;
                        }

                        return $ret;
                        not_api_varieties_put_item:

                        break;
                    default:
                        $routes = array(
                            42 => array(array('_route' => 'api_entrypoint', '_controller' => 'api_platform.action.entrypoint', '_format' => '', '_api_respond' => '1', 'index' => 'index'), array('index', '_format'), null, null),
                            72 => array(array('_route' => 'api_doc', '_controller' => 'api_platform.action.documentation', '_api_respond' => '1', '_format' => ''), array('_format'), null, null),
                            110 => array(array('_route' => 'api_jsonld_context', '_controller' => 'api_platform.jsonld.action.context', '_api_respond' => '1', '_format' => 'jsonld'), array('shortName', '_format'), null, null),
                            1479 => array(array('_route' => '_twig_error_test', '_controller' => 'twig.controller.preview_error::previewErrorPageAction', '_format' => 'html'), array('code', '_format'), null, null),
                            1500 => array(array('_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'), array('token'), null, null),
                            1547 => array(array('_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'), array('token'), null, null),
                            1562 => array(array('_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'), array('token'), null, null),
                            1583 => array(array('_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception::showAction'), array('token'), null, null),
                            1597 => array(array('_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception::cssAction'), array('token'), null, null),
                            1608 => array(array('_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'), array('token'), null, null),
                        );

                        list($ret, $vars, $requiredMethods, $requiredSchemes) = $routes[$m];

                        foreach ($vars as $i => $v) {
                            if (isset($matches[1 + $i])) {
                                $ret[$v] = $matches[1 + $i];
                            }
                        }

                        $hasRequiredScheme = !$requiredSchemes || isset($requiredSchemes[$context->getScheme()]);
                        if ($requiredMethods && !isset($requiredMethods[$canonicalMethod]) && !isset($requiredMethods[$requestMethod])) {
                            if ($hasRequiredScheme) {
                                $allow += $requiredMethods;
                            }
                            break;
                        }
                        if (!$hasRequiredScheme) {
                            $allowSchemes += $requiredSchemes;
                            break;
                        }

                        return $ret;
                }

                if (1608 === $m) {
                    break;
                }
                $regex = substr_replace($regex, 'F', $m - $offset, 1 + strlen($m));
                $offset += strlen($m);
            }
        }
        if ('/' === $pathinfo && !$allow && !$allowSchemes) {
            throw new Symfony\Component\Routing\Exception\NoConfigurationException();
        }

        return null;
    }
}
