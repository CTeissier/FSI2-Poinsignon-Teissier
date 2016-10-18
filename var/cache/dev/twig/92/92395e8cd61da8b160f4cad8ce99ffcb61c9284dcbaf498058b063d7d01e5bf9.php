<?php

/* @ESIEAPlatform/Advert/delete.html.twig */
class __TwigTemplate_2019cadcff5170891b937efce110c3e6594eeaae60062b14e047c7d57e6cb12b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("ESIEAPlatformBundle::layout.html.twig", "@ESIEAPlatform/Advert/delete.html.twig", 3);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'esieaplatform_body' => array($this, 'block_esieaplatform_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "ESIEAPlatformBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c9dc54b0e02691b4f429d2fa85f2ecf871beec1c155fbac2af1580a6da051a19 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c9dc54b0e02691b4f429d2fa85f2ecf871beec1c155fbac2af1580a6da051a19->enter($__internal_c9dc54b0e02691b4f429d2fa85f2ecf871beec1c155fbac2af1580a6da051a19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@ESIEAPlatform/Advert/delete.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c9dc54b0e02691b4f429d2fa85f2ecf871beec1c155fbac2af1580a6da051a19->leave($__internal_c9dc54b0e02691b4f429d2fa85f2ecf871beec1c155fbac2af1580a6da051a19_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_74db976d8ef7419dd985dce35078ff2b48978cbf6c976965db65951b384c4005 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_74db976d8ef7419dd985dce35078ff2b48978cbf6c976965db65951b384c4005->enter($__internal_74db976d8ef7419dd985dce35078ff2b48978cbf6c976965db65951b384c4005_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "  Supprimer une annonce - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_74db976d8ef7419dd985dce35078ff2b48978cbf6c976965db65951b384c4005->leave($__internal_74db976d8ef7419dd985dce35078ff2b48978cbf6c976965db65951b384c4005_prof);

    }

    // line 9
    public function block_esieaplatform_body($context, array $blocks = array())
    {
        $__internal_14b61dd7a16af8e30927696ec25a14754eb69d4d871e874aeebe9f278c7fa3c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_14b61dd7a16af8e30927696ec25a14754eb69d4d871e874aeebe9f278c7fa3c8->enter($__internal_14b61dd7a16af8e30927696ec25a14754eb69d4d871e874aeebe9f278c7fa3c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "esieaplatform_body"));

        // line 10
        echo "
  <h2>Supprimer une annonce</h2>

  <p>
    Etes-vous certain de vouloir supprimer l'annonce \"";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "title", array()), "html", null, true);
        echo "\" ?
  </p>

  ";
        // line 18
        echo "  <form action=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("esiea_platform_delete", array("id" => $this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "id", array()))), "html", null, true);
        echo "\" method=\"post\">
    <a href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("esiea_platform_view", array("id" => $this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-default\">
      <i class=\"glyphicon glyphicon-chevron-left\"></i>
      Retour à l'annonce
    </a>
    ";
        // line 24
        echo "    <input type=\"submit\" value=\"Supprimer\" class=\"btn btn-danger\" />
    ";
        // line 26
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
  </form>

";
        
        $__internal_14b61dd7a16af8e30927696ec25a14754eb69d4d871e874aeebe9f278c7fa3c8->leave($__internal_14b61dd7a16af8e30927696ec25a14754eb69d4d871e874aeebe9f278c7fa3c8_prof);

    }

    public function getTemplateName()
    {
        return "@ESIEAPlatform/Advert/delete.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 26,  81 => 24,  74 => 19,  69 => 18,  63 => 14,  57 => 10,  51 => 9,  41 => 6,  35 => 5,  11 => 3,);
    }

    public function getSource()
    {
        return "{# src/ESIEA/PlatformBundle/Resources/views/Advert/delete.html.twig #}

{% extends \"ESIEAPlatformBundle::layout.html.twig\" %}

{% block title %}
  Supprimer une annonce - {{ parent() }}
{% endblock %}

{% block esieaplatform_body %}

  <h2>Supprimer une annonce</h2>

  <p>
    Etes-vous certain de vouloir supprimer l'annonce \"{{ advert.title }}\" ?
  </p>

  {# On met l'id de l'annonce dans la route de l'action du formulaire #}
  <form action=\"{{ path('esiea_platform_delete', {'id': advert.id}) }}\" method=\"post\">
    <a href=\"{{ path('esiea_platform_view', {'id': advert.id}) }}\" class=\"btn btn-default\">
      <i class=\"glyphicon glyphicon-chevron-left\"></i>
      Retour à l'annonce
    </a>
    {# Ici j'ai écrit le bouton de soumission à la main #}
    <input type=\"submit\" value=\"Supprimer\" class=\"btn btn-danger\" />
    {# Ceci va générer le champ CSRF #}
    {{ form_rest(form) }}
  </form>

{% endblock %}";
    }
}
