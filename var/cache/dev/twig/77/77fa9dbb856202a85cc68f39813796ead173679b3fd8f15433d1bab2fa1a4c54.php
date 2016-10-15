<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_dae7fd5da4bd764e754cf1e99ba5c3aa95ea81c30ffdd2677a5ccbd0b2adb0d2 extends Twig_Template
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
        $__internal_112a99785b9dbea892f707395fe7c884cc9677c104cb16b1daf817e509fbe460 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_112a99785b9dbea892f707395fe7c884cc9677c104cb16b1daf817e509fbe460->enter($__internal_112a99785b9dbea892f707395fe7c884cc9677c104cb16b1daf817e509fbe460_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_112a99785b9dbea892f707395fe7c884cc9677c104cb16b1daf817e509fbe460->leave($__internal_112a99785b9dbea892f707395fe7c884cc9677c104cb16b1daf817e509fbe460_prof);

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
