<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_857ec69c1fd59d6a9ce8ec746676e33e609bf1d5109dc0ccfc152446048e149a extends Twig_Template
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
        $__internal_718c58915930edd6dec02aac0a5a54c0908938eae33f0133963baf04f40083d9 = $this->env->getExtension("native_profiler");
        $__internal_718c58915930edd6dec02aac0a5a54c0908938eae33f0133963baf04f40083d9->enter($__internal_718c58915930edd6dec02aac0a5a54c0908938eae33f0133963baf04f40083d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_718c58915930edd6dec02aac0a5a54c0908938eae33f0133963baf04f40083d9->leave($__internal_718c58915930edd6dec02aac0a5a54c0908938eae33f0133963baf04f40083d9_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}*/
/* *//* */
/* */
