<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_9560eec854ee8bc6413b20f813e9800467e36c96786e11ed6d253017e6af0ec4 extends Twig_Template
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
        $__internal_fd8f0a0f6f192ef9e410fb3e86eefbb032fed689f695d02797f6e09bddf19759 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd8f0a0f6f192ef9e410fb3e86eefbb032fed689f695d02797f6e09bddf19759->enter($__internal_fd8f0a0f6f192ef9e410fb3e86eefbb032fed689f695d02797f6e09bddf19759_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_fd8f0a0f6f192ef9e410fb3e86eefbb032fed689f695d02797f6e09bddf19759->leave($__internal_fd8f0a0f6f192ef9e410fb3e86eefbb032fed689f695d02797f6e09bddf19759_prof);

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
