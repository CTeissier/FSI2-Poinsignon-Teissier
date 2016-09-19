<?php

/* @Twig/Exception/exception.rdf.twig */
class __TwigTemplate_18ccf329624bcad8cfe82d961bdfdf54c082e9e781b0def217991289eddf527e extends Twig_Template
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
        $__internal_1847c499e92e31cb0ff11bb90d4acf1671e83f99e82cf227eff9e7cc464b196e = $this->env->getExtension("native_profiler");
        $__internal_1847c499e92e31cb0ff11bb90d4acf1671e83f99e82cf227eff9e7cc464b196e->enter($__internal_1847c499e92e31cb0ff11bb90d4acf1671e83f99e82cf227eff9e7cc464b196e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_1847c499e92e31cb0ff11bb90d4acf1671e83f99e82cf227eff9e7cc464b196e->leave($__internal_1847c499e92e31cb0ff11bb90d4acf1671e83f99e82cf227eff9e7cc464b196e_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.rdf.twig";
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
