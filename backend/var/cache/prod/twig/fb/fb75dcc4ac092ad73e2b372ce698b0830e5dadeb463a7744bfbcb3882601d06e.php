<?php

/* @Twig/Exception/error.rdf.twig */
class __TwigTemplate_7fa92826a4de6a469768a667b4e265e5e61ea131a2532e6f852309cd2dfc6066 extends Twig_Template
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
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.rdf.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@Twig/Exception/error.rdf.twig", "/Volumes/DATA/Work/www/PartTime/aHao/lamdai-backend/vendor/symfony/twig-bundle/Resources/views/Exception/error.rdf.twig");
    }
}
