<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_e24cb3375edf401e3af26980e845abe8748bfe260fe41a50c7cb6a4955fed1b8 extends Twig_Template
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
        $__internal_681450767987c8c9239da9e338e10fec1da38cd54d0c999edbe4a6ace40ec6d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_681450767987c8c9239da9e338e10fec1da38cd54d0c999edbe4a6ace40ec6d0->enter($__internal_681450767987c8c9239da9e338e10fec1da38cd54d0c999edbe4a6ace40ec6d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_681450767987c8c9239da9e338e10fec1da38cd54d0c999edbe4a6ace40ec6d0->leave($__internal_681450767987c8c9239da9e338e10fec1da38cd54d0c999edbe4a6ace40ec6d0_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 3,  22 => 1,);
    }

    public function getSource()
    {
        return "<?xml version=\"1.0\" encoding=\"{{ _charset }}\" ?>

<error code=\"{{ status_code }}\" message=\"{{ status_text }}\" />
";
    }
}
