<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_4bf7c43bbdd60a9210e3e8bd6f59f5ed1da5db75da6855a69f3ca74c007ff8e0 extends Twig_Template
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
        $__internal_2c762f38c80bfb2793d57e50e2c309628f4098b717751e15cd153386365da52e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c762f38c80bfb2793d57e50e2c309628f4098b717751e15cd153386365da52e->enter($__internal_2c762f38c80bfb2793d57e50e2c309628f4098b717751e15cd153386365da52e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_2c762f38c80bfb2793d57e50e2c309628f4098b717751e15cd153386365da52e->leave($__internal_2c762f38c80bfb2793d57e50e2c309628f4098b717751e15cd153386365da52e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo str_replace('{{ widget }}', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
    }
}
