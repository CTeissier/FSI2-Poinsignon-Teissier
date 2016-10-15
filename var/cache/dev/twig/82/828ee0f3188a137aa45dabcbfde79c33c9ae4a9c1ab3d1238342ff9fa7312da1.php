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
        $__internal_c6fbdbc4291eaffe3b8b42031c9feb2444779b7956c6cbb1bf135b07e9283267 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c6fbdbc4291eaffe3b8b42031c9feb2444779b7956c6cbb1bf135b07e9283267->enter($__internal_c6fbdbc4291eaffe3b8b42031c9feb2444779b7956c6cbb1bf135b07e9283267_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c6fbdbc4291eaffe3b8b42031c9feb2444779b7956c6cbb1bf135b07e9283267->leave($__internal_c6fbdbc4291eaffe3b8b42031c9feb2444779b7956c6cbb1bf135b07e9283267_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_64b848d3eaf9602ffe432782c409519efccf2d4466ab9ba869f2fbe1bafd1a77 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_64b848d3eaf9602ffe432782c409519efccf2d4466ab9ba869f2fbe1bafd1a77->enter($__internal_64b848d3eaf9602ffe432782c409519efccf2d4466ab9ba869f2fbe1bafd1a77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_64b848d3eaf9602ffe432782c409519efccf2d4466ab9ba869f2fbe1bafd1a77->leave($__internal_64b848d3eaf9602ffe432782c409519efccf2d4466ab9ba869f2fbe1bafd1a77_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_924925b6d61e861c447071a1b6c78438c134c7870076ee591a49601c31b073a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_924925b6d61e861c447071a1b6c78438c134c7870076ee591a49601c31b073a8->enter($__internal_924925b6d61e861c447071a1b6c78438c134c7870076ee591a49601c31b073a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_924925b6d61e861c447071a1b6c78438c134c7870076ee591a49601c31b073a8->leave($__internal_924925b6d61e861c447071a1b6c78438c134c7870076ee591a49601c31b073a8_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_c91658706d2d77726f314f15baa85fe8ce2022411fb518cd6d53ee1943779be5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c91658706d2d77726f314f15baa85fe8ce2022411fb518cd6d53ee1943779be5->enter($__internal_c91658706d2d77726f314f15baa85fe8ce2022411fb518cd6d53ee1943779be5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_c91658706d2d77726f314f15baa85fe8ce2022411fb518cd6d53ee1943779be5->leave($__internal_c91658706d2d77726f314f15baa85fe8ce2022411fb518cd6d53ee1943779be5_prof);

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
