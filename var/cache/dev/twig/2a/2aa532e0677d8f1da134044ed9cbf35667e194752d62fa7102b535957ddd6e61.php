<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_1341d5b2863b0eccbac399d4da9a4509c1211d23db012ab30d50676c93935f4f extends Twig_Template
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
        $__internal_ac6fc22c37b9c977bd64683b6dc478cb27817dd0f7814a8a324f507163792ce8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac6fc22c37b9c977bd64683b6dc478cb27817dd0f7814a8a324f507163792ce8->enter($__internal_ac6fc22c37b9c977bd64683b6dc478cb27817dd0f7814a8a324f507163792ce8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_ac6fc22c37b9c977bd64683b6dc478cb27817dd0f7814a8a324f507163792ce8->leave($__internal_ac6fc22c37b9c977bd64683b6dc478cb27817dd0f7814a8a324f507163792ce8_prof);

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
