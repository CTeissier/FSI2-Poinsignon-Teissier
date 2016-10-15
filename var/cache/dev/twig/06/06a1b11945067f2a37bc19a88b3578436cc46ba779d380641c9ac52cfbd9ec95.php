<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_b8282bfcaca91e31c725369cbb1ab6b9301c0826c6fd691a6bf4118462fc0a66 extends Twig_Template
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
        $__internal_98ff9099406fc7e3e6831a4e03b429be823a9794b0f8b22bdb39036f66a6b534 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_98ff9099406fc7e3e6831a4e03b429be823a9794b0f8b22bdb39036f66a6b534->enter($__internal_98ff9099406fc7e3e6831a4e03b429be823a9794b0f8b22bdb39036f66a6b534_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_98ff9099406fc7e3e6831a4e03b429be823a9794b0f8b22bdb39036f66a6b534->leave($__internal_98ff9099406fc7e3e6831a4e03b429be823a9794b0f8b22bdb39036f66a6b534_prof);

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
