<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_5b9d7d8cb6d4e11c8d46f5bca12a2ee726565a2e601c03dbcbcc55cac01f4071 extends Twig_Template
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
        $__internal_31b650f477f2aa849492a7aaaa0e08228cae591bada73cb6b135f773c334e83e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_31b650f477f2aa849492a7aaaa0e08228cae591bada73cb6b135f773c334e83e->enter($__internal_31b650f477f2aa849492a7aaaa0e08228cae591bada73cb6b135f773c334e83e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_31b650f477f2aa849492a7aaaa0e08228cae591bada73cb6b135f773c334e83e->leave($__internal_31b650f477f2aa849492a7aaaa0e08228cae591bada73cb6b135f773c334e83e_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
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
