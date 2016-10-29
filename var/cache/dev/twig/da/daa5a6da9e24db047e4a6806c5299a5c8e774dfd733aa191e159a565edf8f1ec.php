<?php

/* @Twig/Exception/exception.css.twig */
class __TwigTemplate_75bf70dd59c8d23ff4683c4470176a7fd84e4e843faeca490720c20845f81afb extends Twig_Template
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
        $__internal_f854f96a3bc176cf51318dea4253c222a3e7d186df0992109bc389fd2ad3c794 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f854f96a3bc176cf51318dea4253c222a3e7d186df0992109bc389fd2ad3c794->enter($__internal_f854f96a3bc176cf51318dea4253c222a3e7d186df0992109bc389fd2ad3c794_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_f854f96a3bc176cf51318dea4253c222a3e7d186df0992109bc389fd2ad3c794->leave($__internal_f854f96a3bc176cf51318dea4253c222a3e7d186df0992109bc389fd2ad3c794_prof);

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
