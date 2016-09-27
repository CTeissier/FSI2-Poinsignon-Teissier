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
        $__internal_4295921c64e29b6be2a7ab953db42eb06496506d0c18dc4c5ad578bcfbb95dd8 = $this->env->getExtension("native_profiler");
        $__internal_4295921c64e29b6be2a7ab953db42eb06496506d0c18dc4c5ad578bcfbb95dd8->enter($__internal_4295921c64e29b6be2a7ab953db42eb06496506d0c18dc4c5ad578bcfbb95dd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_4295921c64e29b6be2a7ab953db42eb06496506d0c18dc4c5ad578bcfbb95dd8->leave($__internal_4295921c64e29b6be2a7ab953db42eb06496506d0c18dc4c5ad578bcfbb95dd8_prof);

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
