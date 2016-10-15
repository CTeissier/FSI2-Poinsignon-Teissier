<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_a4f9d2e180790b22552cbaefd2aec0a210ec8b1977a8c918f83ab116423ecae6 extends Twig_Template
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
        $__internal_e9855cc3ff2e11cca4ebda887c92352cc9ffb4f071272ec693f72989418d0f0a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e9855cc3ff2e11cca4ebda887c92352cc9ffb4f071272ec693f72989418d0f0a->enter($__internal_e9855cc3ff2e11cca4ebda887c92352cc9ffb4f071272ec693f72989418d0f0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_e9855cc3ff2e11cca4ebda887c92352cc9ffb4f071272ec693f72989418d0f0a->leave($__internal_e9855cc3ff2e11cca4ebda887c92352cc9ffb4f071272ec693f72989418d0f0a_prof);

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
