<?php

/* @Twig/Exception/error.js.twig */
class __TwigTemplate_49ee69da4f448b95ac70930a911d3e47c80e78a0c5522b75fa4346d7686babfe extends Twig_Template
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
        $__internal_e0784746daf9b6e9bd2cc45a17fda7a9da5753294174a934ffcf915fea8a25f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e0784746daf9b6e9bd2cc45a17fda7a9da5753294174a934ffcf915fea8a25f6->enter($__internal_e0784746daf9b6e9bd2cc45a17fda7a9da5753294174a934ffcf915fea8a25f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

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
        
        $__internal_e0784746daf9b6e9bd2cc45a17fda7a9da5753294174a934ffcf915fea8a25f6->leave($__internal_e0784746daf9b6e9bd2cc45a17fda7a9da5753294174a934ffcf915fea8a25f6_prof);

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
