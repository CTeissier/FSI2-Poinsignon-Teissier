<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_fedc7882c1f3e3517f52b8868c829546b4e7e021a78d9ea5881721e56e2fad6e extends Twig_Template
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
        $__internal_8d15c64fc3fb2d9cd533779e793bb524ddde55665184f5fe77e32051b50e5a68 = $this->env->getExtension("native_profiler");
        $__internal_8d15c64fc3fb2d9cd533779e793bb524ddde55665184f5fe77e32051b50e5a68->enter($__internal_8d15c64fc3fb2d9cd533779e793bb524ddde55665184f5fe77e32051b50e5a68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

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
        
        $__internal_8d15c64fc3fb2d9cd533779e793bb524ddde55665184f5fe77e32051b50e5a68->leave($__internal_8d15c64fc3fb2d9cd533779e793bb524ddde55665184f5fe77e32051b50e5a68_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
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
