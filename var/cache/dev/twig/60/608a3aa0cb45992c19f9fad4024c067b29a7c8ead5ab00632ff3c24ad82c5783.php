<?php

/* @Twig/Exception/exception.css.twig */
class __TwigTemplate_f4715851298b09091c66a09fdfe063056b07ea708c389fc10b4043464f11a409 extends Twig_Template
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
        $__internal_8a6f925f9a4f93ce144293e86a89c32aa1d0893ee26e89e98dee2d08820ce897 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a6f925f9a4f93ce144293e86a89c32aa1d0893ee26e89e98dee2d08820ce897->enter($__internal_8a6f925f9a4f93ce144293e86a89c32aa1d0893ee26e89e98dee2d08820ce897_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_8a6f925f9a4f93ce144293e86a89c32aa1d0893ee26e89e98dee2d08820ce897->leave($__internal_8a6f925f9a4f93ce144293e86a89c32aa1d0893ee26e89e98dee2d08820ce897_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }

    public function getSource()
    {
        return "/*
{% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}
*/
";
    }
}
