<?php

/* WebProfilerBundle:Collector:exception.html.twig */
class __TwigTemplate_f92d7c9934e879571440123b86600a1bd5284ac6ef905b9486ef6bd6377d32d0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_edbe57d5fc2018ab27932a959830ad3dbfcb55fbdd917a5ea0ec22f2c4b2e9ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_edbe57d5fc2018ab27932a959830ad3dbfcb55fbdd917a5ea0ec22f2c4b2e9ef->enter($__internal_edbe57d5fc2018ab27932a959830ad3dbfcb55fbdd917a5ea0ec22f2c4b2e9ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_edbe57d5fc2018ab27932a959830ad3dbfcb55fbdd917a5ea0ec22f2c4b2e9ef->leave($__internal_edbe57d5fc2018ab27932a959830ad3dbfcb55fbdd917a5ea0ec22f2c4b2e9ef_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_ddf59df6c1313d1b8b08caed6c4bd49d93bc6781782d7954a23b38400c73f676 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ddf59df6c1313d1b8b08caed6c4bd49d93bc6781782d7954a23b38400c73f676->enter($__internal_ddf59df6c1313d1b8b08caed6c4bd49d93bc6781782d7954a23b38400c73f676_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_ddf59df6c1313d1b8b08caed6c4bd49d93bc6781782d7954a23b38400c73f676->leave($__internal_ddf59df6c1313d1b8b08caed6c4bd49d93bc6781782d7954a23b38400c73f676_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_e4d9a8dad2eeb788e2e49abc07a68197a6f2a82511dca37ed444faf1d0499a19 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e4d9a8dad2eeb788e2e49abc07a68197a6f2a82511dca37ed444faf1d0499a19->enter($__internal_e4d9a8dad2eeb788e2e49abc07a68197a6f2a82511dca37ed444faf1d0499a19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_e4d9a8dad2eeb788e2e49abc07a68197a6f2a82511dca37ed444faf1d0499a19->leave($__internal_e4d9a8dad2eeb788e2e49abc07a68197a6f2a82511dca37ed444faf1d0499a19_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_df980ca993a3914774dcdd45af354e3848de28af35c7d3b4b387492ae6cb2c81 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df980ca993a3914774dcdd45af354e3848de28af35c7d3b4b387492ae6cb2c81->enter($__internal_df980ca993a3914774dcdd45af354e3848de28af35c7d3b4b387492ae6cb2c81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_df980ca993a3914774dcdd45af354e3848de28af35c7d3b4b387492ae6cb2c81->leave($__internal_df980ca993a3914774dcdd45af354e3848de28af35c7d3b4b387492ae6cb2c81_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 33,  114 => 32,  108 => 28,  106 => 27,  102 => 25,  96 => 24,  88 => 21,  82 => 17,  80 => 16,  75 => 14,  70 => 13,  64 => 12,  54 => 9,  48 => 6,  45 => 5,  42 => 4,  36 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
";
    }
}
