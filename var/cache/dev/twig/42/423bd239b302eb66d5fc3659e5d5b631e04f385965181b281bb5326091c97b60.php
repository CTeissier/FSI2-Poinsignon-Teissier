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
        $__internal_02ea1cca3c5ef9868ca44cc53a13b83404aa0dcd2d893f23eb2f526a64d7bdb0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_02ea1cca3c5ef9868ca44cc53a13b83404aa0dcd2d893f23eb2f526a64d7bdb0->enter($__internal_02ea1cca3c5ef9868ca44cc53a13b83404aa0dcd2d893f23eb2f526a64d7bdb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_02ea1cca3c5ef9868ca44cc53a13b83404aa0dcd2d893f23eb2f526a64d7bdb0->leave($__internal_02ea1cca3c5ef9868ca44cc53a13b83404aa0dcd2d893f23eb2f526a64d7bdb0_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_220fdd54ec0cd02365da289b1f0a118df4cd0163f7b6e04376713a0b22f04914 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_220fdd54ec0cd02365da289b1f0a118df4cd0163f7b6e04376713a0b22f04914->enter($__internal_220fdd54ec0cd02365da289b1f0a118df4cd0163f7b6e04376713a0b22f04914_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_220fdd54ec0cd02365da289b1f0a118df4cd0163f7b6e04376713a0b22f04914->leave($__internal_220fdd54ec0cd02365da289b1f0a118df4cd0163f7b6e04376713a0b22f04914_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_597c6bfafa1ee3671776d284ac9adbd33a0cb7b882444e15cb6eb4936413310e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_597c6bfafa1ee3671776d284ac9adbd33a0cb7b882444e15cb6eb4936413310e->enter($__internal_597c6bfafa1ee3671776d284ac9adbd33a0cb7b882444e15cb6eb4936413310e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_597c6bfafa1ee3671776d284ac9adbd33a0cb7b882444e15cb6eb4936413310e->leave($__internal_597c6bfafa1ee3671776d284ac9adbd33a0cb7b882444e15cb6eb4936413310e_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_fcc089a6774c92e041f174ef4e81abeb39c4524f1de8106ce3b6fb6d986502fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fcc089a6774c92e041f174ef4e81abeb39c4524f1de8106ce3b6fb6d986502fa->enter($__internal_fcc089a6774c92e041f174ef4e81abeb39c4524f1de8106ce3b6fb6d986502fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_fcc089a6774c92e041f174ef4e81abeb39c4524f1de8106ce3b6fb6d986502fa->leave($__internal_fcc089a6774c92e041f174ef4e81abeb39c4524f1de8106ce3b6fb6d986502fa_prof);

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
