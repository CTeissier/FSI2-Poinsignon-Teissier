<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_437c065ee2cb81ba8a0830e32136e620d2e03ff0b2b89b15f28c9a425181b675 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_72a803df45efce65d344c8a7425725696618e41faae84005da59be8836c5b642 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_72a803df45efce65d344c8a7425725696618e41faae84005da59be8836c5b642->enter($__internal_72a803df45efce65d344c8a7425725696618e41faae84005da59be8836c5b642_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_72a803df45efce65d344c8a7425725696618e41faae84005da59be8836c5b642->leave($__internal_72a803df45efce65d344c8a7425725696618e41faae84005da59be8836c5b642_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
    }
}
