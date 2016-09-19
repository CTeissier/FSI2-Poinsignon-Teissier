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
        $__internal_a50f50652f9c5fad0bfbbceb1c6b8d15c50f0510080e9ab104b286f7cd3a3bb9 = $this->env->getExtension("native_profiler");
        $__internal_a50f50652f9c5fad0bfbbceb1c6b8d15c50f0510080e9ab104b286f7cd3a3bb9->enter($__internal_a50f50652f9c5fad0bfbbceb1c6b8d15c50f0510080e9ab104b286f7cd3a3bb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a50f50652f9c5fad0bfbbceb1c6b8d15c50f0510080e9ab104b286f7cd3a3bb9->leave($__internal_a50f50652f9c5fad0bfbbceb1c6b8d15c50f0510080e9ab104b286f7cd3a3bb9_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_783c957366352388cab43cc24b927ae2d2ca56bdcf2681bf9e0aff331e596472 = $this->env->getExtension("native_profiler");
        $__internal_783c957366352388cab43cc24b927ae2d2ca56bdcf2681bf9e0aff331e596472->enter($__internal_783c957366352388cab43cc24b927ae2d2ca56bdcf2681bf9e0aff331e596472_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_783c957366352388cab43cc24b927ae2d2ca56bdcf2681bf9e0aff331e596472->leave($__internal_783c957366352388cab43cc24b927ae2d2ca56bdcf2681bf9e0aff331e596472_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_d982164029722fe390b77ea940cdd0302f649ea1bbc95c882c1c4eea89964bf4 = $this->env->getExtension("native_profiler");
        $__internal_d982164029722fe390b77ea940cdd0302f649ea1bbc95c882c1c4eea89964bf4->enter($__internal_d982164029722fe390b77ea940cdd0302f649ea1bbc95c882c1c4eea89964bf4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_d982164029722fe390b77ea940cdd0302f649ea1bbc95c882c1c4eea89964bf4->leave($__internal_d982164029722fe390b77ea940cdd0302f649ea1bbc95c882c1c4eea89964bf4_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_d28f9d846f91607dadfee79444fbfda4bc84ba456f36dda7db51e3834de8a729 = $this->env->getExtension("native_profiler");
        $__internal_d28f9d846f91607dadfee79444fbfda4bc84ba456f36dda7db51e3834de8a729->enter($__internal_d28f9d846f91607dadfee79444fbfda4bc84ba456f36dda7db51e3834de8a729_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_d28f9d846f91607dadfee79444fbfda4bc84ba456f36dda7db51e3834de8a729->leave($__internal_d28f9d846f91607dadfee79444fbfda4bc84ba456f36dda7db51e3834de8a729_prof);

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
