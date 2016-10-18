<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_33f3e513a78684fa9e4e4f9c1c54ec8dda1843f0f7e5014d3f45107e4305c8c6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
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
        $__internal_d9a263f14d8e81801eb50b126ea0c2e33cb7b15e9cddc509ccd59dae95e5000d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d9a263f14d8e81801eb50b126ea0c2e33cb7b15e9cddc509ccd59dae95e5000d->enter($__internal_d9a263f14d8e81801eb50b126ea0c2e33cb7b15e9cddc509ccd59dae95e5000d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d9a263f14d8e81801eb50b126ea0c2e33cb7b15e9cddc509ccd59dae95e5000d->leave($__internal_d9a263f14d8e81801eb50b126ea0c2e33cb7b15e9cddc509ccd59dae95e5000d_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_3249622b19688ea1823b2877c44cfe4af658eefef5f97da9263d8218a27e7bda = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3249622b19688ea1823b2877c44cfe4af658eefef5f97da9263d8218a27e7bda->enter($__internal_3249622b19688ea1823b2877c44cfe4af658eefef5f97da9263d8218a27e7bda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_3249622b19688ea1823b2877c44cfe4af658eefef5f97da9263d8218a27e7bda->leave($__internal_3249622b19688ea1823b2877c44cfe4af658eefef5f97da9263d8218a27e7bda_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_5289510caafa1b788dd7005058a5d10d851abc1b7352973ec5848f0c605bc3fc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5289510caafa1b788dd7005058a5d10d851abc1b7352973ec5848f0c605bc3fc->enter($__internal_5289510caafa1b788dd7005058a5d10d851abc1b7352973ec5848f0c605bc3fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_5289510caafa1b788dd7005058a5d10d851abc1b7352973ec5848f0c605bc3fc->leave($__internal_5289510caafa1b788dd7005058a5d10d851abc1b7352973ec5848f0c605bc3fc_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_a56756d4ec6afeb75b5ba6db79e547d05d989f556d2bede013c591d0d64820ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a56756d4ec6afeb75b5ba6db79e547d05d989f556d2bede013c591d0d64820ee->enter($__internal_a56756d4ec6afeb75b5ba6db79e547d05d989f556d2bede013c591d0d64820ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_a56756d4ec6afeb75b5ba6db79e547d05d989f556d2bede013c591d0d64820ee->leave($__internal_a56756d4ec6afeb75b5ba6db79e547d05d989f556d2bede013c591d0d64820ee_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
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
