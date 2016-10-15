<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_462de54728dad76b5d217874d7d46c699b29d4984cdd883a2b1098f64730d48c extends Twig_Template
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
        $__internal_eb0a7ddab7d406554653e40df8f65bd462c39460fbeefe4d15a0163de87d20b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb0a7ddab7d406554653e40df8f65bd462c39460fbeefe4d15a0163de87d20b4->enter($__internal_eb0a7ddab7d406554653e40df8f65bd462c39460fbeefe4d15a0163de87d20b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_eb0a7ddab7d406554653e40df8f65bd462c39460fbeefe4d15a0163de87d20b4->leave($__internal_eb0a7ddab7d406554653e40df8f65bd462c39460fbeefe4d15a0163de87d20b4_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "{% include '@Twig/Exception/error.xml.twig' %}
";
    }
}
