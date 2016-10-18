<?php

/* @Twig/Exception/exception.atom.twig */
class __TwigTemplate_5489ba4d5f7aadd8e8891f230f15321146013ddef33390f877fb25ab2fff3c65 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_364523250c2d5f1f25282c3d5fdd6e61e19cff8cf5f7ccfce25de52c81f8be84 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_364523250c2d5f1f25282c3d5fdd6e61e19cff8cf5f7ccfce25de52c81f8be84->enter($__internal_364523250c2d5f1f25282c3d5fdd6e61e19cff8cf5f7ccfce25de52c81f8be84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_364523250c2d5f1f25282c3d5fdd6e61e19cff8cf5f7ccfce25de52c81f8be84->leave($__internal_364523250c2d5f1f25282c3d5fdd6e61e19cff8cf5f7ccfce25de52c81f8be84_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.atom.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "{% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}
";
    }
}
