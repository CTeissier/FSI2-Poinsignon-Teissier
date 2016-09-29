<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_97a92aa8e12ae2246807a490de32c72cb14c3a3cbc22aaabe84982058bbe05ac extends Twig_Template
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
        $__internal_3c6d134755d8d24b83953f1deccaa6fd592b2c1fda46551e1fc644f539221d1b = $this->env->getExtension("native_profiler");
        $__internal_3c6d134755d8d24b83953f1deccaa6fd592b2c1fda46551e1fc644f539221d1b->enter($__internal_3c6d134755d8d24b83953f1deccaa6fd592b2c1fda46551e1fc644f539221d1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3c6d134755d8d24b83953f1deccaa6fd592b2c1fda46551e1fc644f539221d1b->leave($__internal_3c6d134755d8d24b83953f1deccaa6fd592b2c1fda46551e1fc644f539221d1b_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_4c8a98c8d8f8ccd101c678a992c9b1339a5440f06a701040fb9010c0be99ffa4 = $this->env->getExtension("native_profiler");
        $__internal_4c8a98c8d8f8ccd101c678a992c9b1339a5440f06a701040fb9010c0be99ffa4->enter($__internal_4c8a98c8d8f8ccd101c678a992c9b1339a5440f06a701040fb9010c0be99ffa4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_4c8a98c8d8f8ccd101c678a992c9b1339a5440f06a701040fb9010c0be99ffa4->leave($__internal_4c8a98c8d8f8ccd101c678a992c9b1339a5440f06a701040fb9010c0be99ffa4_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_21d1a28ebf0cb48c4e45ca36beace151dd9e09e56498d8be608b5c97ac90d625 = $this->env->getExtension("native_profiler");
        $__internal_21d1a28ebf0cb48c4e45ca36beace151dd9e09e56498d8be608b5c97ac90d625->enter($__internal_21d1a28ebf0cb48c4e45ca36beace151dd9e09e56498d8be608b5c97ac90d625_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_21d1a28ebf0cb48c4e45ca36beace151dd9e09e56498d8be608b5c97ac90d625->leave($__internal_21d1a28ebf0cb48c4e45ca36beace151dd9e09e56498d8be608b5c97ac90d625_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_877e3794b2ece6687618362ab91fbd05aa58937d124e0855ff16c11db0d56889 = $this->env->getExtension("native_profiler");
        $__internal_877e3794b2ece6687618362ab91fbd05aa58937d124e0855ff16c11db0d56889->enter($__internal_877e3794b2ece6687618362ab91fbd05aa58937d124e0855ff16c11db0d56889_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_877e3794b2ece6687618362ab91fbd05aa58937d124e0855ff16c11db0d56889->leave($__internal_877e3794b2ece6687618362ab91fbd05aa58937d124e0855ff16c11db0d56889_prof);

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
