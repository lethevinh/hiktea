<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_96d7c86a7d2a71e0fca3bf20c86116f57db937e7613ec2f3fde66ccdbfd3fc11 extends Twig_Template
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
        echo "<?php echo \$view['form']->formEncodeCurrency(\$money_pattern, \$view['form']->block(\$form, 'form_widget_simple')) ?>
";
    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@Framework/Form/money_widget.html.php", "/Volumes/DATA/Work/www/PartTime/aHao/lamdai-backend/vendor/symfony/framework-bundle/Resources/views/Form/money_widget.html.php");
    }
}
