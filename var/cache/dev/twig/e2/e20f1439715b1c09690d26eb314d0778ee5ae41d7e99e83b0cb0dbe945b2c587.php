<?php

/* @ESIEAPlatform/layout.html.twig */
class __TwigTemplate_72276c5bf2491ba921828ed1c46db008ab9ce1fd96bcbed4f60b9c9e9e84e244 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("ESIEACoreBundle::layout.html.twig", "@ESIEAPlatform/layout.html.twig", 3);
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
        $__internal_b6428c9d109c592204ea246966e5c510c1992aee423441e5dc589e36754f38be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b6428c9d109c592204ea246966e5c510c1992aee423441e5dc589e36754f38be->enter($__internal_b6428c9d109c592204ea246966e5c510c1992aee423441e5dc589e36754f38be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@ESIEAPlatform/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b6428c9d109c592204ea246966e5c510c1992aee423441e5dc589e36754f38be->leave($__internal_b6428c9d109c592204ea246966e5c510c1992aee423441e5dc589e36754f38be_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_0084c2b0386fa771b270adb2405aebfd9b4e657e96f395b675fab824ff44b1ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0084c2b0386fa771b270adb2405aebfd9b4e657e96f395b675fab824ff44b1ce->enter($__internal_0084c2b0386fa771b270adb2405aebfd9b4e657e96f395b675fab824ff44b1ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "  Annonces - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_0084c2b0386fa771b270adb2405aebfd9b4e657e96f395b675fab824ff44b1ce->leave($__internal_0084c2b0386fa771b270adb2405aebfd9b4e657e96f395b675fab824ff44b1ce_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_8547e89c737288975cb7c84d83d39da668d0d186475ee93b2569d5438346f039 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8547e89c737288975cb7c84d83d39da668d0d186475ee93b2569d5438346f039->enter($__internal_8547e89c737288975cb7c84d83d39da668d0d186475ee93b2569d5438346f039_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_8547e89c737288975cb7c84d83d39da668d0d186475ee93b2569d5438346f039->leave($__internal_8547e89c737288975cb7c84d83d39da668d0d186475ee93b2569d5438346f039_prof);

    }

    // line 17
    public function block_esieaplatform_body($context, array $blocks = array())
    {
        $__internal_162bc861f94c0a6f59d79ca483244163caee0513621fa6c043a2ad0d36dc7597 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_162bc861f94c0a6f59d79ca483244163caee0513621fa6c043a2ad0d36dc7597->enter($__internal_162bc861f94c0a6f59d79ca483244163caee0513621fa6c043a2ad0d36dc7597_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "esieaplatform_body"));

        // line 18
        echo "  ";
        
        $__internal_162bc861f94c0a6f59d79ca483244163caee0513621fa6c043a2ad0d36dc7597->leave($__internal_162bc861f94c0a6f59d79ca483244163caee0513621fa6c043a2ad0d36dc7597_prof);

    }

    public function getTemplateName()
    {
        return "@ESIEAPlatform/layout.html.twig";
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
