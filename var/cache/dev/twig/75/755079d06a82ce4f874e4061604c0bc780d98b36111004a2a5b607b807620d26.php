<?php

/* @Twig/Exception/exception.rdf.twig */
class __TwigTemplate_18ccf329624bcad8cfe82d961bdfdf54c082e9e781b0def217991289eddf527e extends Twig_Template
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
        $__internal_56d7c5b75772f424a1bc947d5d4a303b8282f9155da5ea7bd48cc5aa1e2a92c8 = $this->env->getExtension("native_profiler");
        $__internal_56d7c5b75772f424a1bc947d5d4a303b8282f9155da5ea7bd48cc5aa1e2a92c8->enter($__internal_56d7c5b75772f424a1bc947d5d4a303b8282f9155da5ea7bd48cc5aa1e2a92c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_56d7c5b75772f424a1bc947d5d4a303b8282f9155da5ea7bd48cc5aa1e2a92c8->leave($__internal_56d7c5b75772f424a1bc947d5d4a303b8282f9155da5ea7bd48cc5aa1e2a92c8_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.rdf.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}*/
/* */
