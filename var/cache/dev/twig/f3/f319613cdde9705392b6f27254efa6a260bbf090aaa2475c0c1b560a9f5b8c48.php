<?php

/* @Framework/Form/percent_widget.html.php */
class __TwigTemplate_699e949b3c8fd6e4726506f5fc8b9f66b2569ba7ede6cb5a8d4d8ac123661aab extends Twig_Template
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
        $__internal_d980c9a06e05ae5d35f63f26f2c33a15444f8f1dc96ffa7f999204a3978d645e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d980c9a06e05ae5d35f63f26f2c33a15444f8f1dc96ffa7f999204a3978d645e->enter($__internal_d980c9a06e05ae5d35f63f26f2c33a15444f8f1dc96ffa7f999204a3978d645e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_d980c9a06e05ae5d35f63f26f2c33a15444f8f1dc96ffa7f999204a3978d645e->leave($__internal_d980c9a06e05ae5d35f63f26f2c33a15444f8f1dc96ffa7f999204a3978d645e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/percent_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
    }
}
