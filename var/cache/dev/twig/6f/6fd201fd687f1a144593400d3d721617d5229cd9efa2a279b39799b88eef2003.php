<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_cb16305d030b621464ae5fac9f1cee6a4798093d69a605e209dadaa0774d0064 extends Twig_Template
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
        $__internal_2f3a40aac4e9f269dfada088f01faa304b212bd002da696db583908da39529a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f3a40aac4e9f269dfada088f01faa304b212bd002da696db583908da39529a9->enter($__internal_2f3a40aac4e9f269dfada088f01faa304b212bd002da696db583908da39529a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2f3a40aac4e9f269dfada088f01faa304b212bd002da696db583908da39529a9->leave($__internal_2f3a40aac4e9f269dfada088f01faa304b212bd002da696db583908da39529a9_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_2e57eb465f5fff32b2362d7fd74603bc826fcf1a8e161e0daa0a6193ffdee8fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e57eb465f5fff32b2362d7fd74603bc826fcf1a8e161e0daa0a6193ffdee8fa->enter($__internal_2e57eb465f5fff32b2362d7fd74603bc826fcf1a8e161e0daa0a6193ffdee8fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_2e57eb465f5fff32b2362d7fd74603bc826fcf1a8e161e0daa0a6193ffdee8fa->leave($__internal_2e57eb465f5fff32b2362d7fd74603bc826fcf1a8e161e0daa0a6193ffdee8fa_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_fb7ac9e009484d230e275a1f0ef05ca10616e8e3fcfcaf0060695a21ea94e4a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb7ac9e009484d230e275a1f0ef05ca10616e8e3fcfcaf0060695a21ea94e4a7->enter($__internal_fb7ac9e009484d230e275a1f0ef05ca10616e8e3fcfcaf0060695a21ea94e4a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_fb7ac9e009484d230e275a1f0ef05ca10616e8e3fcfcaf0060695a21ea94e4a7->leave($__internal_fb7ac9e009484d230e275a1f0ef05ca10616e8e3fcfcaf0060695a21ea94e4a7_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_47c409dbb2d1d84bc802f685bd56272de748237ab72e8a54e41944e1e2e6a812 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_47c409dbb2d1d84bc802f685bd56272de748237ab72e8a54e41944e1e2e6a812->enter($__internal_47c409dbb2d1d84bc802f685bd56272de748237ab72e8a54e41944e1e2e6a812_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_47c409dbb2d1d84bc802f685bd56272de748237ab72e8a54e41944e1e2e6a812->leave($__internal_47c409dbb2d1d84bc802f685bd56272de748237ab72e8a54e41944e1e2e6a812_prof);

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
