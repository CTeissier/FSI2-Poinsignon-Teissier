<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_16e4b26248733630d9e748a768e10a7e2c702b12d6f066aa5efd9aa8fd09d9c2 extends Twig_Template
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
        $__internal_27feae3c07823977c1b552412751b68d43b1003104b51a59e9349f101e1e1feb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_27feae3c07823977c1b552412751b68d43b1003104b51a59e9349f101e1e1feb->enter($__internal_27feae3c07823977c1b552412751b68d43b1003104b51a59e9349f101e1e1feb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_27feae3c07823977c1b552412751b68d43b1003104b51a59e9349f101e1e1feb->leave($__internal_27feae3c07823977c1b552412751b68d43b1003104b51a59e9349f101e1e1feb_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
    }
}
