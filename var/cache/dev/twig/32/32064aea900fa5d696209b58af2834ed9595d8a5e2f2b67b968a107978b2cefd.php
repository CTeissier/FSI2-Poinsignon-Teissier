<?php

/* @Twig/Exception/exception.atom.twig */
class __TwigTemplate_144b33293fd2dd56691222deae6c1b31ad6cd5cd5978369f5fa8a5deeb3e2d69 extends Twig_Template
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
        $__internal_17c11b1f000c9527efc0f04bed6f90186bb2d8e349b30e68dda5daec3979e05b = $this->env->getExtension("native_profiler");
        $__internal_17c11b1f000c9527efc0f04bed6f90186bb2d8e349b30e68dda5daec3979e05b->enter($__internal_17c11b1f000c9527efc0f04bed6f90186bb2d8e349b30e68dda5daec3979e05b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_17c11b1f000c9527efc0f04bed6f90186bb2d8e349b30e68dda5daec3979e05b->leave($__internal_17c11b1f000c9527efc0f04bed6f90186bb2d8e349b30e68dda5daec3979e05b_prof);

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
}
/* {% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}*/
/* */
