<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_ec91c82595c800df8c630f61b294de076e9b46b0580c80e412edee4c232c00c4 extends Twig_Template
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
        $__internal_57b32749bbc883f45f8aeee2a758c11cd212aba674cf828b389ed607c0f8e836 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_57b32749bbc883f45f8aeee2a758c11cd212aba674cf828b389ed607c0f8e836->enter($__internal_57b32749bbc883f45f8aeee2a758c11cd212aba674cf828b389ed607c0f8e836_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_57b32749bbc883f45f8aeee2a758c11cd212aba674cf828b389ed607c0f8e836->leave($__internal_57b32749bbc883f45f8aeee2a758c11cd212aba674cf828b389ed607c0f8e836_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
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
