<?php

/* @Twig/Exception/error.rdf.twig */
class __TwigTemplate_f8150c70d3f9fd1ee5257f74449cce0c246e857ab472f3b71b6a62a823aafcf7 extends Twig_Template
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
        $__internal_f8d338f2f77bea1ab6b5d5b876da87e7cc973f94ccf5432a763350581822216f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f8d338f2f77bea1ab6b5d5b876da87e7cc973f94ccf5432a763350581822216f->enter($__internal_f8d338f2f77bea1ab6b5d5b876da87e7cc973f94ccf5432a763350581822216f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.rdf.twig", 1)->display($context);
        
        $__internal_f8d338f2f77bea1ab6b5d5b876da87e7cc973f94ccf5432a763350581822216f->leave($__internal_f8d338f2f77bea1ab6b5d5b876da87e7cc973f94ccf5432a763350581822216f_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "{% include '@Twig/Exception/error.xml.twig' %}
";
    }
}
