<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_08686bb5cffece13b5089b3ed896fccded139df2f8f5eabe19088f0001307a38 extends Twig_Template
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
        $__internal_9fc85e88f61e32e524bdb26732b144554b21d24de5e40ab2f5eb8b97d04fc51d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9fc85e88f61e32e524bdb26732b144554b21d24de5e40ab2f5eb8b97d04fc51d->enter($__internal_9fc85e88f61e32e524bdb26732b144554b21d24de5e40ab2f5eb8b97d04fc51d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9fc85e88f61e32e524bdb26732b144554b21d24de5e40ab2f5eb8b97d04fc51d->leave($__internal_9fc85e88f61e32e524bdb26732b144554b21d24de5e40ab2f5eb8b97d04fc51d_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_12b515fac4f2cb845c74b4c60d7fb4d8291c7ce433538c3b24c48440a4aa0a82 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_12b515fac4f2cb845c74b4c60d7fb4d8291c7ce433538c3b24c48440a4aa0a82->enter($__internal_12b515fac4f2cb845c74b4c60d7fb4d8291c7ce433538c3b24c48440a4aa0a82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_12b515fac4f2cb845c74b4c60d7fb4d8291c7ce433538c3b24c48440a4aa0a82->leave($__internal_12b515fac4f2cb845c74b4c60d7fb4d8291c7ce433538c3b24c48440a4aa0a82_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_cb1305246b3ab7085e16125c713b722336fa7e08568382c0c610c80e0cc8bff3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb1305246b3ab7085e16125c713b722336fa7e08568382c0c610c80e0cc8bff3->enter($__internal_cb1305246b3ab7085e16125c713b722336fa7e08568382c0c610c80e0cc8bff3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_cb1305246b3ab7085e16125c713b722336fa7e08568382c0c610c80e0cc8bff3->leave($__internal_cb1305246b3ab7085e16125c713b722336fa7e08568382c0c610c80e0cc8bff3_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_fc623723eeb34211a5407ca9df8ab7dd675115ac0954d8e1a55d315c87a8426f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc623723eeb34211a5407ca9df8ab7dd675115ac0954d8e1a55d315c87a8426f->enter($__internal_fc623723eeb34211a5407ca9df8ab7dd675115ac0954d8e1a55d315c87a8426f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_fc623723eeb34211a5407ca9df8ab7dd675115ac0954d8e1a55d315c87a8426f->leave($__internal_fc623723eeb34211a5407ca9df8ab7dd675115ac0954d8e1a55d315c87a8426f_prof);

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
