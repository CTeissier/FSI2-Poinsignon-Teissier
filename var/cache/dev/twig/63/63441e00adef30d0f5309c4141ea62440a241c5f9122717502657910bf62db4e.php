<?php

/* @Twig/Exception/exception.json.twig */
class __TwigTemplate_d2f8ca954a7171203d41b48d26afeae1c6b5f6275563f0475fd3e557c7b1c432 extends Twig_Template
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
        $__internal_68f979c136e02ddc46225ea81f53ba4bfe7ac249e2390a60c33a53a154ea5e6b = $this->env->getExtension("native_profiler");
        $__internal_68f979c136e02ddc46225ea81f53ba4bfe7ac249e2390a60c33a53a154ea5e6b->enter($__internal_68f979c136e02ddc46225ea81f53ba4bfe7ac249e2390a60c33a53a154ea5e6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_68f979c136e02ddc46225ea81f53ba4bfe7ac249e2390a60c33a53a154ea5e6b->leave($__internal_68f979c136e02ddc46225ea81f53ba4bfe7ac249e2390a60c33a53a154ea5e6b_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}*/
/* */
