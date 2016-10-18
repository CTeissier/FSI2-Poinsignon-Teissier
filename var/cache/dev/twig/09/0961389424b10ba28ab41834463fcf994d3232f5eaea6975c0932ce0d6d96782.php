<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_20cda334b5eb1af1b44146ceb8ef5f8fa1f1522f54a736d7d6e73bcda5080edb extends Twig_Template
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
        $__internal_4636438d51afa0e8fb747f3e6686d85a1c4b3822e5ef3ddb3c6c916fb1a106f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4636438d51afa0e8fb747f3e6686d85a1c4b3822e5ef3ddb3c6c916fb1a106f2->enter($__internal_4636438d51afa0e8fb747f3e6686d85a1c4b3822e5ef3ddb3c6c916fb1a106f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4636438d51afa0e8fb747f3e6686d85a1c4b3822e5ef3ddb3c6c916fb1a106f2->leave($__internal_4636438d51afa0e8fb747f3e6686d85a1c4b3822e5ef3ddb3c6c916fb1a106f2_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_58eda2dee81002e564865f04d692352c9cfb4ff35d75465c35ae53a2af562a06 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_58eda2dee81002e564865f04d692352c9cfb4ff35d75465c35ae53a2af562a06->enter($__internal_58eda2dee81002e564865f04d692352c9cfb4ff35d75465c35ae53a2af562a06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_58eda2dee81002e564865f04d692352c9cfb4ff35d75465c35ae53a2af562a06->leave($__internal_58eda2dee81002e564865f04d692352c9cfb4ff35d75465c35ae53a2af562a06_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_87df290eadb7465aa69b9172f572b804cb9f685c55dfde4ec5dea7074296a8dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_87df290eadb7465aa69b9172f572b804cb9f685c55dfde4ec5dea7074296a8dc->enter($__internal_87df290eadb7465aa69b9172f572b804cb9f685c55dfde4ec5dea7074296a8dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_87df290eadb7465aa69b9172f572b804cb9f685c55dfde4ec5dea7074296a8dc->leave($__internal_87df290eadb7465aa69b9172f572b804cb9f685c55dfde4ec5dea7074296a8dc_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_49e9e04f16b5bf654f15422c5de336c94f4f27597365b2664fb01f24f201a407 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_49e9e04f16b5bf654f15422c5de336c94f4f27597365b2664fb01f24f201a407->enter($__internal_49e9e04f16b5bf654f15422c5de336c94f4f27597365b2664fb01f24f201a407_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_49e9e04f16b5bf654f15422c5de336c94f4f27597365b2664fb01f24f201a407->leave($__internal_49e9e04f16b5bf654f15422c5de336c94f4f27597365b2664fb01f24f201a407_prof);

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
