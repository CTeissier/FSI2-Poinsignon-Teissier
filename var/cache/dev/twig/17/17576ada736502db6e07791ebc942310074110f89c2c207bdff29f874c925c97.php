<?php

/* @Twig/Exception/error.rdf.twig */
class __TwigTemplate_7235a24b2e5ce9c8909e799c7a01b762ac32254e6f1549a00e1b41ed8fe886ab extends Twig_Template
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
        $__internal_b79921ce411d688cb7ec5aff176fa262193b9d8588a37862ce24845fca21416e = $this->env->getExtension("native_profiler");
        $__internal_b79921ce411d688cb7ec5aff176fa262193b9d8588a37862ce24845fca21416e->enter($__internal_b79921ce411d688cb7ec5aff176fa262193b9d8588a37862ce24845fca21416e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.rdf.twig", 1)->display($context);
        
        $__internal_b79921ce411d688cb7ec5aff176fa262193b9d8588a37862ce24845fca21416e->leave($__internal_b79921ce411d688cb7ec5aff176fa262193b9d8588a37862ce24845fca21416e_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
