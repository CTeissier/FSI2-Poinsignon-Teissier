<?php

/* @Twig/Exception/error.xml.twig */
class __TwigTemplate_e13156bbb48a3558518f97779df42aef6055fa1edd3f0f303f7f753951440882 extends Twig_Template
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
        $__internal_897035c3da3f0e9601ca80cc5d47888253affd0f1e0e504e7f6d82eb7dd13dce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_897035c3da3f0e9601ca80cc5d47888253affd0f1e0e504e7f6d82eb7dd13dce->enter($__internal_897035c3da3f0e9601ca80cc5d47888253affd0f1e0e504e7f6d82eb7dd13dce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.xml.twig"));

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
        
        $__internal_897035c3da3f0e9601ca80cc5d47888253affd0f1e0e504e7f6d82eb7dd13dce->leave($__internal_897035c3da3f0e9601ca80cc5d47888253affd0f1e0e504e7f6d82eb7dd13dce_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.xml.twig";
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
