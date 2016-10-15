<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_451f0d463a006048a9846e218dd8a46b53bbea2da6e8f9ed0b1cd9556e48c576 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@WebProfiler/Profiler/toolbar_redirect.html.twig", 1);
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
        $__internal_a3c114a952ad715a27db1abd8b40bbece95d59d653d2461ca9af0cbc663b14cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a3c114a952ad715a27db1abd8b40bbece95d59d653d2461ca9af0cbc663b14cc->enter($__internal_a3c114a952ad715a27db1abd8b40bbece95d59d653d2461ca9af0cbc663b14cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a3c114a952ad715a27db1abd8b40bbece95d59d653d2461ca9af0cbc663b14cc->leave($__internal_a3c114a952ad715a27db1abd8b40bbece95d59d653d2461ca9af0cbc663b14cc_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_6886988ba69f2ec9416536219ac1aa3b5b42446cfc3c57ed284fad601f97f980 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6886988ba69f2ec9416536219ac1aa3b5b42446cfc3c57ed284fad601f97f980->enter($__internal_6886988ba69f2ec9416536219ac1aa3b5b42446cfc3c57ed284fad601f97f980_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_6886988ba69f2ec9416536219ac1aa3b5b42446cfc3c57ed284fad601f97f980->leave($__internal_6886988ba69f2ec9416536219ac1aa3b5b42446cfc3c57ed284fad601f97f980_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_1d36457e456ec9c02833dbdac52beeea6f2c40ae34ff01544eac7d0dd0a74673 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d36457e456ec9c02833dbdac52beeea6f2c40ae34ff01544eac7d0dd0a74673->enter($__internal_1d36457e456ec9c02833dbdac52beeea6f2c40ae34ff01544eac7d0dd0a74673_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_1d36457e456ec9c02833dbdac52beeea6f2c40ae34ff01544eac7d0dd0a74673->leave($__internal_1d36457e456ec9c02833dbdac52beeea6f2c40ae34ff01544eac7d0dd0a74673_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_redirect.html.twig";
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
