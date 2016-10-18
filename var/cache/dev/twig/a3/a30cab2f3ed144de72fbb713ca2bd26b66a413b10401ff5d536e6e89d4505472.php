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
        $__internal_28ebd6ef341b63145f8ca3dc510f8d89b92e48e30c2fc649add63223790cae50 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_28ebd6ef341b63145f8ca3dc510f8d89b92e48e30c2fc649add63223790cae50->enter($__internal_28ebd6ef341b63145f8ca3dc510f8d89b92e48e30c2fc649add63223790cae50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_28ebd6ef341b63145f8ca3dc510f8d89b92e48e30c2fc649add63223790cae50->leave($__internal_28ebd6ef341b63145f8ca3dc510f8d89b92e48e30c2fc649add63223790cae50_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_94cee83cd5d20cfdc0562e2b505f95f18764682109f6d79165a360f487a0dc2b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_94cee83cd5d20cfdc0562e2b505f95f18764682109f6d79165a360f487a0dc2b->enter($__internal_94cee83cd5d20cfdc0562e2b505f95f18764682109f6d79165a360f487a0dc2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_94cee83cd5d20cfdc0562e2b505f95f18764682109f6d79165a360f487a0dc2b->leave($__internal_94cee83cd5d20cfdc0562e2b505f95f18764682109f6d79165a360f487a0dc2b_prof);

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
