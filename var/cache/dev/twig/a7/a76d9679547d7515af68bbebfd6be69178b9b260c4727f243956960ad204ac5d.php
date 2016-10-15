<?php

/* @ESIEAPlatform/Advert/email.txt.twig */
class __TwigTemplate_a00e083316b5fe02a917b343ad92fb621196d2ac002fe53f989c6da660b18455 extends Twig_Template
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
        $__internal_38bddfb512425eee3a6d0902d455d0eff06648f29d23c10ccca5385f201fdf7c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_38bddfb512425eee3a6d0902d455d0eff06648f29d23c10ccca5385f201fdf7c->enter($__internal_38bddfb512425eee3a6d0902d455d0eff06648f29d23c10ccca5385f201fdf7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@ESIEAPlatform/Advert/email.txt.twig"));

        // line 2
        echo "
Bonjour ";
        // line 3
        echo (isset($context["pseudo"]) ? $context["pseudo"] : $this->getContext($context, "pseudo"));
        echo ",

Toute l'équipe du site se joint à moi pour vous souhaiter
la bienvenue sur notre site !

Revenez nous voir souvent !";
        
        $__internal_38bddfb512425eee3a6d0902d455d0eff06648f29d23c10ccca5385f201fdf7c->leave($__internal_38bddfb512425eee3a6d0902d455d0eff06648f29d23c10ccca5385f201fdf7c_prof);

    }

    public function getTemplateName()
    {
        return "@ESIEAPlatform/Advert/email.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 3,  22 => 2,);
    }

    public function getSource()
    {
        return "{# src/ESIEA/PlatformBundle/Resources/views/Advert/email.txt.twig #}

Bonjour {{ pseudo }},

Toute l'équipe du site se joint à moi pour vous souhaiter
la bienvenue sur notre site !

Revenez nous voir souvent !";
    }
}
