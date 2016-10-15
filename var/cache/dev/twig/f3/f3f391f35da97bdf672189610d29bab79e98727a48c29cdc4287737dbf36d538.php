<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_c0c399af78039bc99a1d8c61a200635a8d7e048e5d4ad831f1ea319d38459ab3 extends Twig_Template
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
        $__internal_7382cd5ea9c617fb64c2d60704092210e9aadeccf75afbe60a24cc5d4fefbef5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7382cd5ea9c617fb64c2d60704092210e9aadeccf75afbe60a24cc5d4fefbef5->enter($__internal_7382cd5ea9c617fb64c2d60704092210e9aadeccf75afbe60a24cc5d4fefbef5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_7382cd5ea9c617fb64c2d60704092210e9aadeccf75afbe60a24cc5d4fefbef5->leave($__internal_7382cd5ea9c617fb64c2d60704092210e9aadeccf75afbe60a24cc5d4fefbef5_prof);

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

    public function getSource()
    {
        return "/*
{% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}
*/
";
    }
}
