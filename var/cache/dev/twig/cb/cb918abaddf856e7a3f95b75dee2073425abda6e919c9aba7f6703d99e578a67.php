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
        $__internal_53ce64e719ed5c7230811710344bd64ffb317f52b1247dc2f6a23116aaa59359 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_53ce64e719ed5c7230811710344bd64ffb317f52b1247dc2f6a23116aaa59359->enter($__internal_53ce64e719ed5c7230811710344bd64ffb317f52b1247dc2f6a23116aaa59359_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_53ce64e719ed5c7230811710344bd64ffb317f52b1247dc2f6a23116aaa59359->leave($__internal_53ce64e719ed5c7230811710344bd64ffb317f52b1247dc2f6a23116aaa59359_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_2f561c607d877594a94f56ce1753b071fc2795ae728667e105f1ccde48b495ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f561c607d877594a94f56ce1753b071fc2795ae728667e105f1ccde48b495ef->enter($__internal_2f561c607d877594a94f56ce1753b071fc2795ae728667e105f1ccde48b495ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_2f561c607d877594a94f56ce1753b071fc2795ae728667e105f1ccde48b495ef->leave($__internal_2f561c607d877594a94f56ce1753b071fc2795ae728667e105f1ccde48b495ef_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_bbc5dfe1923b5736a7dfd883c4acd85e6a2fabee01789a3eedddf5850cf8febb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bbc5dfe1923b5736a7dfd883c4acd85e6a2fabee01789a3eedddf5850cf8febb->enter($__internal_bbc5dfe1923b5736a7dfd883c4acd85e6a2fabee01789a3eedddf5850cf8febb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_bbc5dfe1923b5736a7dfd883c4acd85e6a2fabee01789a3eedddf5850cf8febb->leave($__internal_bbc5dfe1923b5736a7dfd883c4acd85e6a2fabee01789a3eedddf5850cf8febb_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_e18f10848f78086cc00611311377d0108c962766bd572c8e2ff5f78a4762cf98 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e18f10848f78086cc00611311377d0108c962766bd572c8e2ff5f78a4762cf98->enter($__internal_e18f10848f78086cc00611311377d0108c962766bd572c8e2ff5f78a4762cf98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_e18f10848f78086cc00611311377d0108c962766bd572c8e2ff5f78a4762cf98->leave($__internal_e18f10848f78086cc00611311377d0108c962766bd572c8e2ff5f78a4762cf98_prof);

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
