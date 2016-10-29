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
        $__internal_97c179423710d0bd4c8b9b92c3ea26c7ab4a0a7c831f316497ebccd5b90227be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_97c179423710d0bd4c8b9b92c3ea26c7ab4a0a7c831f316497ebccd5b90227be->enter($__internal_97c179423710d0bd4c8b9b92c3ea26c7ab4a0a7c831f316497ebccd5b90227be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_97c179423710d0bd4c8b9b92c3ea26c7ab4a0a7c831f316497ebccd5b90227be->leave($__internal_97c179423710d0bd4c8b9b92c3ea26c7ab4a0a7c831f316497ebccd5b90227be_prof);

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
