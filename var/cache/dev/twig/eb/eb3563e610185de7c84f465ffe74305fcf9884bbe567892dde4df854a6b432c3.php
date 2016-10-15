<?php

/* @Twig/Exception/exception.atom.twig */
class __TwigTemplate_eeb8f4cca19c6c3cffae04acb0f9cae1d014492a8f15536432a11330c69dd0dc extends Twig_Template
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
        $__internal_e4c4b2dab206719f5449ccf85c5c1c8873e6a1073ee449d1da3afec510e1436c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e4c4b2dab206719f5449ccf85c5c1c8873e6a1073ee449d1da3afec510e1436c->enter($__internal_e4c4b2dab206719f5449ccf85c5c1c8873e6a1073ee449d1da3afec510e1436c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_e4c4b2dab206719f5449ccf85c5c1c8873e6a1073ee449d1da3afec510e1436c->leave($__internal_e4c4b2dab206719f5449ccf85c5c1c8873e6a1073ee449d1da3afec510e1436c_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.atom.twig";
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
        return "{% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}
";
    }
}
