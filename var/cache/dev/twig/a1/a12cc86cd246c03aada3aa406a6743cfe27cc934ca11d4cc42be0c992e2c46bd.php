<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_f7b7cd0ab65155480da9365012b688617b773ca7f9946bd065e283f8106bf9ac extends Twig_Template
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
        $__internal_54a5a861cd7a60fbd00d771d4b8c29508387a993baa0811cbec81885a0080762 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_54a5a861cd7a60fbd00d771d4b8c29508387a993baa0811cbec81885a0080762->enter($__internal_54a5a861cd7a60fbd00d771d4b8c29508387a993baa0811cbec81885a0080762_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_54a5a861cd7a60fbd00d771d4b8c29508387a993baa0811cbec81885a0080762->leave($__internal_54a5a861cd7a60fbd00d771d4b8c29508387a993baa0811cbec81885a0080762_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
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
        return "{% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}
";
    }
}
