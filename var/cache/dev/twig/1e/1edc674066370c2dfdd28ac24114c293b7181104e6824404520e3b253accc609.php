<?php

/* @Twig/Exception/error.json.twig */
class __TwigTemplate_72ddf598cd43672b9675fad4864d3226d45660fa0fbea491bb926146798fce5a extends Twig_Template
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
        $__internal_460dc59db4bcef613fd1bd9075cdf6564db0dbeb265158e09078cf5a23d4a258 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_460dc59db4bcef613fd1bd9075cdf6564db0dbeb265158e09078cf5a23d4a258->enter($__internal_460dc59db4bcef613fd1bd9075cdf6564db0dbeb265158e09078cf5a23d4a258_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_460dc59db4bcef613fd1bd9075cdf6564db0dbeb265158e09078cf5a23d4a258->leave($__internal_460dc59db4bcef613fd1bd9075cdf6564db0dbeb265158e09078cf5a23d4a258_prof);

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

    public function getSource()
    {
        return "{{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}
";
    }
}
