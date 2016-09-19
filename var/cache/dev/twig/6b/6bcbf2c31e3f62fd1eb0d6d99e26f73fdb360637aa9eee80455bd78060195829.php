<?php

/* @Twig/Exception/error.json.twig */
class __TwigTemplate_c91fcf8e604a07a9b76b0505533a540172d615b42ccc1726db659fd78220855c extends Twig_Template
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
        $__internal_82755938d16f3e4811036d3895201f7d39b940bfcf5e3f15413834b3a2207ba7 = $this->env->getExtension("native_profiler");
        $__internal_82755938d16f3e4811036d3895201f7d39b940bfcf5e3f15413834b3a2207ba7->enter($__internal_82755938d16f3e4811036d3895201f7d39b940bfcf5e3f15413834b3a2207ba7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_82755938d16f3e4811036d3895201f7d39b940bfcf5e3f15413834b3a2207ba7->leave($__internal_82755938d16f3e4811036d3895201f7d39b940bfcf5e3f15413834b3a2207ba7_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}*/
/* */
