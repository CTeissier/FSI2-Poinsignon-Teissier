<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_1844414e2493866705faffb6fb7fbeab7df6d5e3a15b1abbdcc2be58447c8226 extends Twig_Template
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
        $__internal_21fef12f56ad535cb8ba8669f1b6efe9bc50bd44bbe4c9aeeb3481f8d101a812 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_21fef12f56ad535cb8ba8669f1b6efe9bc50bd44bbe4c9aeeb3481f8d101a812->enter($__internal_21fef12f56ad535cb8ba8669f1b6efe9bc50bd44bbe4c9aeeb3481f8d101a812_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_21fef12f56ad535cb8ba8669f1b6efe9bc50bd44bbe4c9aeeb3481f8d101a812->leave($__internal_21fef12f56ad535cb8ba8669f1b6efe9bc50bd44bbe4c9aeeb3481f8d101a812_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_053e852b468e0171465ef8ed857e24ee0349d3b30ae4d40aaf65381bab5ef324 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_053e852b468e0171465ef8ed857e24ee0349d3b30ae4d40aaf65381bab5ef324->enter($__internal_053e852b468e0171465ef8ed857e24ee0349d3b30ae4d40aaf65381bab5ef324_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_053e852b468e0171465ef8ed857e24ee0349d3b30ae4d40aaf65381bab5ef324->leave($__internal_053e852b468e0171465ef8ed857e24ee0349d3b30ae4d40aaf65381bab5ef324_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_c4c123c0ec2bacf4defe911317a0be8f0700306c69c61debb44e9826c2bf386d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c4c123c0ec2bacf4defe911317a0be8f0700306c69c61debb44e9826c2bf386d->enter($__internal_c4c123c0ec2bacf4defe911317a0be8f0700306c69c61debb44e9826c2bf386d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_c4c123c0ec2bacf4defe911317a0be8f0700306c69c61debb44e9826c2bf386d->leave($__internal_c4c123c0ec2bacf4defe911317a0be8f0700306c69c61debb44e9826c2bf386d_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_81c30e229596de5df4d9beaa45c8d46b828a0067eb8d17c72de68ee75a3443ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_81c30e229596de5df4d9beaa45c8d46b828a0067eb8d17c72de68ee75a3443ec->enter($__internal_81c30e229596de5df4d9beaa45c8d46b828a0067eb8d17c72de68ee75a3443ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_81c30e229596de5df4d9beaa45c8d46b828a0067eb8d17c72de68ee75a3443ec->leave($__internal_81c30e229596de5df4d9beaa45c8d46b828a0067eb8d17c72de68ee75a3443ec_prof);

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
