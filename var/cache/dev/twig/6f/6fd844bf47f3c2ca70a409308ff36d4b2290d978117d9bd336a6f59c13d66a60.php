<?php

/* ESIEAPlatformBundle:Advert:add.html.twig */
class __TwigTemplate_1747fa04754cf18a31bed44cdd8ea71a72af4609cdfa5398c05d89effee4be42 extends Twig_Template
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
        $__internal_eefc6144bf900c0c0980892d488eb45e1f59353aa2ff4a9c4f5c07e9cfda68a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eefc6144bf900c0c0980892d488eb45e1f59353aa2ff4a9c4f5c07e9cfda68a8->enter($__internal_eefc6144bf900c0c0980892d488eb45e1f59353aa2ff4a9c4f5c07e9cfda68a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ESIEAPlatformBundle:Advert:add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_eefc6144bf900c0c0980892d488eb45e1f59353aa2ff4a9c4f5c07e9cfda68a8->leave($__internal_eefc6144bf900c0c0980892d488eb45e1f59353aa2ff4a9c4f5c07e9cfda68a8_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_a3161e7e2d3b77a07355b007b00d4cec1e65641751b58c19b24cffc186eff1f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a3161e7e2d3b77a07355b007b00d4cec1e65641751b58c19b24cffc186eff1f2->enter($__internal_a3161e7e2d3b77a07355b007b00d4cec1e65641751b58c19b24cffc186eff1f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_a3161e7e2d3b77a07355b007b00d4cec1e65641751b58c19b24cffc186eff1f2->leave($__internal_a3161e7e2d3b77a07355b007b00d4cec1e65641751b58c19b24cffc186eff1f2_prof);

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
