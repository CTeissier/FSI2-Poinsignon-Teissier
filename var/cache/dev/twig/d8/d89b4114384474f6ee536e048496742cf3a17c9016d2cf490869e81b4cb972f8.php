<?php

/* @Twig/Exception/error.atom.twig */
class __TwigTemplate_6141bdd47cd5883b827e46070c3a54b43b3a7cf67e71c8241ec5c225e150f60d extends Twig_Template
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
        $__internal_96aaac576adc33be3a3ab28e19bce4ce003084a75ac871d936f150adf7294e36 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_96aaac576adc33be3a3ab28e19bce4ce003084a75ac871d936f150adf7294e36->enter($__internal_96aaac576adc33be3a3ab28e19bce4ce003084a75ac871d936f150adf7294e36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.atom.twig", 1)->display($context);
        
        $__internal_96aaac576adc33be3a3ab28e19bce4ce003084a75ac871d936f150adf7294e36->leave($__internal_96aaac576adc33be3a3ab28e19bce4ce003084a75ac871d936f150adf7294e36_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.atom.twig";
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
