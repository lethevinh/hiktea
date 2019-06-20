<?php

/* @Twig/Exception/error.json.twig */
class __TwigTemplate_6f1c2617f247fc55971995d85dc26a115111f0d1f7cbe50a1b20efab945dfcb0 extends Twig_Template
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
        echo json_encode(array("error" => array("code" => ($context["status_code"] ?? null), "message" => ($context["status_text"] ?? null))));
        echo "
";
    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.json.twig";
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
        return new Twig_Source("", "@Twig/Exception/error.json.twig", "/Volumes/DATA/Work/www/PartTime/aHao/lamdai-backend/vendor/symfony/twig-bundle/Resources/views/Exception/error.json.twig");
    }
}
