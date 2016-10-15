<?php

/* ESIEAPlatformBundle:Advert:email.txt.twig */
class __TwigTemplate_c00732872332fbe52bdcc1a72e490231c50797385147932aeb412251d48b04a8 extends Twig_Template
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
        $__internal_34c531c629b8bfc6465bc383ff6d1522934c1aa3942eae3f680102c485513c5b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_34c531c629b8bfc6465bc383ff6d1522934c1aa3942eae3f680102c485513c5b->enter($__internal_34c531c629b8bfc6465bc383ff6d1522934c1aa3942eae3f680102c485513c5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ESIEAPlatformBundle:Advert:email.txt.twig"));

        // line 2
        echo "
Bonjour ";
        // line 3
        echo (isset($context["pseudo"]) ? $context["pseudo"] : $this->getContext($context, "pseudo"));
        echo ",

Toute l'équipe du site se joint à moi pour vous souhaiter
la bienvenue sur notre site !

Revenez nous voir souvent !";
        
        $__internal_34c531c629b8bfc6465bc383ff6d1522934c1aa3942eae3f680102c485513c5b->leave($__internal_34c531c629b8bfc6465bc383ff6d1522934c1aa3942eae3f680102c485513c5b_prof);

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
