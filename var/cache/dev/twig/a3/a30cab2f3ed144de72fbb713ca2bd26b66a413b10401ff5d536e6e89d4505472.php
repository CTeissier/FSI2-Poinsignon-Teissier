<?php

/* @WebProfiler/Profiler/ajax_layout.html.twig */
class __TwigTemplate_19892175c23b83f9fe87fdc1f6480908b373d2be07039b30b674ce5dd8e56172 extends Twig_Template
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
        $__internal_6e2d207a79f94cac236afce7c8ded9f9f7b2d4d47f0fe6f19205e8d0c019ee77 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e2d207a79f94cac236afce7c8ded9f9f7b2d4d47f0fe6f19205e8d0c019ee77->enter($__internal_6e2d207a79f94cac236afce7c8ded9f9f7b2d4d47f0fe6f19205e8d0c019ee77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_6e2d207a79f94cac236afce7c8ded9f9f7b2d4d47f0fe6f19205e8d0c019ee77->leave($__internal_6e2d207a79f94cac236afce7c8ded9f9f7b2d4d47f0fe6f19205e8d0c019ee77_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_694b3531cec71504560175ffbdb0bdad8024174eeb865f1173a4a6319295cb25 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_694b3531cec71504560175ffbdb0bdad8024174eeb865f1173a4a6319295cb25->enter($__internal_694b3531cec71504560175ffbdb0bdad8024174eeb865f1173a4a6319295cb25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_694b3531cec71504560175ffbdb0bdad8024174eeb865f1173a4a6319295cb25->leave($__internal_694b3531cec71504560175ffbdb0bdad8024174eeb865f1173a4a6319295cb25_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/ajax_layout.html.twig";
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
