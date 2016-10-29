<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_1b29a1fbfb89068939360239850d82b45987636fe15bee040ce2323222a03196 extends Twig_Template
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
        $__internal_9020007cbd7ed91b0917d05b0dc3023f81dc654328bd1762435d75414bd8cb90 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9020007cbd7ed91b0917d05b0dc3023f81dc654328bd1762435d75414bd8cb90->enter($__internal_9020007cbd7ed91b0917d05b0dc3023f81dc654328bd1762435d75414bd8cb90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_9020007cbd7ed91b0917d05b0dc3023f81dc654328bd1762435d75414bd8cb90->leave($__internal_9020007cbd7ed91b0917d05b0dc3023f81dc654328bd1762435d75414bd8cb90_prof);

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
