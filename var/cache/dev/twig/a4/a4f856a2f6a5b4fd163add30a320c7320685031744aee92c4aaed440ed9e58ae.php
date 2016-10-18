<?php

/* @Twig/Exception/exception.js.twig */
class __TwigTemplate_bea1da788aa271dab7851a104c8545929e42087f8f990e460081f6e270dac34c extends Twig_Template
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
        $__internal_be523cdfbaf7741c04cd0a371c9907a4263acc06726699291402b8d37a84af35 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be523cdfbaf7741c04cd0a371c9907a4263acc06726699291402b8d37a84af35->enter($__internal_be523cdfbaf7741c04cd0a371c9907a4263acc06726699291402b8d37a84af35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_be523cdfbaf7741c04cd0a371c9907a4263acc06726699291402b8d37a84af35->leave($__internal_be523cdfbaf7741c04cd0a371c9907a4263acc06726699291402b8d37a84af35_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.js.twig";
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
