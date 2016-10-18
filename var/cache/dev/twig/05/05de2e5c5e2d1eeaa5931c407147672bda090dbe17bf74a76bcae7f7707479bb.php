<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_b788c9df7e8dce2e3221805f2a1404a6cd8db45014a36b34bdce37df60e33ddd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_eace28c3e099d6f71be782e32a9103148692bad1f049e20a0c8ad4e45f552f36 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eace28c3e099d6f71be782e32a9103148692bad1f049e20a0c8ad4e45f552f36->enter($__internal_eace28c3e099d6f71be782e32a9103148692bad1f049e20a0c8ad4e45f552f36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_eace28c3e099d6f71be782e32a9103148692bad1f049e20a0c8ad4e45f552f36->leave($__internal_eace28c3e099d6f71be782e32a9103148692bad1f049e20a0c8ad4e45f552f36_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_975d70b86b8a496bb65b143684a99ec74ec7a32373ec1d3830f38097cf21d4d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_975d70b86b8a496bb65b143684a99ec74ec7a32373ec1d3830f38097cf21d4d0->enter($__internal_975d70b86b8a496bb65b143684a99ec74ec7a32373ec1d3830f38097cf21d4d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_975d70b86b8a496bb65b143684a99ec74ec7a32373ec1d3830f38097cf21d4d0->leave($__internal_975d70b86b8a496bb65b143684a99ec74ec7a32373ec1d3830f38097cf21d4d0_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    public function getSource()
    {
        return "{% block panel '' %}
";
    }
}
