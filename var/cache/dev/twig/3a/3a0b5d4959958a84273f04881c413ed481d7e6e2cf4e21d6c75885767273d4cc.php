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
        $__internal_fe83bce091b4e672c5e19be07b31e9b259dd7184a7ee0a73828804e8ffe24e5b = $this->env->getExtension("native_profiler");
        $__internal_fe83bce091b4e672c5e19be07b31e9b259dd7184a7ee0a73828804e8ffe24e5b->enter($__internal_fe83bce091b4e672c5e19be07b31e9b259dd7184a7ee0a73828804e8ffe24e5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

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
        
        $__internal_fe83bce091b4e672c5e19be07b31e9b259dd7184a7ee0a73828804e8ffe24e5b->leave($__internal_fe83bce091b4e672c5e19be07b31e9b259dd7184a7ee0a73828804e8ffe24e5b_prof);

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
