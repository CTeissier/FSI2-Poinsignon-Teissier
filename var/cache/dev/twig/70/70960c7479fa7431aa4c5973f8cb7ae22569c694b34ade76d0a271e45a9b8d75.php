<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_34c6ced2a272ea658fa4ea73dc09c3b048978c6e4e96db7c7ef0d654586c1c2d extends Twig_Template
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
        $__internal_1758db93dc283f4d1a7e3524ad0f9a43a5ccb6a00c838ecb9b8b6b7f88e810b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1758db93dc283f4d1a7e3524ad0f9a43a5ccb6a00c838ecb9b8b6b7f88e810b6->enter($__internal_1758db93dc283f4d1a7e3524ad0f9a43a5ccb6a00c838ecb9b8b6b7f88e810b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_1758db93dc283f4d1a7e3524ad0f9a43a5ccb6a00c838ecb9b8b6b7f88e810b6->leave($__internal_1758db93dc283f4d1a7e3524ad0f9a43a5ccb6a00c838ecb9b8b6b7f88e810b6_prof);

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

    public function getSource()
    {
        return "{{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}
";
    }
}
