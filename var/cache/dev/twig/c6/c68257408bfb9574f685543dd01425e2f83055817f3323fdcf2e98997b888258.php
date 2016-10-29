<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_cdd22e7ccb2e50cbf5d3da47dc28a8106290a85b45b067361ec7b83424b1fb25 extends Twig_Template
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
        $__internal_d358f9af66d355de01331bd0b5204bfc1b56ca063c542d72745c5723986d8a51 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d358f9af66d355de01331bd0b5204bfc1b56ca063c542d72745c5723986d8a51->enter($__internal_d358f9af66d355de01331bd0b5204bfc1b56ca063c542d72745c5723986d8a51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_d358f9af66d355de01331bd0b5204bfc1b56ca063c542d72745c5723986d8a51->leave($__internal_d358f9af66d355de01331bd0b5204bfc1b56ca063c542d72745c5723986d8a51_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
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
