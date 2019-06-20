<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_a78b43553ae10a46f043478d4d540f643023ba23b39897c532f81268f66a7c2a extends Twig_Template
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
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@Framework/Form/password_widget.html.php", "/Volumes/DATA/Work/www/PartTime/aHao/lamdai-backend/vendor/symfony/framework-bundle/Resources/views/Form/password_widget.html.php");
    }
}
