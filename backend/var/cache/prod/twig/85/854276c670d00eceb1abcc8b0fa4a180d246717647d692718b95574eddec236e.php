<?php

/* @Twig/Exception/exception.atom.twig */
class __TwigTemplate_6ac4bcd6dd2d20f04ccb86846270c730f548e0fdebbef1ab7956e5a6ba62ea91 extends Twig_Template
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
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => ($context["exception"] ?? null)));
        echo "
";
    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.atom.twig";
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
        return new Twig_Source("", "@Twig/Exception/exception.atom.twig", "/Volumes/DATA/Work/www/PartTime/aHao/lamdai-backend/vendor/symfony/twig-bundle/Resources/views/Exception/exception.atom.twig");
    }
}
