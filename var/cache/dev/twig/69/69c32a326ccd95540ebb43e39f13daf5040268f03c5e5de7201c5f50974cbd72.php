<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_78a4c61b466f236e1786da58211d6014e9f44022f11a921e4f5d0ae74dae1bf1 extends Twig_Template
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
        $__internal_f44ad865d479e8d3ad9171c15692eaab492b7474a52b7be621aea84daaf073c1 = $this->env->getExtension("native_profiler");
        $__internal_f44ad865d479e8d3ad9171c15692eaab492b7474a52b7be621aea84daaf073c1->enter($__internal_f44ad865d479e8d3ad9171c15692eaab492b7474a52b7be621aea84daaf073c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f44ad865d479e8d3ad9171c15692eaab492b7474a52b7be621aea84daaf073c1->leave($__internal_f44ad865d479e8d3ad9171c15692eaab492b7474a52b7be621aea84daaf073c1_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_9aa1d4e9a4eaaf5f756b602670f671029c050e7ea127f7d605ca52b40f43d644 = $this->env->getExtension("native_profiler");
        $__internal_9aa1d4e9a4eaaf5f756b602670f671029c050e7ea127f7d605ca52b40f43d644->enter($__internal_9aa1d4e9a4eaaf5f756b602670f671029c050e7ea127f7d605ca52b40f43d644_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_9aa1d4e9a4eaaf5f756b602670f671029c050e7ea127f7d605ca52b40f43d644->leave($__internal_9aa1d4e9a4eaaf5f756b602670f671029c050e7ea127f7d605ca52b40f43d644_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_06c4da3d748bc25581f827e0478b2d9a6553e6c4983eac810a714dc8e56d8c4f = $this->env->getExtension("native_profiler");
        $__internal_06c4da3d748bc25581f827e0478b2d9a6553e6c4983eac810a714dc8e56d8c4f->enter($__internal_06c4da3d748bc25581f827e0478b2d9a6553e6c4983eac810a714dc8e56d8c4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_06c4da3d748bc25581f827e0478b2d9a6553e6c4983eac810a714dc8e56d8c4f->leave($__internal_06c4da3d748bc25581f827e0478b2d9a6553e6c4983eac810a714dc8e56d8c4f_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_1f9b404f1c55c7f7ade939757ee63f73b28c8db05bcf3bc7f9289958afabe64f = $this->env->getExtension("native_profiler");
        $__internal_1f9b404f1c55c7f7ade939757ee63f73b28c8db05bcf3bc7f9289958afabe64f->enter($__internal_1f9b404f1c55c7f7ade939757ee63f73b28c8db05bcf3bc7f9289958afabe64f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_1f9b404f1c55c7f7ade939757ee63f73b28c8db05bcf3bc7f9289958afabe64f->leave($__internal_1f9b404f1c55c7f7ade939757ee63f73b28c8db05bcf3bc7f9289958afabe64f_prof);

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
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
