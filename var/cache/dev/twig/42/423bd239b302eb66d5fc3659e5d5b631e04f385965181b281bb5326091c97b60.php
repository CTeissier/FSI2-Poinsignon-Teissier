<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_bddbaf82aadc6e34055d3c3efd9aa25e65c055e6d43fda5294ac3980ac2a7386 extends Twig_Template
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
        $__internal_c1a4e51fbb503ade30c40dc99b626d43e423e4df3be882b98dfcc2f38aff6717 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c1a4e51fbb503ade30c40dc99b626d43e423e4df3be882b98dfcc2f38aff6717->enter($__internal_c1a4e51fbb503ade30c40dc99b626d43e423e4df3be882b98dfcc2f38aff6717_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c1a4e51fbb503ade30c40dc99b626d43e423e4df3be882b98dfcc2f38aff6717->leave($__internal_c1a4e51fbb503ade30c40dc99b626d43e423e4df3be882b98dfcc2f38aff6717_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_90bb753d7f11f13f3fc6aa98cc302a91472cbba488ae824ecd7a356a93a2ab28 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_90bb753d7f11f13f3fc6aa98cc302a91472cbba488ae824ecd7a356a93a2ab28->enter($__internal_90bb753d7f11f13f3fc6aa98cc302a91472cbba488ae824ecd7a356a93a2ab28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_90bb753d7f11f13f3fc6aa98cc302a91472cbba488ae824ecd7a356a93a2ab28->leave($__internal_90bb753d7f11f13f3fc6aa98cc302a91472cbba488ae824ecd7a356a93a2ab28_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_f3cdc64b12376a61b6b1578b5545a8b70fe150ad61fcc28b8941280711981a44 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f3cdc64b12376a61b6b1578b5545a8b70fe150ad61fcc28b8941280711981a44->enter($__internal_f3cdc64b12376a61b6b1578b5545a8b70fe150ad61fcc28b8941280711981a44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_f3cdc64b12376a61b6b1578b5545a8b70fe150ad61fcc28b8941280711981a44->leave($__internal_f3cdc64b12376a61b6b1578b5545a8b70fe150ad61fcc28b8941280711981a44_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_2011f3ab8cbe689d2858363264d36fbc399330934f479d69be7ed0e5006cb84c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2011f3ab8cbe689d2858363264d36fbc399330934f479d69be7ed0e5006cb84c->enter($__internal_2011f3ab8cbe689d2858363264d36fbc399330934f479d69be7ed0e5006cb84c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_2011f3ab8cbe689d2858363264d36fbc399330934f479d69be7ed0e5006cb84c->leave($__internal_2011f3ab8cbe689d2858363264d36fbc399330934f479d69be7ed0e5006cb84c_prof);

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
