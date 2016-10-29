<?php

/* @Twig/Exception/error.txt.twig */
class __TwigTemplate_d87cfcb4c2a680deebaef0267a0a5431c03d09eea20105141179cc353caed809 extends Twig_Template
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
        $__internal_2ca6fc6b9d1827e28c621ed30bb77fceae0fead56d431851937cf1b6fdea052a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ca6fc6b9d1827e28c621ed30bb77fceae0fead56d431851937cf1b6fdea052a->enter($__internal_2ca6fc6b9d1827e28c621ed30bb77fceae0fead56d431851937cf1b6fdea052a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code"));
        echo " ";
        echo (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_2ca6fc6b9d1827e28c621ed30bb77fceae0fead56d431851937cf1b6fdea052a->leave($__internal_2ca6fc6b9d1827e28c621ed30bb77fceae0fead56d431851937cf1b6fdea052a_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 4,  22 => 1,);
    }

    public function getSource()
    {
        return "Oops! An Error Occurred
=======================

The server returned a \"{{ status_code }} {{ status_text }}\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
    }
}
