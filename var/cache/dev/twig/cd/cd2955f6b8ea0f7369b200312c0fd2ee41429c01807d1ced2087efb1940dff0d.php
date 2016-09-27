<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_a33998756ff789f9a4fc03fff75413f6324dc5ed10086fd0e5807eccc1d08ded extends Twig_Template
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
        $__internal_5c13a270c1bb6a3d8055d2ac151f7975e92cfc456b9550500490a9d5679dd97a = $this->env->getExtension("native_profiler");
        $__internal_5c13a270c1bb6a3d8055d2ac151f7975e92cfc456b9550500490a9d5679dd97a->enter($__internal_5c13a270c1bb6a3d8055d2ac151f7975e92cfc456b9550500490a9d5679dd97a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5c13a270c1bb6a3d8055d2ac151f7975e92cfc456b9550500490a9d5679dd97a->leave($__internal_5c13a270c1bb6a3d8055d2ac151f7975e92cfc456b9550500490a9d5679dd97a_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_7460acc5a0d4420f790919820a54384578333f6b89b37d4a1ea9aacdacd22f82 = $this->env->getExtension("native_profiler");
        $__internal_7460acc5a0d4420f790919820a54384578333f6b89b37d4a1ea9aacdacd22f82->enter($__internal_7460acc5a0d4420f790919820a54384578333f6b89b37d4a1ea9aacdacd22f82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_7460acc5a0d4420f790919820a54384578333f6b89b37d4a1ea9aacdacd22f82->leave($__internal_7460acc5a0d4420f790919820a54384578333f6b89b37d4a1ea9aacdacd22f82_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_3bf17cfc09e6c615c63e1bde9bc2cf43c2972d65a8dc55f6a2760572cf0a457b = $this->env->getExtension("native_profiler");
        $__internal_3bf17cfc09e6c615c63e1bde9bc2cf43c2972d65a8dc55f6a2760572cf0a457b->enter($__internal_3bf17cfc09e6c615c63e1bde9bc2cf43c2972d65a8dc55f6a2760572cf0a457b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_3bf17cfc09e6c615c63e1bde9bc2cf43c2972d65a8dc55f6a2760572cf0a457b->leave($__internal_3bf17cfc09e6c615c63e1bde9bc2cf43c2972d65a8dc55f6a2760572cf0a457b_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_a50fcd2c617be50d02bd862c3be4bdb509e7db67d5d70636ba69a248ceb9ecb3 = $this->env->getExtension("native_profiler");
        $__internal_a50fcd2c617be50d02bd862c3be4bdb509e7db67d5d70636ba69a248ceb9ecb3->enter($__internal_a50fcd2c617be50d02bd862c3be4bdb509e7db67d5d70636ba69a248ceb9ecb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_a50fcd2c617be50d02bd862c3be4bdb509e7db67d5d70636ba69a248ceb9ecb3->leave($__internal_a50fcd2c617be50d02bd862c3be4bdb509e7db67d5d70636ba69a248ceb9ecb3_prof);

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
