<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_432ae27125c0f67b11bbbf27dd56d48b5a74e5413599ee50a6112a7253dc9516 extends Twig_Template
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
        $__internal_5f326c669a7b6d3696a7b45889daddab01c7bdd515dee326f42162f331c15ebd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f326c669a7b6d3696a7b45889daddab01c7bdd515dee326f42162f331c15ebd->enter($__internal_5f326c669a7b6d3696a7b45889daddab01c7bdd515dee326f42162f331c15ebd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_5f326c669a7b6d3696a7b45889daddab01c7bdd515dee326f42162f331c15ebd->leave($__internal_5f326c669a7b6d3696a7b45889daddab01c7bdd515dee326f42162f331c15ebd_prof);

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
