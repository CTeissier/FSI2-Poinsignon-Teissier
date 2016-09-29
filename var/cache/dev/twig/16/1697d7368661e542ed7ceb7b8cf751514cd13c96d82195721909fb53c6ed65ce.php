<?php

/* ESIEAPlatformBundle:Advert:add.html.twig */
class __TwigTemplate_5007f54417ce4056b3ebf4557d651507fb0432d87b68d5eb0337ceef83626230 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("ESIEAPlatformBundle::layout.html.twig", "ESIEAPlatformBundle:Advert:add.html.twig", 3);
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
        $__internal_89e3790019be715524a5b61e0c5a24c698ce6438a3cee6d72835625d18cf700e = $this->env->getExtension("native_profiler");
        $__internal_89e3790019be715524a5b61e0c5a24c698ce6438a3cee6d72835625d18cf700e->enter($__internal_89e3790019be715524a5b61e0c5a24c698ce6438a3cee6d72835625d18cf700e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ESIEAPlatformBundle:Advert:add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_89e3790019be715524a5b61e0c5a24c698ce6438a3cee6d72835625d18cf700e->leave($__internal_89e3790019be715524a5b61e0c5a24c698ce6438a3cee6d72835625d18cf700e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_950ee4f67bddddb0b06e0e24cf146c0f4da000089c47bb1a408c02f048ce392e = $this->env->getExtension("native_profiler");
        $__internal_950ee4f67bddddb0b06e0e24cf146c0f4da000089c47bb1a408c02f048ce392e->enter($__internal_950ee4f67bddddb0b06e0e24cf146c0f4da000089c47bb1a408c02f048ce392e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_950ee4f67bddddb0b06e0e24cf146c0f4da000089c47bb1a408c02f048ce392e->leave($__internal_950ee4f67bddddb0b06e0e24cf146c0f4da000089c47bb1a408c02f048ce392e_prof);

    }

    public function getTemplateName()
    {
        return "ESIEAPlatformBundle:Advert:add.html.twig";
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
