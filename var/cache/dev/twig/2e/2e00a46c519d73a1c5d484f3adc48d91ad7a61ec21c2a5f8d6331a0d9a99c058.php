<?php

/* ESIEAPlatformBundle:Advert:edit.html.twig */
class __TwigTemplate_ef907fef97344be6c0ba05b86d206b49de1a84af32371b1d5dd22b9c220236b7 extends Twig_Template
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
        $__internal_d3e07e047d1a832d46b27eb70b33af12e388180ec189a16edebac51b5b5f35d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d3e07e047d1a832d46b27eb70b33af12e388180ec189a16edebac51b5b5f35d6->enter($__internal_d3e07e047d1a832d46b27eb70b33af12e388180ec189a16edebac51b5b5f35d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ESIEAPlatformBundle:Advert:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d3e07e047d1a832d46b27eb70b33af12e388180ec189a16edebac51b5b5f35d6->leave($__internal_d3e07e047d1a832d46b27eb70b33af12e388180ec189a16edebac51b5b5f35d6_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_c914057f3c7916e5603622fdbfdd093f1893f1e62761994c5f6b2923ddaa1f72 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c914057f3c7916e5603622fdbfdd093f1893f1e62761994c5f6b2923ddaa1f72->enter($__internal_c914057f3c7916e5603622fdbfdd093f1893f1e62761994c5f6b2923ddaa1f72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "  Modifier une annonce - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_c914057f3c7916e5603622fdbfdd093f1893f1e62761994c5f6b2923ddaa1f72->leave($__internal_c914057f3c7916e5603622fdbfdd093f1893f1e62761994c5f6b2923ddaa1f72_prof);

    }

    // line 9
    public function block_esieaplatform_body($context, array $blocks = array())
    {
        $__internal_f0862782b16eb52c206754103b8d92b46ac72f63b68d079a4904843fee8cf205 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f0862782b16eb52c206754103b8d92b46ac72f63b68d079a4904843fee8cf205->enter($__internal_f0862782b16eb52c206754103b8d92b46ac72f63b68d079a4904843fee8cf205_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "esieaplatform_body"));

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
        
        $__internal_f0862782b16eb52c206754103b8d92b46ac72f63b68d079a4904843fee8cf205->leave($__internal_f0862782b16eb52c206754103b8d92b46ac72f63b68d079a4904843fee8cf205_prof);

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
    <a href=\"{{ path('esiea_platform_view', {'id': advert.id}) }}\" class=\"btn btn-default\">
      <i class=\"glyphicon glyphicon-chevron-left\"></i>
      Retour à l'annonce
    </a>
  </p>

{% endblock %}";
    }
}
