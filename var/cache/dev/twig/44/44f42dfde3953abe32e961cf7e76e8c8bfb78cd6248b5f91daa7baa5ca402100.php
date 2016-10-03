<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_9c41af53598f9a13c50fee9ea1ed9a8866ef6f1028675a7d7fbefdce5935d999 extends Twig_Template
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
        $__internal_3e75d63f1432ad8441cd99f75b5e3c84f759198c5b2b4417d3c88cfae31e7fdc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e75d63f1432ad8441cd99f75b5e3c84f759198c5b2b4417d3c88cfae31e7fdc->enter($__internal_3e75d63f1432ad8441cd99f75b5e3c84f759198c5b2b4417d3c88cfae31e7fdc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3e75d63f1432ad8441cd99f75b5e3c84f759198c5b2b4417d3c88cfae31e7fdc->leave($__internal_3e75d63f1432ad8441cd99f75b5e3c84f759198c5b2b4417d3c88cfae31e7fdc_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_d36a14a343d188d18f3194342a7fdc4302c4b396322f9a8a9f5a1229d6f0825f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d36a14a343d188d18f3194342a7fdc4302c4b396322f9a8a9f5a1229d6f0825f->enter($__internal_d36a14a343d188d18f3194342a7fdc4302c4b396322f9a8a9f5a1229d6f0825f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_d36a14a343d188d18f3194342a7fdc4302c4b396322f9a8a9f5a1229d6f0825f->leave($__internal_d36a14a343d188d18f3194342a7fdc4302c4b396322f9a8a9f5a1229d6f0825f_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_85b963f49e4ae0caab0d118b400c01f1b42f03a76eb3bcd8ce5e449f56a25478 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_85b963f49e4ae0caab0d118b400c01f1b42f03a76eb3bcd8ce5e449f56a25478->enter($__internal_85b963f49e4ae0caab0d118b400c01f1b42f03a76eb3bcd8ce5e449f56a25478_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_85b963f49e4ae0caab0d118b400c01f1b42f03a76eb3bcd8ce5e449f56a25478->leave($__internal_85b963f49e4ae0caab0d118b400c01f1b42f03a76eb3bcd8ce5e449f56a25478_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_ac5703017e1031c84eb3555dafaa49d1e25caa524b3aea84b1ec35ab8a4f66a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac5703017e1031c84eb3555dafaa49d1e25caa524b3aea84b1ec35ab8a4f66a1->enter($__internal_ac5703017e1031c84eb3555dafaa49d1e25caa524b3aea84b1ec35ab8a4f66a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_ac5703017e1031c84eb3555dafaa49d1e25caa524b3aea84b1ec35ab8a4f66a1->leave($__internal_ac5703017e1031c84eb3555dafaa49d1e25caa524b3aea84b1ec35ab8a4f66a1_prof);

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
