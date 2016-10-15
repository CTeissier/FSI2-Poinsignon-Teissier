<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_a4463f5808c2ee956238ca74adf08767baf8ae7c9ff4f558ff95bdd75ec68522 extends Twig_Template
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
        $__internal_c9fc15c753746f4fb8cc7956acfc0b314a5663c68805119602efed542bab9972 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c9fc15c753746f4fb8cc7956acfc0b314a5663c68805119602efed542bab9972->enter($__internal_c9fc15c753746f4fb8cc7956acfc0b314a5663c68805119602efed542bab9972_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_c9fc15c753746f4fb8cc7956acfc0b314a5663c68805119602efed542bab9972->leave($__internal_c9fc15c753746f4fb8cc7956acfc0b314a5663c68805119602efed542bab9972_prof);

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
