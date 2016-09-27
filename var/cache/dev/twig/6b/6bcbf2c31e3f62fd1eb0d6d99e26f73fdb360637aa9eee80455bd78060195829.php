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
        $__internal_241bf5d598e586317ddb8d6891a0460a48295434dde5fba40242d849e9aebd9b = $this->env->getExtension("native_profiler");
        $__internal_241bf5d598e586317ddb8d6891a0460a48295434dde5fba40242d849e9aebd9b->enter($__internal_241bf5d598e586317ddb8d6891a0460a48295434dde5fba40242d849e9aebd9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_241bf5d598e586317ddb8d6891a0460a48295434dde5fba40242d849e9aebd9b->leave($__internal_241bf5d598e586317ddb8d6891a0460a48295434dde5fba40242d849e9aebd9b_prof);

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
