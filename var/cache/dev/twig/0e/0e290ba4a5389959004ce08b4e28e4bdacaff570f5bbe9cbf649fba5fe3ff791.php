<?php

/* @Twig/Exception/exception.rdf.twig */
class __TwigTemplate_82caa30de6980c6f30fdaaca2feddef8dd5e589d9266f8e7b5d66b329579c6e3 extends Twig_Template
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
        $__internal_983c192617edf4e55878bc7e23c04a220e7364a60a55e80e309acdc58f175e5d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_983c192617edf4e55878bc7e23c04a220e7364a60a55e80e309acdc58f175e5d->enter($__internal_983c192617edf4e55878bc7e23c04a220e7364a60a55e80e309acdc58f175e5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_983c192617edf4e55878bc7e23c04a220e7364a60a55e80e309acdc58f175e5d->leave($__internal_983c192617edf4e55878bc7e23c04a220e7364a60a55e80e309acdc58f175e5d_prof);

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
