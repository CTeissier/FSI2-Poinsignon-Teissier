<?php

/* @Twig/Exception/exception.css.twig */
class __TwigTemplate_55f134027c632dfaf4cdbd93a9492f45f2e6f769d411b8c87a2eb38f9ae10c2f extends Twig_Template
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
        $__internal_ed00e8b5b4154dcf9f6696e127ae82ce24691571249c94911daf53da35a0f6d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed00e8b5b4154dcf9f6696e127ae82ce24691571249c94911daf53da35a0f6d2->enter($__internal_ed00e8b5b4154dcf9f6696e127ae82ce24691571249c94911daf53da35a0f6d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_ed00e8b5b4154dcf9f6696e127ae82ce24691571249c94911daf53da35a0f6d2->leave($__internal_ed00e8b5b4154dcf9f6696e127ae82ce24691571249c94911daf53da35a0f6d2_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }

    public function getSource()
    {
        return "/*
{% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}
*/
";
    }
}
