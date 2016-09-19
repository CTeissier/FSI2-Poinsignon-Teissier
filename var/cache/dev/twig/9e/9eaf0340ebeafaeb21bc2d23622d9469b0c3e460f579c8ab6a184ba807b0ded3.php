<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_10aa483741284b990c2ce02b7eafa9077c47b6a6bf2bfb01414cb4d4005973ff extends Twig_Template
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
        $__internal_e4915b890c61fad31b88e60148bc9e53c8d1405fdb475b029cede8c2941909ca = $this->env->getExtension("native_profiler");
        $__internal_e4915b890c61fad31b88e60148bc9e53c8d1405fdb475b029cede8c2941909ca->enter($__internal_e4915b890c61fad31b88e60148bc9e53c8d1405fdb475b029cede8c2941909ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_e4915b890c61fad31b88e60148bc9e53c8d1405fdb475b029cede8c2941909ca->leave($__internal_e4915b890c61fad31b88e60148bc9e53c8d1405fdb475b029cede8c2941909ca_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="<?php echo isset($type) ? $view->escape($type) : 'text' ?>" <?php echo $view['form']->block($form, 'widget_attributes') ?><?php if (!empty($value) || is_numeric($value)): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?> />*/
/* */
