<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_d5d5ab2cbf41c5d6817b83553b66ecb87dc0b481fbd9496281c7fd89b55f6cef extends Twig_Template
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
        $__internal_ed08d9861f11d13fab908685233a258177c8ba0a0173a1611edd282fda29d054 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed08d9861f11d13fab908685233a258177c8ba0a0173a1611edd282fda29d054->enter($__internal_ed08d9861f11d13fab908685233a258177c8ba0a0173a1611edd282fda29d054_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_ed08d9861f11d13fab908685233a258177c8ba0a0173a1611edd282fda29d054->leave($__internal_ed08d9861f11d13fab908685233a258177c8ba0a0173a1611edd282fda29d054_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
    }
}
