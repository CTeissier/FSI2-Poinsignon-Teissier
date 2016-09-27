<?php

/* @Twig/Exception/error.css.twig */
class __TwigTemplate_c5db600dc3e8cf3ceb96495f84f2b41a87666bcf598a3fc351ace672cce378c9 extends Twig_Template
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
        $__internal_64f13c2a728ea7af718a66063beaf48b6b1bad7b9f97aee29b368cf4b7696ca9 = $this->env->getExtension("native_profiler");
        $__internal_64f13c2a728ea7af718a66063beaf48b6b1bad7b9f97aee29b368cf4b7696ca9->enter($__internal_64f13c2a728ea7af718a66063beaf48b6b1bad7b9f97aee29b368cf4b7696ca9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

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
        
        $__internal_64f13c2a728ea7af718a66063beaf48b6b1bad7b9f97aee29b368cf4b7696ca9->leave($__internal_64f13c2a728ea7af718a66063beaf48b6b1bad7b9f97aee29b368cf4b7696ca9_prof);

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
}
/* /**/
/* {{ status_code }} {{ status_text }}*/
/* */
/* *//* */
/* */
