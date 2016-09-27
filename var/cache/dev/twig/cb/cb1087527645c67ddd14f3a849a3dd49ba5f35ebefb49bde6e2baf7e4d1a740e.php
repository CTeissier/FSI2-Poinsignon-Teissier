<?php

/* @Twig/Exception/error.atom.twig */
class __TwigTemplate_8ae68ae96579e8facf60b55b8872527e380ac3673be7b57180c6bac7b8a5caad extends Twig_Template
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
        $__internal_1615f45ff786ba4b62d1e66be8b9fc247f50847706bf2ea0b17255602eb4f9ce = $this->env->getExtension("native_profiler");
        $__internal_1615f45ff786ba4b62d1e66be8b9fc247f50847706bf2ea0b17255602eb4f9ce->enter($__internal_1615f45ff786ba4b62d1e66be8b9fc247f50847706bf2ea0b17255602eb4f9ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.atom.twig", 1)->display($context);
        
        $__internal_1615f45ff786ba4b62d1e66be8b9fc247f50847706bf2ea0b17255602eb4f9ce->leave($__internal_1615f45ff786ba4b62d1e66be8b9fc247f50847706bf2ea0b17255602eb4f9ce_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
