<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_1554e5b838857127b9b730d9aa7d201eaddd9d769a9d828ccd4747818850264b extends Twig_Template
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
        $__internal_d836bdddd90e897395e1dd90ce0afaab57ae96eb933c689c73491b8dad16a5a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d836bdddd90e897395e1dd90ce0afaab57ae96eb933c689c73491b8dad16a5a7->enter($__internal_d836bdddd90e897395e1dd90ce0afaab57ae96eb933c689c73491b8dad16a5a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_d836bdddd90e897395e1dd90ce0afaab57ae96eb933c689c73491b8dad16a5a7->leave($__internal_d836bdddd90e897395e1dd90ce0afaab57ae96eb933c689c73491b8dad16a5a7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
    }
}
