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
        $__internal_c59e3cb0dc2c6a11fae8fa89339c935cd25d1a306f6ebb97ce0f9fc05088e224 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c59e3cb0dc2c6a11fae8fa89339c935cd25d1a306f6ebb97ce0f9fc05088e224->enter($__internal_c59e3cb0dc2c6a11fae8fa89339c935cd25d1a306f6ebb97ce0f9fc05088e224_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_c59e3cb0dc2c6a11fae8fa89339c935cd25d1a306f6ebb97ce0f9fc05088e224->leave($__internal_c59e3cb0dc2c6a11fae8fa89339c935cd25d1a306f6ebb97ce0f9fc05088e224_prof);

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
