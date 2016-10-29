<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_5c6f15e761bf13a7170e7a74f801d4e036abb7a32e38692aca7ca01050dd08b7 extends Twig_Template
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
        $__internal_2a397e976f7ae6d7ea0db556b4e2d3b518b6071c17a2dddd9060cb930b6290b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a397e976f7ae6d7ea0db556b4e2d3b518b6071c17a2dddd9060cb930b6290b5->enter($__internal_2a397e976f7ae6d7ea0db556b4e2d3b518b6071c17a2dddd9060cb930b6290b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_2a397e976f7ae6d7ea0db556b4e2d3b518b6071c17a2dddd9060cb930b6290b5->leave($__internal_2a397e976f7ae6d7ea0db556b4e2d3b518b6071c17a2dddd9060cb930b6290b5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
    }
}
