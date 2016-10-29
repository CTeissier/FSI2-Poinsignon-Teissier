<?php

/* WebProfilerBundle:Collector:exception.html.twig */
class __TwigTemplate_7d7ca4da3fe0c577f05ed9e15cee860a468b2075bba54aff35a3b16b90a2b13b extends Twig_Template
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
        $__internal_5175bebd2c086e82ee4af5eaa3fc1e89a7f324a6009613d6cd7677f89341b644 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5175bebd2c086e82ee4af5eaa3fc1e89a7f324a6009613d6cd7677f89341b644->enter($__internal_5175bebd2c086e82ee4af5eaa3fc1e89a7f324a6009613d6cd7677f89341b644_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5175bebd2c086e82ee4af5eaa3fc1e89a7f324a6009613d6cd7677f89341b644->leave($__internal_5175bebd2c086e82ee4af5eaa3fc1e89a7f324a6009613d6cd7677f89341b644_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_9e61091f7832a1ec788cceb5f853e6b3d3a2e865e5a9a857eb226260b0098a4f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e61091f7832a1ec788cceb5f853e6b3d3a2e865e5a9a857eb226260b0098a4f->enter($__internal_9e61091f7832a1ec788cceb5f853e6b3d3a2e865e5a9a857eb226260b0098a4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_9e61091f7832a1ec788cceb5f853e6b3d3a2e865e5a9a857eb226260b0098a4f->leave($__internal_9e61091f7832a1ec788cceb5f853e6b3d3a2e865e5a9a857eb226260b0098a4f_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_527a4b5d35a556df50561c18945130f22fa29721d6fc199f495236e2a497f0f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_527a4b5d35a556df50561c18945130f22fa29721d6fc199f495236e2a497f0f3->enter($__internal_527a4b5d35a556df50561c18945130f22fa29721d6fc199f495236e2a497f0f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_527a4b5d35a556df50561c18945130f22fa29721d6fc199f495236e2a497f0f3->leave($__internal_527a4b5d35a556df50561c18945130f22fa29721d6fc199f495236e2a497f0f3_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_355dcc2ec10b775f887220eb1224f4e03f3ad15d45d843e73b45df13fc5ae8ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_355dcc2ec10b775f887220eb1224f4e03f3ad15d45d843e73b45df13fc5ae8ed->enter($__internal_355dcc2ec10b775f887220eb1224f4e03f3ad15d45d843e73b45df13fc5ae8ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_355dcc2ec10b775f887220eb1224f4e03f3ad15d45d843e73b45df13fc5ae8ed->leave($__internal_355dcc2ec10b775f887220eb1224f4e03f3ad15d45d843e73b45df13fc5ae8ed_prof);

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
