<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_284bd827da9c513af99c533fd74355d8f30ccde9c3426960d4e583711c545edf extends Twig_Template
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
        $__internal_0684b594274578df9495690fa8c64a531cd25b6dda0372aafea1c9411204cca7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0684b594274578df9495690fa8c64a531cd25b6dda0372aafea1c9411204cca7->enter($__internal_0684b594274578df9495690fa8c64a531cd25b6dda0372aafea1c9411204cca7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0684b594274578df9495690fa8c64a531cd25b6dda0372aafea1c9411204cca7->leave($__internal_0684b594274578df9495690fa8c64a531cd25b6dda0372aafea1c9411204cca7_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_5edae16197e653906cb46e2e813a743758a830fe6dc970c36e425be3918e21ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5edae16197e653906cb46e2e813a743758a830fe6dc970c36e425be3918e21ab->enter($__internal_5edae16197e653906cb46e2e813a743758a830fe6dc970c36e425be3918e21ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_5edae16197e653906cb46e2e813a743758a830fe6dc970c36e425be3918e21ab->leave($__internal_5edae16197e653906cb46e2e813a743758a830fe6dc970c36e425be3918e21ab_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_483ea452e043a4cd1f1e3841cbb0a080d3bc67b00012b15f0db06c56627900cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_483ea452e043a4cd1f1e3841cbb0a080d3bc67b00012b15f0db06c56627900cc->enter($__internal_483ea452e043a4cd1f1e3841cbb0a080d3bc67b00012b15f0db06c56627900cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_483ea452e043a4cd1f1e3841cbb0a080d3bc67b00012b15f0db06c56627900cc->leave($__internal_483ea452e043a4cd1f1e3841cbb0a080d3bc67b00012b15f0db06c56627900cc_prof);

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
