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
        $__internal_aeb0de9d158462ed8d39bdd15c51af33c8292054f71b9f1dc5fb40f8a366fc8e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aeb0de9d158462ed8d39bdd15c51af33c8292054f71b9f1dc5fb40f8a366fc8e->enter($__internal_aeb0de9d158462ed8d39bdd15c51af33c8292054f71b9f1dc5fb40f8a366fc8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_aeb0de9d158462ed8d39bdd15c51af33c8292054f71b9f1dc5fb40f8a366fc8e->leave($__internal_aeb0de9d158462ed8d39bdd15c51af33c8292054f71b9f1dc5fb40f8a366fc8e_prof);

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
