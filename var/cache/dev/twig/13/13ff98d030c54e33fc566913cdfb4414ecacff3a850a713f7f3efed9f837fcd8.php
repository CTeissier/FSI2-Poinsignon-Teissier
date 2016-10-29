<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_657d5c77b36e98fdea5b62459050597987dfe1dd70b58a1faafaf9f897ab0a08 extends Twig_Template
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
        $__internal_2cab1fbda77ae8a8e415e344349e8274cebfc65fe8f309581a457875c7eedf27 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2cab1fbda77ae8a8e415e344349e8274cebfc65fe8f309581a457875c7eedf27->enter($__internal_2cab1fbda77ae8a8e415e344349e8274cebfc65fe8f309581a457875c7eedf27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_2cab1fbda77ae8a8e415e344349e8274cebfc65fe8f309581a457875c7eedf27->leave($__internal_2cab1fbda77ae8a8e415e344349e8274cebfc65fe8f309581a457875c7eedf27_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
