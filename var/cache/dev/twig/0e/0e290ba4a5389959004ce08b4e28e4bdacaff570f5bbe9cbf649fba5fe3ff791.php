<?php

/* @Twig/Exception/exception.rdf.twig */
class __TwigTemplate_82caa30de6980c6f30fdaaca2feddef8dd5e589d9266f8e7b5d66b329579c6e3 extends Twig_Template
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
        $__internal_9f748edbc71b311f754d1455138f656d9b826d6a8f0c167a59edd6111508856e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f748edbc71b311f754d1455138f656d9b826d6a8f0c167a59edd6111508856e->enter($__internal_9f748edbc71b311f754d1455138f656d9b826d6a8f0c167a59edd6111508856e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_9f748edbc71b311f754d1455138f656d9b826d6a8f0c167a59edd6111508856e->leave($__internal_9f748edbc71b311f754d1455138f656d9b826d6a8f0c167a59edd6111508856e_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.rdf.twig";
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
