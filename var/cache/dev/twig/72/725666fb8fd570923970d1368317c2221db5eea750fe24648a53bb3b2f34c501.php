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
        $__internal_278de27d80e4cffaad52ec9c8c391eca8222fb9bbceb18e2f1d0fd130915ffa3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_278de27d80e4cffaad52ec9c8c391eca8222fb9bbceb18e2f1d0fd130915ffa3->enter($__internal_278de27d80e4cffaad52ec9c8c391eca8222fb9bbceb18e2f1d0fd130915ffa3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_278de27d80e4cffaad52ec9c8c391eca8222fb9bbceb18e2f1d0fd130915ffa3->leave($__internal_278de27d80e4cffaad52ec9c8c391eca8222fb9bbceb18e2f1d0fd130915ffa3_prof);

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
