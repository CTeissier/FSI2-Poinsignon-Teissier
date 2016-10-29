<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_ea8d1dfe082a35f250c40b9d6c9cedc7cffd7baedce6e797eda8a58e9ea273a2 extends Twig_Template
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
        $__internal_b9f00b939b29355dbe0648788c18e1a23bc51fc5f4d730f69d97584e4aa0d3ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b9f00b939b29355dbe0648788c18e1a23bc51fc5f4d730f69d97584e4aa0d3ab->enter($__internal_b9f00b939b29355dbe0648788c18e1a23bc51fc5f4d730f69d97584e4aa0d3ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

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
        
        $__internal_b9f00b939b29355dbe0648788c18e1a23bc51fc5f4d730f69d97584e4aa0d3ab->leave($__internal_b9f00b939b29355dbe0648788c18e1a23bc51fc5f4d730f69d97584e4aa0d3ab_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
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
