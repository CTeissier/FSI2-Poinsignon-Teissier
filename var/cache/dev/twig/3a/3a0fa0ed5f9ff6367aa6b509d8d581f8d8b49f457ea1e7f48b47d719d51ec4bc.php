<?php

/* @WebProfiler/Profiler/ajax_layout.html.twig */
class __TwigTemplate_9e2643a366fd58229c4517c52ef5531a26b7bf61577a49543426f04c00af6eab extends Twig_Template
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
        $__internal_ac25dde3bb59a6f1ebe5a09bbf72b1c2741007d73e8f83e1b0dcd22be60e3205 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac25dde3bb59a6f1ebe5a09bbf72b1c2741007d73e8f83e1b0dcd22be60e3205->enter($__internal_ac25dde3bb59a6f1ebe5a09bbf72b1c2741007d73e8f83e1b0dcd22be60e3205_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_ac25dde3bb59a6f1ebe5a09bbf72b1c2741007d73e8f83e1b0dcd22be60e3205->leave($__internal_ac25dde3bb59a6f1ebe5a09bbf72b1c2741007d73e8f83e1b0dcd22be60e3205_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_ccfc83ffa43c8b5764f73158288f31b2123eda4a0a9d824ae11123cd1fe3e523 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ccfc83ffa43c8b5764f73158288f31b2123eda4a0a9d824ae11123cd1fe3e523->enter($__internal_ccfc83ffa43c8b5764f73158288f31b2123eda4a0a9d824ae11123cd1fe3e523_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_ccfc83ffa43c8b5764f73158288f31b2123eda4a0a9d824ae11123cd1fe3e523->leave($__internal_ccfc83ffa43c8b5764f73158288f31b2123eda4a0a9d824ae11123cd1fe3e523_prof);

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
