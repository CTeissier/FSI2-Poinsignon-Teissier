<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_b39be513db8ebf5537ccc22c6bcb5133730f0c5a02cbd96abf808e0d40a24db2 extends Twig_Template
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
        $__internal_69ba9015bb2917de3eb2815d625cd76b61ff4bcc1d28573ef3c99104ae9ae9bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_69ba9015bb2917de3eb2815d625cd76b61ff4bcc1d28573ef3c99104ae9ae9bb->enter($__internal_69ba9015bb2917de3eb2815d625cd76b61ff4bcc1d28573ef3c99104ae9ae9bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_69ba9015bb2917de3eb2815d625cd76b61ff4bcc1d28573ef3c99104ae9ae9bb->leave($__internal_69ba9015bb2917de3eb2815d625cd76b61ff4bcc1d28573ef3c99104ae9ae9bb_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
    }
}
