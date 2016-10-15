<?php

/* @Twig/Exception/error.js.twig */
class __TwigTemplate_60a2458090f1a2e2745ee0a2cbc4fa3c0b8cb9b520f59137de441902cea618d3 extends Twig_Template
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
        $__internal_440b7a2f6ac15493be6500fd701ee5c191c478086092cdcfd4b3d983f3ec9158 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_440b7a2f6ac15493be6500fd701ee5c191c478086092cdcfd4b3d983f3ec9158->enter($__internal_440b7a2f6ac15493be6500fd701ee5c191c478086092cdcfd4b3d983f3ec9158_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_440b7a2f6ac15493be6500fd701ee5c191c478086092cdcfd4b3d983f3ec9158->leave($__internal_440b7a2f6ac15493be6500fd701ee5c191c478086092cdcfd4b3d983f3ec9158_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }

    public function getSource()
    {
        return "/*
{{ status_code }} {{ status_text }}

*/
";
    }
}
