<?php

/* @ApiPlatform/SwaggerUi/index.html.twig */
class __TwigTemplate_13db0ec31412a8044a4d2a7e91cf4f5475feb6e6ffa48c2892b5ba78d241b94c extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <title>";
        // line 5
        if (($context["title"] ?? null)) {
            echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
            echo " - ";
        }
        echo "API Platform</title>

    <link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css?family=Open+Sans:400,700|Source+Code+Pro:300,600|Titillium+Web:400,600,700\">
    <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/apiplatform/swagger-ui/swagger-ui.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/apiplatform/style.css"), "html", null, true);
        echo "\">

    ";
        // line 12
        echo "    <script id=\"swagger-data\" type=\"application/json\">";
        echo json_encode(($context["swagger_data"] ?? null), 65);
        echo "</script>
</head>

<body>
<svg xmlns=\"http://www.w3.org/2000/svg\" style=\"position:absolute;width:0;height:0\">
    <defs>
        <symbol viewBox=\"0 0 20 20\" id=\"unlocked\">
            <path d=\"M15.8 8H14V5.6C14 2.703 12.665 1 10 1 7.334 1 6 2.703 6 5.6V6h2v-.801C8 3.754 8.797 3 10 3c1.203 0 2 .754 2 2.199V8H4c-.553 0-1 .646-1 1.199V17c0 .549.428 1.139.951 1.307l1.197.387C5.672 18.861 6.55 19 7.1 19h5.8c.549 0 1.428-.139 1.951-.307l1.196-.387c.524-.167.953-.757.953-1.306V9.199C17 8.646 16.352 8 15.8 8z\"></path>
        </symbol>

        <symbol viewBox=\"0 0 20 20\" id=\"locked\">
            <path d=\"M15.8 8H14V5.6C14 2.703 12.665 1 10 1 7.334 1 6 2.703 6 5.6V8H4c-.553 0-1 .646-1 1.199V17c0 .549.428 1.139.951 1.307l1.197.387C5.672 18.861 6.55 19 7.1 19h5.8c.549 0 1.428-.139 1.951-.307l1.196-.387c.524-.167.953-.757.953-1.306V9.199C17 8.646 16.352 8 15.8 8zM12 8H8V5.199C8 3.754 8.797 3 10 3c1.203 0 2 .754 2 2.199V8z\"></path>
        </symbol>

        <symbol viewBox=\"0 0 20 20\" id=\"close\">
            <path d=\"M14.348 14.849c-.469.469-1.229.469-1.697 0L10 11.819l-2.651 3.029c-.469.469-1.229.469-1.697 0-.469-.469-.469-1.229 0-1.697l2.758-3.15-2.759-3.152c-.469-.469-.469-1.228 0-1.697.469-.469 1.228-.469 1.697 0L10 8.183l2.651-3.031c.469-.469 1.228-.469 1.697 0 .469.469.469 1.229 0 1.697l-2.758 3.152 2.758 3.15c.469.469.469 1.229 0 1.698z\"></path>
        </symbol>

        <symbol viewBox=\"0 0 20 20\" id=\"large-arrow\">
            <path d=\"M13.25 10L6.109 2.58c-.268-.27-.268-.707 0-.979.268-.27.701-.27.969 0l7.83 7.908c.268.271.268.709 0 .979l-7.83 7.908c-.268.271-.701.27-.969 0-.268-.269-.268-.707 0-.979L13.25 10z\"></path>
        </symbol>

        <symbol viewBox=\"0 0 20 20\" id=\"large-arrow-down\">
            <path d=\"M17.418 6.109c.272-.268.709-.268.979 0s.271.701 0 .969l-7.908 7.83c-.27.268-.707.268-.979 0l-7.908-7.83c-.27-.268-.27-.701 0-.969.271-.268.709-.268.979 0L10 13.25l7.418-7.141z\"></path>
        </symbol>


        <symbol viewBox=\"0 0 24 24\" id=\"jump-to\">
            <path d=\"M19 7v4H5.83l3.58-3.59L8 6l-6 6 6 6 1.41-1.41L5.83 13H21V7z\"></path>
        </symbol>

        <symbol viewBox=\"0 0 24 24\" id=\"expand\">
            <path d=\"M10 18h4v-2h-4v2zM3 6v2h18V6H3zm3 7h12v-2H6v2z\"></path>
        </symbol>

    </defs>
</svg>
<header>
    <a id=\"logo\" href=\"https://api-platform.com\"><img src=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/apiplatform/logo-header.svg"), "html", null, true);
        echo "\" alt=\"API Platform\"></a>
</header>

<div class=\"web\"><img src=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/apiplatform/web.png"), "html", null, true);
        echo "\"></div>
<div class=\"spider\"><img src=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/apiplatform/spider.png"), "html", null, true);
        echo "\"></div>

<div id=\"swagger-ui\" class=\"api-platform\"></div>

<div class=\"swagger-ui\" id=\"formats\">
    <div class=\"information-container wrapper\">
        <div class=\"info\">
            Available formats:
            ";
        // line 62
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_array_keys_filter(($context["formats"] ?? null)));
        foreach ($context['_seq'] as $context["_key"] => $context["format"]) {
            // line 63
            echo "                <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method"), twig_array_merge(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", array()), "attributes", array()), "get", array(0 => "_route_params"), "method"), array("_format" => $context["format"]))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["format"], "html", null, true);
            echo "</a>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['format'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 65
        echo "        </div>
    </div>
</div>

<script src=\"";
        // line 69
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/apiplatform/swagger-ui/swagger-ui-bundle.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 70
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/apiplatform/swagger-ui/swagger-ui-standalone-preset.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 71
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/apiplatform/init-swagger-ui.js"), "html", null, true);
        echo "\"></script>

</body>
</html>
";
    }

    public function getTemplateName()
    {
        return "@ApiPlatform/SwaggerUi/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  139 => 71,  135 => 70,  131 => 69,  125 => 65,  114 => 63,  110 => 62,  99 => 54,  95 => 53,  89 => 50,  47 => 12,  42 => 9,  38 => 8,  29 => 5,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@ApiPlatform/SwaggerUi/index.html.twig", "/Volumes/DATA/Work/www/PartTime/aHao/lamdai-backend/vendor/api-platform/core/src/Bridge/Symfony/Bundle/Resources/views/SwaggerUi/index.html.twig");
    }
}
