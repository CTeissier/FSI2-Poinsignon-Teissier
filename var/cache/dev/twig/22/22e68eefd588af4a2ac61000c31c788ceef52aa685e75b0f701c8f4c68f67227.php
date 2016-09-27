<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_be88cf65a14f41e22dad4526264c80ed65f742601d00aa76b078b25c35aec9ba extends Twig_Template
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
        $__internal_883f6f6b6099f442973e3847834d4ef8c3cfa266b9a3261e7369c27fc29e436a = $this->env->getExtension("native_profiler");
        $__internal_883f6f6b6099f442973e3847834d4ef8c3cfa266b9a3261e7369c27fc29e436a->enter($__internal_883f6f6b6099f442973e3847834d4ef8c3cfa266b9a3261e7369c27fc29e436a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_883f6f6b6099f442973e3847834d4ef8c3cfa266b9a3261e7369c27fc29e436a->leave($__internal_883f6f6b6099f442973e3847834d4ef8c3cfa266b9a3261e7369c27fc29e436a_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}*/
/* */
