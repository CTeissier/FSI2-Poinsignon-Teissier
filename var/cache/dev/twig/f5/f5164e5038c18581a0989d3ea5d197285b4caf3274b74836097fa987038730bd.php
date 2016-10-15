<?php

/* @ESIEAPlatform/Advert/add.html.twig */
class __TwigTemplate_461be34b37e0cb5642f9fc2beb44a6be5fd579839da18f0ebd9bee60f3d6e1e2 extends Twig_Template
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
        $__internal_e3b93dc6a90df1f84dd874924efc921b22613707e448d732f5e17cb2801fbbaa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e3b93dc6a90df1f84dd874924efc921b22613707e448d732f5e17cb2801fbbaa->enter($__internal_e3b93dc6a90df1f84dd874924efc921b22613707e448d732f5e17cb2801fbbaa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@ESIEAPlatform/Advert/add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e3b93dc6a90df1f84dd874924efc921b22613707e448d732f5e17cb2801fbbaa->leave($__internal_e3b93dc6a90df1f84dd874924efc921b22613707e448d732f5e17cb2801fbbaa_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_3a429084f2540ccd02cd65a39625ee1996d605783395a9dcf74210d548623b3f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a429084f2540ccd02cd65a39625ee1996d605783395a9dcf74210d548623b3f->enter($__internal_3a429084f2540ccd02cd65a39625ee1996d605783395a9dcf74210d548623b3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_3a429084f2540ccd02cd65a39625ee1996d605783395a9dcf74210d548623b3f->leave($__internal_3a429084f2540ccd02cd65a39625ee1996d605783395a9dcf74210d548623b3f_prof);

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
