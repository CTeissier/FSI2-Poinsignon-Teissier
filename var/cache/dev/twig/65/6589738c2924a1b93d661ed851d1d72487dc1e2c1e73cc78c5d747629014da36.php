<?php

/* @Twig/Exception/error.js.twig */
class __TwigTemplate_0f99a4590b2f74e1e23308f2ef5c0bafa324f778d7e8928256f886b427dfc5fc extends Twig_Template
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
        $__internal_a2430ff3ac16ef7deb9b3a6f00662701adcb0983790d4cf679b735af07e10839 = $this->env->getExtension("native_profiler");
        $__internal_a2430ff3ac16ef7deb9b3a6f00662701adcb0983790d4cf679b735af07e10839->enter($__internal_a2430ff3ac16ef7deb9b3a6f00662701adcb0983790d4cf679b735af07e10839_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

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
        
        $__internal_a2430ff3ac16ef7deb9b3a6f00662701adcb0983790d4cf679b735af07e10839->leave($__internal_a2430ff3ac16ef7deb9b3a6f00662701adcb0983790d4cf679b735af07e10839_prof);

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
}
/* /**/
/* {{ status_code }} {{ status_text }}*/
/* */
/* *//* */
/* */
