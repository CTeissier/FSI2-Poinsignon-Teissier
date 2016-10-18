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
        $__internal_47a2eff99206a6fbb73574c788c112d9cd0465e58896b10bbdfe526ad1f4d8b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_47a2eff99206a6fbb73574c788c112d9cd0465e58896b10bbdfe526ad1f4d8b1->enter($__internal_47a2eff99206a6fbb73574c788c112d9cd0465e58896b10bbdfe526ad1f4d8b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_47a2eff99206a6fbb73574c788c112d9cd0465e58896b10bbdfe526ad1f4d8b1->leave($__internal_47a2eff99206a6fbb73574c788c112d9cd0465e58896b10bbdfe526ad1f4d8b1_prof);

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
