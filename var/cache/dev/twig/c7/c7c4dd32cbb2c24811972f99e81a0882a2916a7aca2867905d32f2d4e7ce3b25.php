<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_ed29e4f7f894b23893b97ef2d33bedc5ca476f1113884d7b53b8782634676461 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_056490d8bea59f46433c8b41b869b64eb4bbe56ba25d16194ff590a2d0b1f237 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_056490d8bea59f46433c8b41b869b64eb4bbe56ba25d16194ff590a2d0b1f237->enter($__internal_056490d8bea59f46433c8b41b869b64eb4bbe56ba25d16194ff590a2d0b1f237_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_056490d8bea59f46433c8b41b869b64eb4bbe56ba25d16194ff590a2d0b1f237->leave($__internal_056490d8bea59f46433c8b41b869b64eb4bbe56ba25d16194ff590a2d0b1f237_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_8123c07f2d321e8bf856784badce0d39987d3f57764dbac6f611b8e9562230bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8123c07f2d321e8bf856784badce0d39987d3f57764dbac6f611b8e9562230bc->enter($__internal_8123c07f2d321e8bf856784badce0d39987d3f57764dbac6f611b8e9562230bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_8123c07f2d321e8bf856784badce0d39987d3f57764dbac6f611b8e9562230bc->leave($__internal_8123c07f2d321e8bf856784badce0d39987d3f57764dbac6f611b8e9562230bc_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_284bb679682689f377c8c50799d0b4a1e1d60a53b55196cc2084561ca964b241 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_284bb679682689f377c8c50799d0b4a1e1d60a53b55196cc2084561ca964b241->enter($__internal_284bb679682689f377c8c50799d0b4a1e1d60a53b55196cc2084561ca964b241_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_284bb679682689f377c8c50799d0b4a1e1d60a53b55196cc2084561ca964b241->leave($__internal_284bb679682689f377c8c50799d0b4a1e1d60a53b55196cc2084561ca964b241_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
";
    }
}
