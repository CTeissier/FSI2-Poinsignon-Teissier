<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_7de337df30560701e15eb7de9a310a14abfa7b8c82f487656c7b2c16177e716a extends Twig_Template
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
        $__internal_23de1d33d3117df8f6e938bac633a1bc8ec0e5de26a1cdfc6bb028f0da385029 = $this->env->getExtension("native_profiler");
        $__internal_23de1d33d3117df8f6e938bac633a1bc8ec0e5de26a1cdfc6bb028f0da385029->enter($__internal_23de1d33d3117df8f6e938bac633a1bc8ec0e5de26a1cdfc6bb028f0da385029_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_23de1d33d3117df8f6e938bac633a1bc8ec0e5de26a1cdfc6bb028f0da385029->leave($__internal_23de1d33d3117df8f6e938bac633a1bc8ec0e5de26a1cdfc6bb028f0da385029_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_62975e62877109b6800c89c1d510ef2adff47380d55f7fa305909231ab6ae6c5 = $this->env->getExtension("native_profiler");
        $__internal_62975e62877109b6800c89c1d510ef2adff47380d55f7fa305909231ab6ae6c5->enter($__internal_62975e62877109b6800c89c1d510ef2adff47380d55f7fa305909231ab6ae6c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_62975e62877109b6800c89c1d510ef2adff47380d55f7fa305909231ab6ae6c5->leave($__internal_62975e62877109b6800c89c1d510ef2adff47380d55f7fa305909231ab6ae6c5_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_5090157792c855e72adcf6bcb1026b5a7a6290fc3b316641887d7d6e0d5c4f9a = $this->env->getExtension("native_profiler");
        $__internal_5090157792c855e72adcf6bcb1026b5a7a6290fc3b316641887d7d6e0d5c4f9a->enter($__internal_5090157792c855e72adcf6bcb1026b5a7a6290fc3b316641887d7d6e0d5c4f9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_5090157792c855e72adcf6bcb1026b5a7a6290fc3b316641887d7d6e0d5c4f9a->leave($__internal_5090157792c855e72adcf6bcb1026b5a7a6290fc3b316641887d7d6e0d5c4f9a_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_1aad401e485dd2925df2f1929e1f51eeb72578fc0818a6b6b89536932070924d = $this->env->getExtension("native_profiler");
        $__internal_1aad401e485dd2925df2f1929e1f51eeb72578fc0818a6b6b89536932070924d->enter($__internal_1aad401e485dd2925df2f1929e1f51eeb72578fc0818a6b6b89536932070924d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_1aad401e485dd2925df2f1929e1f51eeb72578fc0818a6b6b89536932070924d->leave($__internal_1aad401e485dd2925df2f1929e1f51eeb72578fc0818a6b6b89536932070924d_prof);

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
