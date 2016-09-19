<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_0782b9697b43f06f3c1a95449a90f0514da5e93345b5f1a55825cfe5873f9a17 extends Twig_Template
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
        $__internal_cd2b2de23596fc67af880d12bb38c3409e9d611ff9b89478424cffa7a75033b1 = $this->env->getExtension("native_profiler");
        $__internal_cd2b2de23596fc67af880d12bb38c3409e9d611ff9b89478424cffa7a75033b1->enter($__internal_cd2b2de23596fc67af880d12bb38c3409e9d611ff9b89478424cffa7a75033b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_cd2b2de23596fc67af880d12bb38c3409e9d611ff9b89478424cffa7a75033b1->leave($__internal_cd2b2de23596fc67af880d12bb38c3409e9d611ff9b89478424cffa7a75033b1_prof);

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
}
/* {{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}*/
/* */
