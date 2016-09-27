<?php

/* @Twig/Exception/exception.js.twig */
class __TwigTemplate_d120e87e06f7f7dbb107a5d3352007b82c7c8fe03f7597cbfe4d28369d1311a6 extends Twig_Template
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
        $__internal_acd60bae49fdc933878b995c03b99b1c775b7639b4467e0bd33bb38e4a5440fe = $this->env->getExtension("native_profiler");
        $__internal_acd60bae49fdc933878b995c03b99b1c775b7639b4467e0bd33bb38e4a5440fe->enter($__internal_acd60bae49fdc933878b995c03b99b1c775b7639b4467e0bd33bb38e4a5440fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_acd60bae49fdc933878b995c03b99b1c775b7639b4467e0bd33bb38e4a5440fe->leave($__internal_acd60bae49fdc933878b995c03b99b1c775b7639b4467e0bd33bb38e4a5440fe_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}*/
/* *//* */
/* */
