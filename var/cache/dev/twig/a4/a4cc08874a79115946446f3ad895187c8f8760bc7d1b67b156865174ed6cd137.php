<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_fe163d97d507d8c76bb414dd21f3b3af627ccff34cd21b938c48d55e13dab33e extends Twig_Template
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
        $__internal_72dce3a4528d36edbed06e51136dea4db344f683916d9c3472771e3dcd7d0807 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_72dce3a4528d36edbed06e51136dea4db344f683916d9c3472771e3dcd7d0807->enter($__internal_72dce3a4528d36edbed06e51136dea4db344f683916d9c3472771e3dcd7d0807_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_72dce3a4528d36edbed06e51136dea4db344f683916d9c3472771e3dcd7d0807->leave($__internal_72dce3a4528d36edbed06e51136dea4db344f683916d9c3472771e3dcd7d0807_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_c7955236e9254167e366f7762b21c8630a54c70a236f9657b5cba5e4bdd9cbee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c7955236e9254167e366f7762b21c8630a54c70a236f9657b5cba5e4bdd9cbee->enter($__internal_c7955236e9254167e366f7762b21c8630a54c70a236f9657b5cba5e4bdd9cbee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_c7955236e9254167e366f7762b21c8630a54c70a236f9657b5cba5e4bdd9cbee->leave($__internal_c7955236e9254167e366f7762b21c8630a54c70a236f9657b5cba5e4bdd9cbee_prof);

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
