<?php

/* @Twig/Exception/exception.rdf.twig */
class __TwigTemplate_aa548c198d0704f204f7fd9fa7065d02e428d845f6ce7e41b7ca19f51256bcfa extends Twig_Template
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
        $__internal_ceea19209c32c2bc40c2eb0e02f80c0315c497840e8d466dfc4044eaaa589c3e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ceea19209c32c2bc40c2eb0e02f80c0315c497840e8d466dfc4044eaaa589c3e->enter($__internal_ceea19209c32c2bc40c2eb0e02f80c0315c497840e8d466dfc4044eaaa589c3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_ceea19209c32c2bc40c2eb0e02f80c0315c497840e8d466dfc4044eaaa589c3e->leave($__internal_ceea19209c32c2bc40c2eb0e02f80c0315c497840e8d466dfc4044eaaa589c3e_prof);

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

    public function getSource()
    {
        return "{% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}
";
    }
}
