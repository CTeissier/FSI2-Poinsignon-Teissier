<?php

/* @Twig/Exception/exception.json.twig */
class __TwigTemplate_20a0729b22cc586c2750e68b4565111a13f953227fecca828d804ea8756ca406 extends Twig_Template
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
        $__internal_5c23254d6b4e0c6bba58c2409d17ae0d1c2deb82e4010124575ac4c5e72971e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c23254d6b4e0c6bba58c2409d17ae0d1c2deb82e4010124575ac4c5e72971e5->enter($__internal_5c23254d6b4e0c6bba58c2409d17ae0d1c2deb82e4010124575ac4c5e72971e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_5c23254d6b4e0c6bba58c2409d17ae0d1c2deb82e4010124575ac4c5e72971e5->leave($__internal_5c23254d6b4e0c6bba58c2409d17ae0d1c2deb82e4010124575ac4c5e72971e5_prof);

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
