<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_f1a3ba6f6b45d7d3418f2d73ac5f67c506441b0f9845c3060341d39fb75ce824 extends Twig_Template
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
        $__internal_2a7a5ac06a092520f10d91626fa5a7ab4a57024ee1987a4714793b5f73d03a4f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a7a5ac06a092520f10d91626fa5a7ab4a57024ee1987a4714793b5f73d03a4f->enter($__internal_2a7a5ac06a092520f10d91626fa5a7ab4a57024ee1987a4714793b5f73d03a4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_2a7a5ac06a092520f10d91626fa5a7ab4a57024ee1987a4714793b5f73d03a4f->leave($__internal_2a7a5ac06a092520f10d91626fa5a7ab4a57024ee1987a4714793b5f73d03a4f_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
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
