<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_87129eba378c2a695389a1ae2f38d729cab53d8c56c8c9747c52e429d69e5f87 extends Twig_Template
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
        $__internal_7fd56f8608e772a41d68ae110ef26c544c0990b0de8870dfa295a5de8769524e = $this->env->getExtension("native_profiler");
        $__internal_7fd56f8608e772a41d68ae110ef26c544c0990b0de8870dfa295a5de8769524e->enter($__internal_7fd56f8608e772a41d68ae110ef26c544c0990b0de8870dfa295a5de8769524e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

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
        
        $__internal_7fd56f8608e772a41d68ae110ef26c544c0990b0de8870dfa295a5de8769524e->leave($__internal_7fd56f8608e772a41d68ae110ef26c544c0990b0de8870dfa295a5de8769524e_prof);

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
}
/* /**/
/* {{ status_code }} {{ status_text }}*/
/* */
/* *//* */
/* */
