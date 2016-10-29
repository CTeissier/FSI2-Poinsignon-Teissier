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
        $__internal_b4de42f814ac970ed187525ce911df3c7226b77ac0a2de2e5ded3957ca3732c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b4de42f814ac970ed187525ce911df3c7226b77ac0a2de2e5ded3957ca3732c9->enter($__internal_b4de42f814ac970ed187525ce911df3c7226b77ac0a2de2e5ded3957ca3732c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b4de42f814ac970ed187525ce911df3c7226b77ac0a2de2e5ded3957ca3732c9->leave($__internal_b4de42f814ac970ed187525ce911df3c7226b77ac0a2de2e5ded3957ca3732c9_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_0e6e53edbb56b9d40a3397659067bca0de1e9136f8b759497ebd96835dd10183 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e6e53edbb56b9d40a3397659067bca0de1e9136f8b759497ebd96835dd10183->enter($__internal_0e6e53edbb56b9d40a3397659067bca0de1e9136f8b759497ebd96835dd10183_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_0e6e53edbb56b9d40a3397659067bca0de1e9136f8b759497ebd96835dd10183->leave($__internal_0e6e53edbb56b9d40a3397659067bca0de1e9136f8b759497ebd96835dd10183_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_c83e301d72725164396605134ca0d0013c8941631466e401a1b6424d9ba8bafb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c83e301d72725164396605134ca0d0013c8941631466e401a1b6424d9ba8bafb->enter($__internal_c83e301d72725164396605134ca0d0013c8941631466e401a1b6424d9ba8bafb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_c83e301d72725164396605134ca0d0013c8941631466e401a1b6424d9ba8bafb->leave($__internal_c83e301d72725164396605134ca0d0013c8941631466e401a1b6424d9ba8bafb_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_730c684cdc15de32fad5a2e774ddb9fd5f93124fa5e3359f0bf2634f6150a558 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_730c684cdc15de32fad5a2e774ddb9fd5f93124fa5e3359f0bf2634f6150a558->enter($__internal_730c684cdc15de32fad5a2e774ddb9fd5f93124fa5e3359f0bf2634f6150a558_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_730c684cdc15de32fad5a2e774ddb9fd5f93124fa5e3359f0bf2634f6150a558->leave($__internal_730c684cdc15de32fad5a2e774ddb9fd5f93124fa5e3359f0bf2634f6150a558_prof);

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
