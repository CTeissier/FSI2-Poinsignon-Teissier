<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_a346e2fd350f000844d4bd8b665a7d478f329e71be6e84c19b8c5eae5187f638 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
        $__internal_4960b22d8f263ec0e32298a881491fe142f89be6acf803b882940566f6b5392d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4960b22d8f263ec0e32298a881491fe142f89be6acf803b882940566f6b5392d->enter($__internal_4960b22d8f263ec0e32298a881491fe142f89be6acf803b882940566f6b5392d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4960b22d8f263ec0e32298a881491fe142f89be6acf803b882940566f6b5392d->leave($__internal_4960b22d8f263ec0e32298a881491fe142f89be6acf803b882940566f6b5392d_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_02dcd91ffb160bb67b112f7538cb5521d4c1009ddf5717e8822e8606237ba1f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_02dcd91ffb160bb67b112f7538cb5521d4c1009ddf5717e8822e8606237ba1f6->enter($__internal_02dcd91ffb160bb67b112f7538cb5521d4c1009ddf5717e8822e8606237ba1f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_02dcd91ffb160bb67b112f7538cb5521d4c1009ddf5717e8822e8606237ba1f6->leave($__internal_02dcd91ffb160bb67b112f7538cb5521d4c1009ddf5717e8822e8606237ba1f6_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_33e8d965ed257eda6623c9171d92fefbecf6090aa7278e409819d804242b1302 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_33e8d965ed257eda6623c9171d92fefbecf6090aa7278e409819d804242b1302->enter($__internal_33e8d965ed257eda6623c9171d92fefbecf6090aa7278e409819d804242b1302_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_33e8d965ed257eda6623c9171d92fefbecf6090aa7278e409819d804242b1302->leave($__internal_33e8d965ed257eda6623c9171d92fefbecf6090aa7278e409819d804242b1302_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_76a3edf6c92f91db2dd9f8c8d437be5c6afda0315cf773a8a8886e7739085ea9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_76a3edf6c92f91db2dd9f8c8d437be5c6afda0315cf773a8a8886e7739085ea9->enter($__internal_76a3edf6c92f91db2dd9f8c8d437be5c6afda0315cf773a8a8886e7739085ea9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_76a3edf6c92f91db2dd9f8c8d437be5c6afda0315cf773a8a8886e7739085ea9->leave($__internal_76a3edf6c92f91db2dd9f8c8d437be5c6afda0315cf773a8a8886e7739085ea9_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
";
    }
}
