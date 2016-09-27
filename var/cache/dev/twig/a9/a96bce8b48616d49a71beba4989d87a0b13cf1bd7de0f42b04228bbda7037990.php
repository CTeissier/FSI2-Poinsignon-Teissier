<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_0100659da50ca541b3d524369aef3bd8d3fb415c80b8cd83d4c31cef8431dbc4 extends Twig_Template
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
        $__internal_51a04db6dda98b04379fb1723b9ea48eb88659cc88ad027a1755e2ef6868ab61 = $this->env->getExtension("native_profiler");
        $__internal_51a04db6dda98b04379fb1723b9ea48eb88659cc88ad027a1755e2ef6868ab61->enter($__internal_51a04db6dda98b04379fb1723b9ea48eb88659cc88ad027a1755e2ef6868ab61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_51a04db6dda98b04379fb1723b9ea48eb88659cc88ad027a1755e2ef6868ab61->leave($__internal_51a04db6dda98b04379fb1723b9ea48eb88659cc88ad027a1755e2ef6868ab61_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
