<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_99a79faf3a51d742ca7f1453422f414c046f51fdeed3b056fcac725933d116f1 extends Twig_Template
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
        $__internal_20be6dc8384a35c6d4c2c72cf91237cc1b3eb323996005251c951f4c5e5a1dbc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_20be6dc8384a35c6d4c2c72cf91237cc1b3eb323996005251c951f4c5e5a1dbc->enter($__internal_20be6dc8384a35c6d4c2c72cf91237cc1b3eb323996005251c951f4c5e5a1dbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_20be6dc8384a35c6d4c2c72cf91237cc1b3eb323996005251c951f4c5e5a1dbc->leave($__internal_20be6dc8384a35c6d4c2c72cf91237cc1b3eb323996005251c951f4c5e5a1dbc_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
    }
}
