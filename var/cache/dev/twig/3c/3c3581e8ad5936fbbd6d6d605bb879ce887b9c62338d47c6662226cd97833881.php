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
        $__internal_c0904f7f5f97637eed4a8d41c80254feb438dbb6946f4a556877fc0abc1e6367 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c0904f7f5f97637eed4a8d41c80254feb438dbb6946f4a556877fc0abc1e6367->enter($__internal_c0904f7f5f97637eed4a8d41c80254feb438dbb6946f4a556877fc0abc1e6367_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_c0904f7f5f97637eed4a8d41c80254feb438dbb6946f4a556877fc0abc1e6367->leave($__internal_c0904f7f5f97637eed4a8d41c80254feb438dbb6946f4a556877fc0abc1e6367_prof);

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
