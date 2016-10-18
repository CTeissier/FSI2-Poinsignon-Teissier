<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_210cdf156c3ee99e64c7279d424b209db442ef84febad2ef6219cb2d8844bc6f extends Twig_Template
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
        $__internal_53a8637252d168cb0885698a39634b1ccc233228630b14a5c5ffe35ddd7e178e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_53a8637252d168cb0885698a39634b1ccc233228630b14a5c5ffe35ddd7e178e->enter($__internal_53a8637252d168cb0885698a39634b1ccc233228630b14a5c5ffe35ddd7e178e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_53a8637252d168cb0885698a39634b1ccc233228630b14a5c5ffe35ddd7e178e->leave($__internal_53a8637252d168cb0885698a39634b1ccc233228630b14a5c5ffe35ddd7e178e_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }

    public function getSource()
    {
        return "/*
{% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}
*/
";
    }
}
