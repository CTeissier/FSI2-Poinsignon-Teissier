<?php

/* @Twig/Exception/error.json.twig */
class __TwigTemplate_edb7afc7003042807403c6752041e201f5cf80786647b4b570d6f46972485e61 extends Twig_Template
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
        $__internal_095b57d87c810ed14c53dd5624eb727dab0ac0ee75e4ce0bc0e96aac83dbdbc9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_095b57d87c810ed14c53dd5624eb727dab0ac0ee75e4ce0bc0e96aac83dbdbc9->enter($__internal_095b57d87c810ed14c53dd5624eb727dab0ac0ee75e4ce0bc0e96aac83dbdbc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_095b57d87c810ed14c53dd5624eb727dab0ac0ee75e4ce0bc0e96aac83dbdbc9->leave($__internal_095b57d87c810ed14c53dd5624eb727dab0ac0ee75e4ce0bc0e96aac83dbdbc9_prof);

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
