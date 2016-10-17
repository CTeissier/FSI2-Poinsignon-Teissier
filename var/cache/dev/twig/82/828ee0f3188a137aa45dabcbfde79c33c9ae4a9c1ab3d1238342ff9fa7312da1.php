<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_f26d71079c18f48e822de873259c695c7c19294f6fb646ce9dbeffc64e67db8a extends Twig_Template
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
        $__internal_9ea099f1a0e84e6e3fc958b73151c23a6d06bdf7993a2d69f5736ac452f679d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ea099f1a0e84e6e3fc958b73151c23a6d06bdf7993a2d69f5736ac452f679d7->enter($__internal_9ea099f1a0e84e6e3fc958b73151c23a6d06bdf7993a2d69f5736ac452f679d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9ea099f1a0e84e6e3fc958b73151c23a6d06bdf7993a2d69f5736ac452f679d7->leave($__internal_9ea099f1a0e84e6e3fc958b73151c23a6d06bdf7993a2d69f5736ac452f679d7_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_a5d6e04d95b759cd53359dbe3d456d5678aeda479248d50da13dbe804d229721 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a5d6e04d95b759cd53359dbe3d456d5678aeda479248d50da13dbe804d229721->enter($__internal_a5d6e04d95b759cd53359dbe3d456d5678aeda479248d50da13dbe804d229721_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_a5d6e04d95b759cd53359dbe3d456d5678aeda479248d50da13dbe804d229721->leave($__internal_a5d6e04d95b759cd53359dbe3d456d5678aeda479248d50da13dbe804d229721_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_cf7872a0f4868b17012e8bb268dc120d14f7c9bcf9607fa36d34e4bfd428cab1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf7872a0f4868b17012e8bb268dc120d14f7c9bcf9607fa36d34e4bfd428cab1->enter($__internal_cf7872a0f4868b17012e8bb268dc120d14f7c9bcf9607fa36d34e4bfd428cab1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_cf7872a0f4868b17012e8bb268dc120d14f7c9bcf9607fa36d34e4bfd428cab1->leave($__internal_cf7872a0f4868b17012e8bb268dc120d14f7c9bcf9607fa36d34e4bfd428cab1_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_9ed6b707a0d7d65225d12f353605c7180490bda61143f265f549c76b656a8d1a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ed6b707a0d7d65225d12f353605c7180490bda61143f265f549c76b656a8d1a->enter($__internal_9ed6b707a0d7d65225d12f353605c7180490bda61143f265f549c76b656a8d1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_9ed6b707a0d7d65225d12f353605c7180490bda61143f265f549c76b656a8d1a->leave($__internal_9ed6b707a0d7d65225d12f353605c7180490bda61143f265f549c76b656a8d1a_prof);

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
