<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_661925922306e69caac3b985dbc213da29e1723d3690f3490f43bc68f740431d extends Twig_Template
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
        $__internal_916c41a689fabda09d505f3255802085dcf12bff8f88def6f1c9a7fdc48d233b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_916c41a689fabda09d505f3255802085dcf12bff8f88def6f1c9a7fdc48d233b->enter($__internal_916c41a689fabda09d505f3255802085dcf12bff8f88def6f1c9a7fdc48d233b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_916c41a689fabda09d505f3255802085dcf12bff8f88def6f1c9a7fdc48d233b->leave($__internal_916c41a689fabda09d505f3255802085dcf12bff8f88def6f1c9a7fdc48d233b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
    }
}
