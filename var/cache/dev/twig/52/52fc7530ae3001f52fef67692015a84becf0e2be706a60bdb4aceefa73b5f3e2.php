<?php

/* @Twig/Exception/exception.js.twig */
class __TwigTemplate_6798bc0846b7e9837a945cf3bc2efc6fabbb5676f3b25b9dc40293c273db6a7d extends Twig_Template
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
        $__internal_279971c57c6f27b43b9753902acd7e51b3b371b2c73fad03c6487808f1be5257 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_279971c57c6f27b43b9753902acd7e51b3b371b2c73fad03c6487808f1be5257->enter($__internal_279971c57c6f27b43b9753902acd7e51b3b371b2c73fad03c6487808f1be5257_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_279971c57c6f27b43b9753902acd7e51b3b371b2c73fad03c6487808f1be5257->leave($__internal_279971c57c6f27b43b9753902acd7e51b3b371b2c73fad03c6487808f1be5257_prof);

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
