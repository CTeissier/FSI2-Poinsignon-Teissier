<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_af9eb38d816aecce3f15ce70757b878029a2daad8f4ffb303e9e2c9273278c72 extends Twig_Template
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
        $__internal_c9175c732c30c3613fea35661f81431afb56092d635a61ee9b6e23c59ebe1829 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c9175c732c30c3613fea35661f81431afb56092d635a61ee9b6e23c59ebe1829->enter($__internal_c9175c732c30c3613fea35661f81431afb56092d635a61ee9b6e23c59ebe1829_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c9175c732c30c3613fea35661f81431afb56092d635a61ee9b6e23c59ebe1829->leave($__internal_c9175c732c30c3613fea35661f81431afb56092d635a61ee9b6e23c59ebe1829_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_e204df67842adb05a294b7948064a9a0ad8a59e66699e804eb90467d39fe8001 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e204df67842adb05a294b7948064a9a0ad8a59e66699e804eb90467d39fe8001->enter($__internal_e204df67842adb05a294b7948064a9a0ad8a59e66699e804eb90467d39fe8001_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_e204df67842adb05a294b7948064a9a0ad8a59e66699e804eb90467d39fe8001->leave($__internal_e204df67842adb05a294b7948064a9a0ad8a59e66699e804eb90467d39fe8001_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_8abf3a7a5e1e701a4409ca9b1c59e126c26ba49ddeb38b8ee8815ee131028914 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8abf3a7a5e1e701a4409ca9b1c59e126c26ba49ddeb38b8ee8815ee131028914->enter($__internal_8abf3a7a5e1e701a4409ca9b1c59e126c26ba49ddeb38b8ee8815ee131028914_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_8abf3a7a5e1e701a4409ca9b1c59e126c26ba49ddeb38b8ee8815ee131028914->leave($__internal_8abf3a7a5e1e701a4409ca9b1c59e126c26ba49ddeb38b8ee8815ee131028914_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_8667072e66edbb88cf05d7a71c5eb0a0d0e59f172a802437921d1d43a1fafc75 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8667072e66edbb88cf05d7a71c5eb0a0d0e59f172a802437921d1d43a1fafc75->enter($__internal_8667072e66edbb88cf05d7a71c5eb0a0d0e59f172a802437921d1d43a1fafc75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_8667072e66edbb88cf05d7a71c5eb0a0d0e59f172a802437921d1d43a1fafc75->leave($__internal_8667072e66edbb88cf05d7a71c5eb0a0d0e59f172a802437921d1d43a1fafc75_prof);

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
