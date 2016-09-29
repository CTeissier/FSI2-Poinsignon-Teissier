<?php

/* ESIEAPlatformBundle:Advert:view.html.twig */
class __TwigTemplate_05cb317e08ac48eee2068509af4309df8e9a993c0c69241820b3bd8eafc5410a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("ESIEAPlatformBundle::layout.html.twig", "ESIEAPlatformBundle:Advert:view.html.twig", 3);
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
        $__internal_663c80f2fabe1fd3ffffb3c2b3946bbf73af8afaa587869bd93f0f4ad5b4068d = $this->env->getExtension("native_profiler");
        $__internal_663c80f2fabe1fd3ffffb3c2b3946bbf73af8afaa587869bd93f0f4ad5b4068d->enter($__internal_663c80f2fabe1fd3ffffb3c2b3946bbf73af8afaa587869bd93f0f4ad5b4068d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ESIEAPlatformBundle:Advert:view.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_663c80f2fabe1fd3ffffb3c2b3946bbf73af8afaa587869bd93f0f4ad5b4068d->leave($__internal_663c80f2fabe1fd3ffffb3c2b3946bbf73af8afaa587869bd93f0f4ad5b4068d_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_e72b5cc6d326a6d3f28807a82b44661a704e6cb49391b97c73ca93ec1a6b26e9 = $this->env->getExtension("native_profiler");
        $__internal_e72b5cc6d326a6d3f28807a82b44661a704e6cb49391b97c73ca93ec1a6b26e9->enter($__internal_e72b5cc6d326a6d3f28807a82b44661a704e6cb49391b97c73ca93ec1a6b26e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "  Lecture d'une annonce - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_e72b5cc6d326a6d3f28807a82b44661a704e6cb49391b97c73ca93ec1a6b26e9->leave($__internal_e72b5cc6d326a6d3f28807a82b44661a704e6cb49391b97c73ca93ec1a6b26e9_prof);

    }

    // line 9
    public function block_esieaplatform_body($context, array $blocks = array())
    {
        $__internal_222de0c2a15ccc360d99336a45a52f1e85c6f551384ee62379555863b6b00cc6 = $this->env->getExtension("native_profiler");
        $__internal_222de0c2a15ccc360d99336a45a52f1e85c6f551384ee62379555863b6b00cc6->enter($__internal_222de0c2a15ccc360d99336a45a52f1e85c6f551384ee62379555863b6b00cc6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "esieaplatform_body"));

        // line 10
        echo "
  <h2>";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "title", array()), "html", null, true);
        echo "</h2>
  <i>Par ";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "author", array()), "html", null, true);
        echo ", le ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "date", array()), "d/m/Y"), "html", null, true);
        echo "</i>

  <div class=\"well\">
    ";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "content", array()), "html", null, true);
        echo "
  </div>

  <p>
    <a href=\"";
        // line 19
        echo $this->env->getExtension('routing')->getPath("esiea_platform_home");
        echo "\" class=\"btn btn-default\">
      <i class=\"glyphicon glyphicon-chevron-left\"></i>
      Retour à la liste
    </a>
    <a href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("esiea_platform_edit", array("id" => $this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-default\">
      <i class=\"glyphicon glyphicon-edit\"></i>
      Modifier l'annonce
    </a>
    <a href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("esiea_platform_delete", array("id" => $this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-danger\">
      <i class=\"glyphicon glyphicon-trash\"></i>
      Supprimer l'annonce
    </a>
  </p>

";
        
        $__internal_222de0c2a15ccc360d99336a45a52f1e85c6f551384ee62379555863b6b00cc6->leave($__internal_222de0c2a15ccc360d99336a45a52f1e85c6f551384ee62379555863b6b00cc6_prof);

    }

    public function getTemplateName()
    {
        return "ESIEAPlatformBundle:Advert:view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 27,  86 => 23,  79 => 19,  72 => 15,  64 => 12,  60 => 11,  57 => 10,  51 => 9,  41 => 6,  35 => 5,  11 => 3,);
    }

    public function getSource()
    {
        return "{# src/ESIEA/PlatformBundle/Resources/view/Advert/view.html.twig #}

{% extends \"ESIEAPlatformBundle::layout.html.twig\" %}

{% block title %}
  Lecture d'une annonce - {{ parent() }}
{% endblock %}

{% block esieaplatform_body %}

  <h2>{{ advert.title }}</h2>
  <i>Par {{ advert.author }}, le {{ advert.date|date('d/m/Y') }}</i>

  <div class=\"well\">
    {{ advert.content }}
  </div>

  <p>
    <a href=\"{{ path('esiea_platform_home') }}\" class=\"btn btn-default\">
      <i class=\"glyphicon glyphicon-chevron-left\"></i>
      Retour à la liste
    </a>
    <a href=\"{{ path('esiea_platform_edit', {'id': advert.id}) }}\" class=\"btn btn-default\">
      <i class=\"glyphicon glyphicon-edit\"></i>
      Modifier l'annonce
    </a>
    <a href=\"{{ path('esiea_platform_delete', {'id': advert.id}) }}\" class=\"btn btn-danger\">
      <i class=\"glyphicon glyphicon-trash\"></i>
      Supprimer l'annonce
    </a>
  </p>

{% endblock %}";
    }
}
