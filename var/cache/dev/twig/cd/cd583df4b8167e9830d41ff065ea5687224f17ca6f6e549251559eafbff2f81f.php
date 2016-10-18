<?php

/* @ESIEAPlatform/Advert/add.html.twig */
class __TwigTemplate_fb832bd1ace2043d2fd2cb1e4cad5c6a641fa38e75fe82073b791130378ec311 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("ESIEAPlatformBundle::layout.html.twig", "@ESIEAPlatform/Advert/add.html.twig", 3);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "ESIEAPlatformBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_415cdd8f570a49ca980cdc9413b74f99e16ff1d16625a880fb4883feffbeb816 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_415cdd8f570a49ca980cdc9413b74f99e16ff1d16625a880fb4883feffbeb816->enter($__internal_415cdd8f570a49ca980cdc9413b74f99e16ff1d16625a880fb4883feffbeb816_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@ESIEAPlatform/Advert/add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_415cdd8f570a49ca980cdc9413b74f99e16ff1d16625a880fb4883feffbeb816->leave($__internal_415cdd8f570a49ca980cdc9413b74f99e16ff1d16625a880fb4883feffbeb816_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_a23451bcbdfb41ddd737fb7c5a746d8f1f2db9cbd8d6579af5e88f41ad05f087 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a23451bcbdfb41ddd737fb7c5a746d8f1f2db9cbd8d6579af5e88f41ad05f087->enter($__internal_a23451bcbdfb41ddd737fb7c5a746d8f1f2db9cbd8d6579af5e88f41ad05f087_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
  <h2>Ajouter une annonce</h2>

  ";
        // line 9
        echo twig_include($this->env, $context, "ESIEAPlatformBundle:Advert:form.html.twig");
        echo "

  <p>
    Attention : cette annonce sera ajoutée directement
    sur la page d'accueil après validation du formulaire.
  </p>

";
        
        $__internal_a23451bcbdfb41ddd737fb7c5a746d8f1f2db9cbd8d6579af5e88f41ad05f087->leave($__internal_a23451bcbdfb41ddd737fb7c5a746d8f1f2db9cbd8d6579af5e88f41ad05f087_prof);

    }

    public function getTemplateName()
    {
        return "@ESIEAPlatform/Advert/add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 9,  40 => 6,  34 => 5,  11 => 3,);
    }

    public function getSource()
    {
        return "{# src/ESIEA/PlatformBundle/Resources/views/Advert/add.html.twig #}

{% extends \"ESIEAPlatformBundle::layout.html.twig\" %}

{% block body %}

  <h2>Ajouter une annonce</h2>

  {{ include(\"ESIEAPlatformBundle:Advert:form.html.twig\") }}

  <p>
    Attention : cette annonce sera ajoutée directement
    sur la page d'accueil après validation du formulaire.
  </p>

{% endblock %}";
    }
}
