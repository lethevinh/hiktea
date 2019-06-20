<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_59ca28e7f192d24ca7a0350a92184e84a00e74f6192203213896a3c0aad3f453 extends Twig_Template
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
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@Framework/FormTable/hidden_row.html.php", "/Volumes/DATA/Work/www/PartTime/aHao/lamdai-backend/vendor/symfony/framework-bundle/Resources/views/FormTable/hidden_row.html.php");
    }
}
