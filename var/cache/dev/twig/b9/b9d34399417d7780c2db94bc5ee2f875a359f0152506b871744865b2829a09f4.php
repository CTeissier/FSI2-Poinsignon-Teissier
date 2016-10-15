<?php

/* @Twig/Exception/error.rdf.twig */
class __TwigTemplate_44cc2a04771178186635fd372ff6a1247cdba9ab8ab537f10e174980cf960fde extends Twig_Template
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
        $__internal_2065616c4ee721c9397390d45993de994c60605d2049b3893190468119a63629 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2065616c4ee721c9397390d45993de994c60605d2049b3893190468119a63629->enter($__internal_2065616c4ee721c9397390d45993de994c60605d2049b3893190468119a63629_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.rdf.twig", 1)->display($context);
        
        $__internal_2065616c4ee721c9397390d45993de994c60605d2049b3893190468119a63629->leave($__internal_2065616c4ee721c9397390d45993de994c60605d2049b3893190468119a63629_prof);

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
