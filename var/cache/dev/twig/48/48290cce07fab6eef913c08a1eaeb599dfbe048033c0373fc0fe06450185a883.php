<?php

/* ESIEAPlatformBundle:Advert:edit.html.twig */
class __TwigTemplate_855a51e531d770a2778ba98fe61c406a867fd3fc14b14b63b21b478235cc7eb5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("ESIEAPlatformBundle::layout.html.twig", "ESIEAPlatformBundle:Advert:edit.html.twig", 3);
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
        $__internal_9fda97679c0fc0579a8a99f65de048cc17e4b342c3a3ffb8104f220db2658003 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9fda97679c0fc0579a8a99f65de048cc17e4b342c3a3ffb8104f220db2658003->enter($__internal_9fda97679c0fc0579a8a99f65de048cc17e4b342c3a3ffb8104f220db2658003_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ESIEAPlatformBundle:Advert:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9fda97679c0fc0579a8a99f65de048cc17e4b342c3a3ffb8104f220db2658003->leave($__internal_9fda97679c0fc0579a8a99f65de048cc17e4b342c3a3ffb8104f220db2658003_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_cbd729cc6fbd3ab21024b51eb45162ec450190d57d5f3e493b5fee201975f5b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cbd729cc6fbd3ab21024b51eb45162ec450190d57d5f3e493b5fee201975f5b9->enter($__internal_cbd729cc6fbd3ab21024b51eb45162ec450190d57d5f3e493b5fee201975f5b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "  Modifier une annonce - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_cbd729cc6fbd3ab21024b51eb45162ec450190d57d5f3e493b5fee201975f5b9->leave($__internal_cbd729cc6fbd3ab21024b51eb45162ec450190d57d5f3e493b5fee201975f5b9_prof);

    }

    // line 9
    public function block_esieaplatform_body($context, array $blocks = array())
    {
        $__internal_b99d636692aa5b4b5227087931ceaca3b7ebdb4e1ad80a2d0df476dada49887a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b99d636692aa5b4b5227087931ceaca3b7ebdb4e1ad80a2d0df476dada49887a->enter($__internal_b99d636692aa5b4b5227087931ceaca3b7ebdb4e1ad80a2d0df476dada49887a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "esieaplatform_body"));

        // line 10
        echo "
  <h2>Modifier une annonce</h2>

  ";
        // line 13
        echo twig_include($this->env, $context, "ESIEAPlatformBundle:Advert:form.html.twig");
        echo "

  <p>
    Vous éditez une annonce déjà existante, merci de ne pas changer
    l'esprit général de l'annonce déjà publiée.
  </p>

  <p>
    <a href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ESIEA_platform_view", array("id" => $this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-default\">
      <i class=\"glyphicon glyphicon-chevron-left\"></i>
      Retour à l'annonce
    </a>
  </p>

";
        
        $__internal_b99d636692aa5b4b5227087931ceaca3b7ebdb4e1ad80a2d0df476dada49887a->leave($__internal_b99d636692aa5b4b5227087931ceaca3b7ebdb4e1ad80a2d0df476dada49887a_prof);

    }

    public function getTemplateName()
    {
        return "ESIEAPlatformBundle:Advert:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 21,  62 => 13,  57 => 10,  51 => 9,  41 => 6,  35 => 5,  11 => 3,);
    }

    public function getSource()
    {
        return "{# src/ESIEA/PlatformBundle/Resources/views/Advert/edit.html.twig #}

{% extends \"ESIEAPlatformBundle::layout.html.twig\" %}

{% block title %}
  Modifier une annonce - {{ parent() }}
{% endblock %}

{% block esieaplatform_body %}

  <h2>Modifier une annonce</h2>

  {{ include(\"ESIEAPlatformBundle:Advert:form.html.twig\") }}

  <p>
    Vous éditez une annonce déjà existante, merci de ne pas changer
    l'esprit général de l'annonce déjà publiée.
  </p>

  <p>
    <a href=\"{{ path('ESIEA_platform_view', {'id': advert.id}) }}\" class=\"btn btn-default\">
      <i class=\"glyphicon glyphicon-chevron-left\"></i>
      Retour à l'annonce
    </a>
  </p>

{% endblock %}";
    }
}
