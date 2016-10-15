<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_56a44959b50cc32ccde25dfacdf44aa2947ae56b32f17fff7f8919dece685571 extends Twig_Template
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
        $__internal_5b391da03ca9121b0e9d21ce910ddd2bf408e2655ee2c0ca5e2e6e4f998ca6b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b391da03ca9121b0e9d21ce910ddd2bf408e2655ee2c0ca5e2e6e4f998ca6b8->enter($__internal_5b391da03ca9121b0e9d21ce910ddd2bf408e2655ee2c0ca5e2e6e4f998ca6b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_5b391da03ca9121b0e9d21ce910ddd2bf408e2655ee2c0ca5e2e6e4f998ca6b8->leave($__internal_5b391da03ca9121b0e9d21ce910ddd2bf408e2655ee2c0ca5e2e6e4f998ca6b8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
    }
}
