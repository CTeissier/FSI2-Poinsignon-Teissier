<?php

/* ESIEAPlatformBundle:Advert:add.html.twig */
class __TwigTemplate_56c829fd469c9bf6a2ea6a11a10b62a828c119a18e8cda2f5c443e520cb0cf93 extends Twig_Template
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
        $__internal_2f9753e7c025526cf69cc94deadbf794e4a0e9fe7edd57b813bb2c2f0689b9ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f9753e7c025526cf69cc94deadbf794e4a0e9fe7edd57b813bb2c2f0689b9ef->enter($__internal_2f9753e7c025526cf69cc94deadbf794e4a0e9fe7edd57b813bb2c2f0689b9ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ESIEAPlatformBundle:Advert:add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2f9753e7c025526cf69cc94deadbf794e4a0e9fe7edd57b813bb2c2f0689b9ef->leave($__internal_2f9753e7c025526cf69cc94deadbf794e4a0e9fe7edd57b813bb2c2f0689b9ef_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_9383a773b835d0e313a38ea9ad3f044667117f1064d5b676c2135a81fab94ce0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9383a773b835d0e313a38ea9ad3f044667117f1064d5b676c2135a81fab94ce0->enter($__internal_9383a773b835d0e313a38ea9ad3f044667117f1064d5b676c2135a81fab94ce0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_9383a773b835d0e313a38ea9ad3f044667117f1064d5b676c2135a81fab94ce0->leave($__internal_9383a773b835d0e313a38ea9ad3f044667117f1064d5b676c2135a81fab94ce0_prof);

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
