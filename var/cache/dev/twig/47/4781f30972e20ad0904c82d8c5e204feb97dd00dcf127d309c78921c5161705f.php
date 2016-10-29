<?php

/* @Twig/Exception/exception.json.twig */
class __TwigTemplate_6e3e9109aead58370ff745e782ac1e5338d0e099b6577233d2210adf90407737 extends Twig_Template
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
        $__internal_dbf0910911c7c98e7cef6b93066088a73d71a8accf2bd3319a3b848ecc4ff9f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dbf0910911c7c98e7cef6b93066088a73d71a8accf2bd3319a3b848ecc4ff9f2->enter($__internal_dbf0910911c7c98e7cef6b93066088a73d71a8accf2bd3319a3b848ecc4ff9f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_dbf0910911c7c98e7cef6b93066088a73d71a8accf2bd3319a3b848ecc4ff9f2->leave($__internal_dbf0910911c7c98e7cef6b93066088a73d71a8accf2bd3319a3b848ecc4ff9f2_prof);

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

    public function getSource()
    {
        return "{{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}
";
    }
}
