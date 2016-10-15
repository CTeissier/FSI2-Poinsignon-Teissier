<?php

/* ESIEAPlatformBundle:Advert:add.html.twig */
class __TwigTemplate_9540f64f9e176c0b5cb8b608848e91b383498ae338a6daaa3e83bbd7203e52e0 extends Twig_Template
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
        $__internal_06f270c508f3ead0f98941883027395165d91c9f473a43bdbd2a544173d627b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_06f270c508f3ead0f98941883027395165d91c9f473a43bdbd2a544173d627b7->enter($__internal_06f270c508f3ead0f98941883027395165d91c9f473a43bdbd2a544173d627b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ESIEAPlatformBundle:Advert:add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_06f270c508f3ead0f98941883027395165d91c9f473a43bdbd2a544173d627b7->leave($__internal_06f270c508f3ead0f98941883027395165d91c9f473a43bdbd2a544173d627b7_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_c9ecda6f53d1e5ef63c5edcf4b7cf76938706f550329ceae1998a280098d30da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c9ecda6f53d1e5ef63c5edcf4b7cf76938706f550329ceae1998a280098d30da->enter($__internal_c9ecda6f53d1e5ef63c5edcf4b7cf76938706f550329ceae1998a280098d30da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_c9ecda6f53d1e5ef63c5edcf4b7cf76938706f550329ceae1998a280098d30da->leave($__internal_c9ecda6f53d1e5ef63c5edcf4b7cf76938706f550329ceae1998a280098d30da_prof);

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
