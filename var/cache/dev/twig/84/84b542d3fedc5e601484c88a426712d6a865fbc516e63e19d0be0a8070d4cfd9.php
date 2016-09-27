<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_c76394634c6cef783c503502f4d786893d7a111c63e2e89bbd7204a690ac337a extends Twig_Template
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
        $__internal_a03c99974a64eb828168cfa4c443333939200ae4d1a9775849fe5ed2ece75366 = $this->env->getExtension("native_profiler");
        $__internal_a03c99974a64eb828168cfa4c443333939200ae4d1a9775849fe5ed2ece75366->enter($__internal_a03c99974a64eb828168cfa4c443333939200ae4d1a9775849fe5ed2ece75366_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_a03c99974a64eb828168cfa4c443333939200ae4d1a9775849fe5ed2ece75366->leave($__internal_a03c99974a64eb828168cfa4c443333939200ae4d1a9775849fe5ed2ece75366_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}*/
/* */
