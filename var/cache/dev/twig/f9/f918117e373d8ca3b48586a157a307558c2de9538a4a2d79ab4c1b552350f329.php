<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_3f99ab4cc576d58143dbaa1cdfad9c40fb3d1a64a340d9866e8ca2139e143dad extends Twig_Template
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
        $__internal_5c61cedfd4d23a14a3c327e44b9f3417b40fa7c3c8f88feb1bf8a0c6504521ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c61cedfd4d23a14a3c327e44b9f3417b40fa7c3c8f88feb1bf8a0c6504521ad->enter($__internal_5c61cedfd4d23a14a3c327e44b9f3417b40fa7c3c8f88feb1bf8a0c6504521ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5c61cedfd4d23a14a3c327e44b9f3417b40fa7c3c8f88feb1bf8a0c6504521ad->leave($__internal_5c61cedfd4d23a14a3c327e44b9f3417b40fa7c3c8f88feb1bf8a0c6504521ad_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_5ef4c74e1220b360fe2fa0c6c402aa7f3fd32ed3874ee4814fc8e005f8ddb41e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ef4c74e1220b360fe2fa0c6c402aa7f3fd32ed3874ee4814fc8e005f8ddb41e->enter($__internal_5ef4c74e1220b360fe2fa0c6c402aa7f3fd32ed3874ee4814fc8e005f8ddb41e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_5ef4c74e1220b360fe2fa0c6c402aa7f3fd32ed3874ee4814fc8e005f8ddb41e->leave($__internal_5ef4c74e1220b360fe2fa0c6c402aa7f3fd32ed3874ee4814fc8e005f8ddb41e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_a6ef29ab5420194c345679f960f09e93662bd837b78b679a8e088dfdb2f1f739 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a6ef29ab5420194c345679f960f09e93662bd837b78b679a8e088dfdb2f1f739->enter($__internal_a6ef29ab5420194c345679f960f09e93662bd837b78b679a8e088dfdb2f1f739_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_a6ef29ab5420194c345679f960f09e93662bd837b78b679a8e088dfdb2f1f739->leave($__internal_a6ef29ab5420194c345679f960f09e93662bd837b78b679a8e088dfdb2f1f739_prof);

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
