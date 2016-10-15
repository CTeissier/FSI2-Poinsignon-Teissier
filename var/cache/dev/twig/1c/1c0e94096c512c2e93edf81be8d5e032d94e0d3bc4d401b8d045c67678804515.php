<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_65aeb25f77287b4fcde9564e398cc9da1194f8a13b26cecebd4a44e93112d06b extends Twig_Template
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
        $__internal_6cc0bf6c4686cd9e16754d9f1f2db9fc75b001ee39ff5b823b63a6610465a5e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6cc0bf6c4686cd9e16754d9f1f2db9fc75b001ee39ff5b823b63a6610465a5e4->enter($__internal_6cc0bf6c4686cd9e16754d9f1f2db9fc75b001ee39ff5b823b63a6610465a5e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_6cc0bf6c4686cd9e16754d9f1f2db9fc75b001ee39ff5b823b63a6610465a5e4->leave($__internal_6cc0bf6c4686cd9e16754d9f1f2db9fc75b001ee39ff5b823b63a6610465a5e4_prof);

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
