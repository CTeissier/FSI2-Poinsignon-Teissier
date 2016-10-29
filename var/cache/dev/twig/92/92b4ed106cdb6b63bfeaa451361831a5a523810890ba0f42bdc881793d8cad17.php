<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_210cdf156c3ee99e64c7279d424b209db442ef84febad2ef6219cb2d8844bc6f extends Twig_Template
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
        $__internal_8658e54aaf2a3cc708c372c7b72a3e63bc45ad4303607737d144dcced3c3f658 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8658e54aaf2a3cc708c372c7b72a3e63bc45ad4303607737d144dcced3c3f658->enter($__internal_8658e54aaf2a3cc708c372c7b72a3e63bc45ad4303607737d144dcced3c3f658_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_8658e54aaf2a3cc708c372c7b72a3e63bc45ad4303607737d144dcced3c3f658->leave($__internal_8658e54aaf2a3cc708c372c7b72a3e63bc45ad4303607737d144dcced3c3f658_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
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
