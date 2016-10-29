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
        $__internal_639d7481ea81934d0a75b73af040acdc257770ea7ecbe4fa9e481f10a1ebd25a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_639d7481ea81934d0a75b73af040acdc257770ea7ecbe4fa9e481f10a1ebd25a->enter($__internal_639d7481ea81934d0a75b73af040acdc257770ea7ecbe4fa9e481f10a1ebd25a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_639d7481ea81934d0a75b73af040acdc257770ea7ecbe4fa9e481f10a1ebd25a->leave($__internal_639d7481ea81934d0a75b73af040acdc257770ea7ecbe4fa9e481f10a1ebd25a_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_e57ba9a9893b9085a24823851191445a58d3fcf27360796e51aa57499be76e23 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e57ba9a9893b9085a24823851191445a58d3fcf27360796e51aa57499be76e23->enter($__internal_e57ba9a9893b9085a24823851191445a58d3fcf27360796e51aa57499be76e23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_e57ba9a9893b9085a24823851191445a58d3fcf27360796e51aa57499be76e23->leave($__internal_e57ba9a9893b9085a24823851191445a58d3fcf27360796e51aa57499be76e23_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_619c8cb49cfcc5d7a6c38f04d40984a29eddd7e716fe9475c9cfc241f7c3027d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_619c8cb49cfcc5d7a6c38f04d40984a29eddd7e716fe9475c9cfc241f7c3027d->enter($__internal_619c8cb49cfcc5d7a6c38f04d40984a29eddd7e716fe9475c9cfc241f7c3027d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_619c8cb49cfcc5d7a6c38f04d40984a29eddd7e716fe9475c9cfc241f7c3027d->leave($__internal_619c8cb49cfcc5d7a6c38f04d40984a29eddd7e716fe9475c9cfc241f7c3027d_prof);

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
