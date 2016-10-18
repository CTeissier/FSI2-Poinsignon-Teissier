<?php

/* @Twig/Exception/error.atom.twig */
class __TwigTemplate_2117819ce6491c3a8086ba599fde8e6ff4d7bd42a8f7957272ca66675479ad87 extends Twig_Template
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
        $__internal_03068a65f574ac427e5beaf1958223d1712f058dd1a95c7e9e8b750c7992d767 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_03068a65f574ac427e5beaf1958223d1712f058dd1a95c7e9e8b750c7992d767->enter($__internal_03068a65f574ac427e5beaf1958223d1712f058dd1a95c7e9e8b750c7992d767_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.atom.twig", 1)->display($context);
        
        $__internal_03068a65f574ac427e5beaf1958223d1712f058dd1a95c7e9e8b750c7992d767->leave($__internal_03068a65f574ac427e5beaf1958223d1712f058dd1a95c7e9e8b750c7992d767_prof);

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
