<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_a579334f8e3541cd631ba1511c20a07619388fd25b760d4788fe6f1e6824943a extends Twig_Template
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
        $__internal_f389ba7f627814b5e76e0e595a90ea9d39bbbc412a7b53a9e593ae8801457e2e = $this->env->getExtension("native_profiler");
        $__internal_f389ba7f627814b5e76e0e595a90ea9d39bbbc412a7b53a9e593ae8801457e2e->enter($__internal_f389ba7f627814b5e76e0e595a90ea9d39bbbc412a7b53a9e593ae8801457e2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_f389ba7f627814b5e76e0e595a90ea9d39bbbc412a7b53a9e593ae8801457e2e->leave($__internal_f389ba7f627814b5e76e0e595a90ea9d39bbbc412a7b53a9e593ae8801457e2e_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
