<?php

/* @ESIEAPlatform/Advert/edit.html.twig */
class __TwigTemplate_237d8555060355fff0c47c6f33a4c0250426d430d787fe9e6dc30165b5ab1a90 extends Twig_Template
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
        $__internal_2dcfa5d4689f5254948b8589b155b5ca10401354dfd354461969143d857a5d6f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2dcfa5d4689f5254948b8589b155b5ca10401354dfd354461969143d857a5d6f->enter($__internal_2dcfa5d4689f5254948b8589b155b5ca10401354dfd354461969143d857a5d6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@ESIEAPlatform/Advert/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2dcfa5d4689f5254948b8589b155b5ca10401354dfd354461969143d857a5d6f->leave($__internal_2dcfa5d4689f5254948b8589b155b5ca10401354dfd354461969143d857a5d6f_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_9f11da474892e1a1552e88e7176eabd98eaa947cb5a6961b97ef53f177b5698c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f11da474892e1a1552e88e7176eabd98eaa947cb5a6961b97ef53f177b5698c->enter($__internal_9f11da474892e1a1552e88e7176eabd98eaa947cb5a6961b97ef53f177b5698c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "  Modifier une annonce - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_9f11da474892e1a1552e88e7176eabd98eaa947cb5a6961b97ef53f177b5698c->leave($__internal_9f11da474892e1a1552e88e7176eabd98eaa947cb5a6961b97ef53f177b5698c_prof);

    }

    // line 9
    public function block_esieaplatform_body($context, array $blocks = array())
    {
        $__internal_7f3be7e9bd3d8fe643347e06e237eb205de351805dea6f3a505ba2c4226076b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f3be7e9bd3d8fe643347e06e237eb205de351805dea6f3a505ba2c4226076b8->enter($__internal_7f3be7e9bd3d8fe643347e06e237eb205de351805dea6f3a505ba2c4226076b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "esieaplatform_body"));

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
        
        $__internal_7f3be7e9bd3d8fe643347e06e237eb205de351805dea6f3a505ba2c4226076b8->leave($__internal_7f3be7e9bd3d8fe643347e06e237eb205de351805dea6f3a505ba2c4226076b8_prof);

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
    <a href=\"{{ path('ESIEA_platform_view', {'id': advert.id}) }}\" class=\"btn btn-default\">
      <i class=\"glyphicon glyphicon-chevron-left\"></i>
      Retour à l'annonce
    </a>
  </p>

{% endblock %}";
    }
}
