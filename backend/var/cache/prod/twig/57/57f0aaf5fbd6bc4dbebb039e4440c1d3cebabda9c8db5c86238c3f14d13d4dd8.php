<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_4aaeb285e9fe87be45d6404ef3bc850a7a81d120c6f99d1fc1f2334a25f74a3a extends Twig_Template
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
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@Framework/Form/integer_widget.html.php", "/Volumes/DATA/Work/www/PartTime/aHao/lamdai-backend/vendor/symfony/framework-bundle/Resources/views/Form/integer_widget.html.php");
    }
}
