<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_8edc76eb9f6d076697cfc769ab43d84f48e60b24a8943e3b4d985b9805b4c800 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_72b3124840ca4ce4c84a1ba343bd46f1093859fd9168b2b381e0311207c64cd0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_72b3124840ca4ce4c84a1ba343bd46f1093859fd9168b2b381e0311207c64cd0->enter($__internal_72b3124840ca4ce4c84a1ba343bd46f1093859fd9168b2b381e0311207c64cd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_72b3124840ca4ce4c84a1ba343bd46f1093859fd9168b2b381e0311207c64cd0->leave($__internal_72b3124840ca4ce4c84a1ba343bd46f1093859fd9168b2b381e0311207c64cd0_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_abdf0ea3f85c90dda447ed105a18594dfb2fa59d411c4c8dd80ebc5c43d70ef8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_abdf0ea3f85c90dda447ed105a18594dfb2fa59d411c4c8dd80ebc5c43d70ef8->enter($__internal_abdf0ea3f85c90dda447ed105a18594dfb2fa59d411c4c8dd80ebc5c43d70ef8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_abdf0ea3f85c90dda447ed105a18594dfb2fa59d411c4c8dd80ebc5c43d70ef8->leave($__internal_abdf0ea3f85c90dda447ed105a18594dfb2fa59d411c4c8dd80ebc5c43d70ef8_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_fad02915f470051524aa614f774ef7e22ccf000531d63f2e45a8e784bdaf6b0e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fad02915f470051524aa614f774ef7e22ccf000531d63f2e45a8e784bdaf6b0e->enter($__internal_fad02915f470051524aa614f774ef7e22ccf000531d63f2e45a8e784bdaf6b0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_fad02915f470051524aa614f774ef7e22ccf000531d63f2e45a8e784bdaf6b0e->leave($__internal_fad02915f470051524aa614f774ef7e22ccf000531d63f2e45a8e784bdaf6b0e_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_fd38edef92f931ae6720232c470c1305c35c785142ccc55339d513d0691204c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd38edef92f931ae6720232c470c1305c35c785142ccc55339d513d0691204c8->enter($__internal_fd38edef92f931ae6720232c470c1305c35c785142ccc55339d513d0691204c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_fd38edef92f931ae6720232c470c1305c35c785142ccc55339d513d0691204c8->leave($__internal_fd38edef92f931ae6720232c470c1305c35c785142ccc55339d513d0691204c8_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
";
    }
}
