<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_ce8d89a0294078448e0ad6d33e44508de3e7e1f1e47dd5fce2988c727966e8ac extends Twig_Template
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
        $__internal_8d4d3c1e8f6dce9c2ab3b4bb652268a2729f196b64d501a631d9ac1d9a28bba0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d4d3c1e8f6dce9c2ab3b4bb652268a2729f196b64d501a631d9ac1d9a28bba0->enter($__internal_8d4d3c1e8f6dce9c2ab3b4bb652268a2729f196b64d501a631d9ac1d9a28bba0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_8d4d3c1e8f6dce9c2ab3b4bb652268a2729f196b64d501a631d9ac1d9a28bba0->leave($__internal_8d4d3c1e8f6dce9c2ab3b4bb652268a2729f196b64d501a631d9ac1d9a28bba0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'text')) ?>
";
    }
}
