<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_4fa87fe044c11da288115f5255af85e18450bc9c1b859b276b40ecc92dacdab4 extends Twig_Template
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
        $__internal_c496fc46f95270080f744b1d61e844e7b79a4b00e003610b60a21da1bb95f6b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c496fc46f95270080f744b1d61e844e7b79a4b00e003610b60a21da1bb95f6b6->enter($__internal_c496fc46f95270080f744b1d61e844e7b79a4b00e003610b60a21da1bb95f6b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_c496fc46f95270080f744b1d61e844e7b79a4b00e003610b60a21da1bb95f6b6->leave($__internal_c496fc46f95270080f744b1d61e844e7b79a4b00e003610b60a21da1bb95f6b6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
    }
}
