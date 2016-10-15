<?php

/* @Twig/Exception/error.css.twig */
class __TwigTemplate_9c1fb95a0839ddaf6e803887bbd78d8b7e07777c82b51413f003fc7a20c11ed2 extends Twig_Template
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
        $__internal_572d1e850a5e9c7c672c2816263a91d4c629454fc09a8956cd9c44542faea339 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_572d1e850a5e9c7c672c2816263a91d4c629454fc09a8956cd9c44542faea339->enter($__internal_572d1e850a5e9c7c672c2816263a91d4c629454fc09a8956cd9c44542faea339_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_572d1e850a5e9c7c672c2816263a91d4c629454fc09a8956cd9c44542faea339->leave($__internal_572d1e850a5e9c7c672c2816263a91d4c629454fc09a8956cd9c44542faea339_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.css.twig";
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
