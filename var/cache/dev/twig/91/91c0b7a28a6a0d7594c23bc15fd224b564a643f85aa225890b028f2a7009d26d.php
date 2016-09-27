<?php

/* @Twig/Exception/error.txt.twig */
class __TwigTemplate_970c073ab39a8ff3266d02280cfee292a3218bcbfa02651bb1acc4058015961c extends Twig_Template
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
        $__internal_588a56fecab84babfb91b1c87e5d9aee8f64bfbc78e85125d9c1d71c50267348 = $this->env->getExtension("native_profiler");
        $__internal_588a56fecab84babfb91b1c87e5d9aee8f64bfbc78e85125d9c1d71c50267348->enter($__internal_588a56fecab84babfb91b1c87e5d9aee8f64bfbc78e85125d9c1d71c50267348_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.txt.twig"));

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
        
        $__internal_588a56fecab84babfb91b1c87e5d9aee8f64bfbc78e85125d9c1d71c50267348->leave($__internal_588a56fecab84babfb91b1c87e5d9aee8f64bfbc78e85125d9c1d71c50267348_prof);

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
}
/* Oops! An Error Occurred*/
/* =======================*/
/* */
/* The server returned a "{{ status_code }} {{ status_text }}".*/
/* */
/* Something is broken. Please let us know what you were doing when this error occurred.*/
/* We will fix it as soon as possible. Sorry for any inconvenience caused.*/
/* */
