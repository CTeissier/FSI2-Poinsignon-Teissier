<?php

/* ESIEAPlatformBundle::layout.html.twig */
class __TwigTemplate_0f899269a923be819a479535e6f7e38a240350d3e6d7a021656347f6e2d69378 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("ESIEACoreBundle::layout.html.twig", "ESIEAPlatformBundle::layout.html.twig", 3);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'esieaplatform_body' => array($this, 'block_esieaplatform_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "ESIEACoreBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e52a3d7805cbae43d96a078bbaa12999f2f1901fe48a864202b554eddce6ebca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e52a3d7805cbae43d96a078bbaa12999f2f1901fe48a864202b554eddce6ebca->enter($__internal_e52a3d7805cbae43d96a078bbaa12999f2f1901fe48a864202b554eddce6ebca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ESIEAPlatformBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e52a3d7805cbae43d96a078bbaa12999f2f1901fe48a864202b554eddce6ebca->leave($__internal_e52a3d7805cbae43d96a078bbaa12999f2f1901fe48a864202b554eddce6ebca_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_bd7a537051d44c4257164c015ad315eaa6faccba1b3e2a1462ecda8df23e8beb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd7a537051d44c4257164c015ad315eaa6faccba1b3e2a1462ecda8df23e8beb->enter($__internal_bd7a537051d44c4257164c015ad315eaa6faccba1b3e2a1462ecda8df23e8beb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "  Annonces - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_bd7a537051d44c4257164c015ad315eaa6faccba1b3e2a1462ecda8df23e8beb->leave($__internal_bd7a537051d44c4257164c015ad315eaa6faccba1b3e2a1462ecda8df23e8beb_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_5e6fa3e54f5ea25d936de8c99844fe5adb4ed155e32d72af5637c21321009032 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e6fa3e54f5ea25d936de8c99844fe5adb4ed155e32d72af5637c21321009032->enter($__internal_5e6fa3e54f5ea25d936de8c99844fe5adb4ed155e32d72af5637c21321009032_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "
  ";
        // line 12
        echo "  <h1>Annonces</h1>

  <hr>

  ";
        // line 17
        echo "  ";
        $this->displayBlock('esieaplatform_body', $context, $blocks);
        // line 19
        echo "
";
        
        $__internal_5e6fa3e54f5ea25d936de8c99844fe5adb4ed155e32d72af5637c21321009032->leave($__internal_5e6fa3e54f5ea25d936de8c99844fe5adb4ed155e32d72af5637c21321009032_prof);

    }

    // line 17
    public function block_esieaplatform_body($context, array $blocks = array())
    {
        $__internal_c42909598c65a75fc21bcfb7a487b0459be26e96e069298e0d237f19c0617f6d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c42909598c65a75fc21bcfb7a487b0459be26e96e069298e0d237f19c0617f6d->enter($__internal_c42909598c65a75fc21bcfb7a487b0459be26e96e069298e0d237f19c0617f6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "esieaplatform_body"));

        // line 18
        echo "  ";
        
        $__internal_c42909598c65a75fc21bcfb7a487b0459be26e96e069298e0d237f19c0617f6d->leave($__internal_c42909598c65a75fc21bcfb7a487b0459be26e96e069298e0d237f19c0617f6d_prof);

    }

    public function getTemplateName()
    {
        return "ESIEAPlatformBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 18,  78 => 17,  70 => 19,  67 => 17,  61 => 12,  58 => 10,  52 => 9,  42 => 6,  36 => 5,  11 => 3,);
    }

    public function getSource()
    {
        return "{# src/ESIEA/PlatformBundle/Resources/views/layout.html.twig #}

{% extends \"ESIEACoreBundle::layout.html.twig\" %}

{% block title %}
  Annonces - {{ parent() }}
{% endblock %}

{% block body %}

  {# On définit un sous-titre commun à toutes les pages du bundle, par exemple #}
  <h1>Annonces</h1>

  <hr>

  {# On définit un nouveau bloc, que les vues du bundle pourront remplir #}
  {% block esieaplatform_body %}
  {% endblock %}

{% endblock %}";
    }
}
