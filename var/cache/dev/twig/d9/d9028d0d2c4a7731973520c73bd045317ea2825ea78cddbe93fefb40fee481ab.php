<?php

/* @ESIEAPlatform/Advert/email.txt.twig */
class __TwigTemplate_046b3db82bad5d56ad02dd8315cc3d96edbf7dffc123d753918d52958410ce68 extends Twig_Template
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
        $__internal_9fad8b526b82de5b008011b899bdd228a7cb959304de5197818a7bf16156295a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9fad8b526b82de5b008011b899bdd228a7cb959304de5197818a7bf16156295a->enter($__internal_9fad8b526b82de5b008011b899bdd228a7cb959304de5197818a7bf16156295a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@ESIEAPlatform/Advert/email.txt.twig"));

        // line 2
        echo "
Bonjour ";
        // line 3
        echo (isset($context["pseudo"]) ? $context["pseudo"] : $this->getContext($context, "pseudo"));
        echo ",

Toute l'équipe du site se joint à moi pour vous souhaiter
la bienvenue sur notre site !

Revenez nous voir souvent !";
        
        $__internal_9fad8b526b82de5b008011b899bdd228a7cb959304de5197818a7bf16156295a->leave($__internal_9fad8b526b82de5b008011b899bdd228a7cb959304de5197818a7bf16156295a_prof);

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
