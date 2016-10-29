<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_c019af62136552fb5fe6863368753de2ec2c07e69e3c17d2403fcb08632066b8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
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
        $__internal_5167f097e19a72d64d9dc43376f0e2e93c26dd68036f5b4062d1f038aac3072e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5167f097e19a72d64d9dc43376f0e2e93c26dd68036f5b4062d1f038aac3072e->enter($__internal_5167f097e19a72d64d9dc43376f0e2e93c26dd68036f5b4062d1f038aac3072e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5167f097e19a72d64d9dc43376f0e2e93c26dd68036f5b4062d1f038aac3072e->leave($__internal_5167f097e19a72d64d9dc43376f0e2e93c26dd68036f5b4062d1f038aac3072e_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_734d42d1f73485e3c69b09aca34282fcfbfda9789bdbf3a9e16828fd87b90d06 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_734d42d1f73485e3c69b09aca34282fcfbfda9789bdbf3a9e16828fd87b90d06->enter($__internal_734d42d1f73485e3c69b09aca34282fcfbfda9789bdbf3a9e16828fd87b90d06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_734d42d1f73485e3c69b09aca34282fcfbfda9789bdbf3a9e16828fd87b90d06->leave($__internal_734d42d1f73485e3c69b09aca34282fcfbfda9789bdbf3a9e16828fd87b90d06_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_435a45c6125432969eb640cec754b7c19f64d4bac485ee6e276ea3c4e81f9b0d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_435a45c6125432969eb640cec754b7c19f64d4bac485ee6e276ea3c4e81f9b0d->enter($__internal_435a45c6125432969eb640cec754b7c19f64d4bac485ee6e276ea3c4e81f9b0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_435a45c6125432969eb640cec754b7c19f64d4bac485ee6e276ea3c4e81f9b0d->leave($__internal_435a45c6125432969eb640cec754b7c19f64d4bac485ee6e276ea3c4e81f9b0d_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_e0c2d97c1be42c76fec6d2aea194ba536ff01cfe2fcdbdb874e1952776f13a72 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e0c2d97c1be42c76fec6d2aea194ba536ff01cfe2fcdbdb874e1952776f13a72->enter($__internal_e0c2d97c1be42c76fec6d2aea194ba536ff01cfe2fcdbdb874e1952776f13a72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_e0c2d97c1be42c76fec6d2aea194ba536ff01cfe2fcdbdb874e1952776f13a72->leave($__internal_e0c2d97c1be42c76fec6d2aea194ba536ff01cfe2fcdbdb874e1952776f13a72_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
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
