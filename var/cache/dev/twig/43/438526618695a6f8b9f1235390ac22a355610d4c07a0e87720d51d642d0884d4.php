<?php

/* @ESIEAPlatform/Advert/edit.html.twig */
class __TwigTemplate_2c29ab9a636652b7da2cb4d6309b54408db530eb8ff8ce3284470c2a00f89a79 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("ESIEAPlatformBundle::layout.html.twig", "@ESIEAPlatform/Advert/edit.html.twig", 3);
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
        $__internal_ac5990f4acb92c534d17b15d419d6b7f99b8f1bd77e86119e3ef57a425e8089f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac5990f4acb92c534d17b15d419d6b7f99b8f1bd77e86119e3ef57a425e8089f->enter($__internal_ac5990f4acb92c534d17b15d419d6b7f99b8f1bd77e86119e3ef57a425e8089f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@ESIEAPlatform/Advert/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ac5990f4acb92c534d17b15d419d6b7f99b8f1bd77e86119e3ef57a425e8089f->leave($__internal_ac5990f4acb92c534d17b15d419d6b7f99b8f1bd77e86119e3ef57a425e8089f_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_2da1468b599550df364fe0912a40c014836b0bdb479dbb3df84dc457af9623ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2da1468b599550df364fe0912a40c014836b0bdb479dbb3df84dc457af9623ff->enter($__internal_2da1468b599550df364fe0912a40c014836b0bdb479dbb3df84dc457af9623ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "  Modifier une annonce - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_2da1468b599550df364fe0912a40c014836b0bdb479dbb3df84dc457af9623ff->leave($__internal_2da1468b599550df364fe0912a40c014836b0bdb479dbb3df84dc457af9623ff_prof);

    }

    // line 9
    public function block_esieaplatform_body($context, array $blocks = array())
    {
        $__internal_11a51435b070513b3c050e4675b8950d00a075e090fc3cdeac07bf7df0a2a0ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_11a51435b070513b3c050e4675b8950d00a075e090fc3cdeac07bf7df0a2a0ec->enter($__internal_11a51435b070513b3c050e4675b8950d00a075e090fc3cdeac07bf7df0a2a0ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "esieaplatform_body"));

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
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("esiea_platform_view", array("id" => $this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-default\">
      <i class=\"glyphicon glyphicon-chevron-left\"></i>
      Retour à l'annonce
    </a>
  </p>

";
        
        $__internal_11a51435b070513b3c050e4675b8950d00a075e090fc3cdeac07bf7df0a2a0ec->leave($__internal_11a51435b070513b3c050e4675b8950d00a075e090fc3cdeac07bf7df0a2a0ec_prof);

    }

    public function getTemplateName()
    {
        return "@ESIEAPlatform/Advert/edit.html.twig";
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
    <a href=\"{{ path('esiea_platform_view', {'id': advert.id}) }}\" class=\"btn btn-default\">
      <i class=\"glyphicon glyphicon-chevron-left\"></i>
      Retour à l'annonce
    </a>
  </p>

{% endblock %}";
    }
}
