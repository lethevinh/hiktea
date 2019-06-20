<?php

/* @Framework/Form/form_help.html.php */
class __TwigTemplate_e48ede0775aee87b081c161906b5d5700f4c234ea3aed25232dede0924294f56 extends Twig_Template
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
        echo "<?php if (!empty(\$help)): ?>
    <p id=\"<?php echo \$view->escape(\$id); ?>_help\" class=\"help-text\"><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$help, array(), \$translation_domain) : \$help); ?></p>
<?php endif; ?>
";
    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_help.html.php";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@Framework/Form/form_help.html.php", "/Volumes/DATA/Work/www/PartTime/aHao/lamdai-backend/vendor/symfony/framework-bundle/Resources/views/Form/form_help.html.php");
    }
}
