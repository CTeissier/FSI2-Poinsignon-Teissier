<?php

/* ESIEAPlatformBundle:Advert:add.html.twig */
class __TwigTemplate_14a5e09837c8ca7411d25580566509d48e6b4a6c43064d3e7d79abee9ef18e39 extends Twig_Template
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
        $__internal_1e39bf86744ae33db5aed74f434666397b27bfc3d21a7b15d48535db6b360acc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e39bf86744ae33db5aed74f434666397b27bfc3d21a7b15d48535db6b360acc->enter($__internal_1e39bf86744ae33db5aed74f434666397b27bfc3d21a7b15d48535db6b360acc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ESIEAPlatformBundle:Advert:add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1e39bf86744ae33db5aed74f434666397b27bfc3d21a7b15d48535db6b360acc->leave($__internal_1e39bf86744ae33db5aed74f434666397b27bfc3d21a7b15d48535db6b360acc_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_f9146ac29754268d5c545d298b2ef9deb4e9a774a83ad595f9e914bd22414cd9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f9146ac29754268d5c545d298b2ef9deb4e9a774a83ad595f9e914bd22414cd9->enter($__internal_f9146ac29754268d5c545d298b2ef9deb4e9a774a83ad595f9e914bd22414cd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_f9146ac29754268d5c545d298b2ef9deb4e9a774a83ad595f9e914bd22414cd9->leave($__internal_f9146ac29754268d5c545d298b2ef9deb4e9a774a83ad595f9e914bd22414cd9_prof);

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
