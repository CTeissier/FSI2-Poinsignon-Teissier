<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_1de1fcb5e3f3bbb3c115937d2ccd1e7534961422097a2c46e7b6ff66e010c043 extends Twig_Template
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
        $__internal_08e449bf074fe9a9a45d476c32623cd1429dacf12862103d204e7d599fe87d0a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_08e449bf074fe9a9a45d476c32623cd1429dacf12862103d204e7d599fe87d0a->enter($__internal_08e449bf074fe9a9a45d476c32623cd1429dacf12862103d204e7d599fe87d0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_08e449bf074fe9a9a45d476c32623cd1429dacf12862103d204e7d599fe87d0a->leave($__internal_08e449bf074fe9a9a45d476c32623cd1429dacf12862103d204e7d599fe87d0a_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "{% include '@Twig/Exception/error.xml.twig' %}
";
    }
}
