<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_60dc3d57fb47f7e68ad07ea06c697bc1c5db063a829e6831db92cf679e296ac6 extends Twig_Template
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
        $__internal_65c5b1dbc7c6ae63bcf645dd65121bb52774355e0db67b2527d18df424ccb9d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_65c5b1dbc7c6ae63bcf645dd65121bb52774355e0db67b2527d18df424ccb9d3->enter($__internal_65c5b1dbc7c6ae63bcf645dd65121bb52774355e0db67b2527d18df424ccb9d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_65c5b1dbc7c6ae63bcf645dd65121bb52774355e0db67b2527d18df424ccb9d3->leave($__internal_65c5b1dbc7c6ae63bcf645dd65121bb52774355e0db67b2527d18df424ccb9d3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
    }
}
