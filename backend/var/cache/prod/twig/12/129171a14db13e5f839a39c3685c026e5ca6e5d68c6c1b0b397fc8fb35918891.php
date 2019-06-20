<?php

/* @Framework/Form/color_widget.html.php */
class __TwigTemplate_299516584dddf91220b40358b21df48e4f835a046440d30677a0d2836b595f8a extends Twig_Template
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
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'color'));
";
    }

    public function getTemplateName()
    {
        return "@Framework/Form/color_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@Framework/Form/color_widget.html.php", "/Volumes/DATA/Work/www/PartTime/aHao/lamdai-backend/vendor/symfony/framework-bundle/Resources/views/Form/color_widget.html.php");
    }
}
