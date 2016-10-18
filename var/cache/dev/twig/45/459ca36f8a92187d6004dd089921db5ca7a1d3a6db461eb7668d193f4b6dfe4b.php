<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_32eff4c43e7c24f04323c73ab9772b9f4715e0cef7f351b781af1bc02ab58f4e extends Twig_Template
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
        $__internal_3983e745cab001869039e9228b3449a7fea2ebe23664d972511f5922f4a98dba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3983e745cab001869039e9228b3449a7fea2ebe23664d972511f5922f4a98dba->enter($__internal_3983e745cab001869039e9228b3449a7fea2ebe23664d972511f5922f4a98dba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3983e745cab001869039e9228b3449a7fea2ebe23664d972511f5922f4a98dba->leave($__internal_3983e745cab001869039e9228b3449a7fea2ebe23664d972511f5922f4a98dba_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_8938628e92b00673d1e78c33b652cc76415ba5a5aba26d433c4cb3cfcc2a5f1f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8938628e92b00673d1e78c33b652cc76415ba5a5aba26d433c4cb3cfcc2a5f1f->enter($__internal_8938628e92b00673d1e78c33b652cc76415ba5a5aba26d433c4cb3cfcc2a5f1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_8938628e92b00673d1e78c33b652cc76415ba5a5aba26d433c4cb3cfcc2a5f1f->leave($__internal_8938628e92b00673d1e78c33b652cc76415ba5a5aba26d433c4cb3cfcc2a5f1f_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_a194133881d743addde577ec17c5134737dca53dbd46e399ff6c5d0f5face2cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a194133881d743addde577ec17c5134737dca53dbd46e399ff6c5d0f5face2cf->enter($__internal_a194133881d743addde577ec17c5134737dca53dbd46e399ff6c5d0f5face2cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_a194133881d743addde577ec17c5134737dca53dbd46e399ff6c5d0f5face2cf->leave($__internal_a194133881d743addde577ec17c5134737dca53dbd46e399ff6c5d0f5face2cf_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_9e7d71cdec82cae4815b763e2ddc24b92c7352eccc2c7fe25ab417cf2aa0812a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e7d71cdec82cae4815b763e2ddc24b92c7352eccc2c7fe25ab417cf2aa0812a->enter($__internal_9e7d71cdec82cae4815b763e2ddc24b92c7352eccc2c7fe25ab417cf2aa0812a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_9e7d71cdec82cae4815b763e2ddc24b92c7352eccc2c7fe25ab417cf2aa0812a->leave($__internal_9e7d71cdec82cae4815b763e2ddc24b92c7352eccc2c7fe25ab417cf2aa0812a_prof);

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
