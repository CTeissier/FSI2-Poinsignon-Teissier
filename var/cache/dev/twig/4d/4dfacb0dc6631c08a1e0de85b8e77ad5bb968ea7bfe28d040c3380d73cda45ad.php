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
        $__internal_b5364ef9a6a35c4cdb983f7febd8025e73e8397f9dbeabc8d5cd3aba3774f8e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b5364ef9a6a35c4cdb983f7febd8025e73e8397f9dbeabc8d5cd3aba3774f8e1->enter($__internal_b5364ef9a6a35c4cdb983f7febd8025e73e8397f9dbeabc8d5cd3aba3774f8e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b5364ef9a6a35c4cdb983f7febd8025e73e8397f9dbeabc8d5cd3aba3774f8e1->leave($__internal_b5364ef9a6a35c4cdb983f7febd8025e73e8397f9dbeabc8d5cd3aba3774f8e1_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_a4262221e9c7afced190e0c91b321e5418e41e8b27b2c00f34a72b6e9597aeb0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a4262221e9c7afced190e0c91b321e5418e41e8b27b2c00f34a72b6e9597aeb0->enter($__internal_a4262221e9c7afced190e0c91b321e5418e41e8b27b2c00f34a72b6e9597aeb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_a4262221e9c7afced190e0c91b321e5418e41e8b27b2c00f34a72b6e9597aeb0->leave($__internal_a4262221e9c7afced190e0c91b321e5418e41e8b27b2c00f34a72b6e9597aeb0_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_dedc479f4c246bfbdb3c62236afed6ad84b25a5d2625259866306553bb4705ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dedc479f4c246bfbdb3c62236afed6ad84b25a5d2625259866306553bb4705ca->enter($__internal_dedc479f4c246bfbdb3c62236afed6ad84b25a5d2625259866306553bb4705ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_dedc479f4c246bfbdb3c62236afed6ad84b25a5d2625259866306553bb4705ca->leave($__internal_dedc479f4c246bfbdb3c62236afed6ad84b25a5d2625259866306553bb4705ca_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_a2385442e4861c7bf5b2f4ce42fa3452fbe4f7a9fb0554208b2255aaa9e8d159 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a2385442e4861c7bf5b2f4ce42fa3452fbe4f7a9fb0554208b2255aaa9e8d159->enter($__internal_a2385442e4861c7bf5b2f4ce42fa3452fbe4f7a9fb0554208b2255aaa9e8d159_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_a2385442e4861c7bf5b2f4ce42fa3452fbe4f7a9fb0554208b2255aaa9e8d159->leave($__internal_a2385442e4861c7bf5b2f4ce42fa3452fbe4f7a9fb0554208b2255aaa9e8d159_prof);

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
