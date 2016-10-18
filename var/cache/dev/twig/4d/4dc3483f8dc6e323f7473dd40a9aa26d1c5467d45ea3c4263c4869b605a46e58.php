<?php

/* ESIEAPlatformBundle:Advert:email.txt.twig */
class __TwigTemplate_15c2c35024c6a98fb2ef9e57d914f38ca4f59d6f34d037cd50be43d9c7813a73 extends Twig_Template
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
        $__internal_692dfe9aa57024b06544efb08157b4e3d48def067a612297040da7f7339141da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_692dfe9aa57024b06544efb08157b4e3d48def067a612297040da7f7339141da->enter($__internal_692dfe9aa57024b06544efb08157b4e3d48def067a612297040da7f7339141da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ESIEAPlatformBundle:Advert:email.txt.twig"));

        // line 2
        echo "
Bonjour ";
        // line 3
        echo (isset($context["pseudo"]) ? $context["pseudo"] : $this->getContext($context, "pseudo"));
        echo ",

Toute l'équipe du site se joint à moi pour vous souhaiter
la bienvenue sur notre site !

Revenez nous voir souvent !";
        
        $__internal_692dfe9aa57024b06544efb08157b4e3d48def067a612297040da7f7339141da->leave($__internal_692dfe9aa57024b06544efb08157b4e3d48def067a612297040da7f7339141da_prof);

    }

    public function getTemplateName()
    {
        return "ESIEAPlatformBundle:Advert:email.txt.twig";
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
