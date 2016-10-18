<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_8fd0d8b8a25840d1bac716ece0d76bdb1ba09869a9792517eb59d0e0cc98381b extends Twig_Template
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
        $__internal_d0d4acf42e2177087783f0af09055b8548a845758cf92ddf8affc0e24bae1426 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d0d4acf42e2177087783f0af09055b8548a845758cf92ddf8affc0e24bae1426->enter($__internal_d0d4acf42e2177087783f0af09055b8548a845758cf92ddf8affc0e24bae1426_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_d0d4acf42e2177087783f0af09055b8548a845758cf92ddf8affc0e24bae1426->leave($__internal_d0d4acf42e2177087783f0af09055b8548a845758cf92ddf8affc0e24bae1426_prof);

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
