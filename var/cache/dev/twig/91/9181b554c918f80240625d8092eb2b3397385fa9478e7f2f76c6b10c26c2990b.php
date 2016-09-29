<?php

/* ESIEAPlatformBundle:Advert:edit.html.twig */
class __TwigTemplate_d45a2a5fd0c80242a18b58126323285b3e352ab4acff63d1444c92c94e78242f extends Twig_Template
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
        $__internal_a0f41d2ce6be861bc0dbd17915f46a2da3146b2d4dbb7597cdf9e719167b4ae0 = $this->env->getExtension("native_profiler");
        $__internal_a0f41d2ce6be861bc0dbd17915f46a2da3146b2d4dbb7597cdf9e719167b4ae0->enter($__internal_a0f41d2ce6be861bc0dbd17915f46a2da3146b2d4dbb7597cdf9e719167b4ae0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ESIEAPlatformBundle:Advert:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a0f41d2ce6be861bc0dbd17915f46a2da3146b2d4dbb7597cdf9e719167b4ae0->leave($__internal_a0f41d2ce6be861bc0dbd17915f46a2da3146b2d4dbb7597cdf9e719167b4ae0_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_623c6b44b8f61437a44788c4cdd640c765ce270f5f2df4a26f36d256eb645b59 = $this->env->getExtension("native_profiler");
        $__internal_623c6b44b8f61437a44788c4cdd640c765ce270f5f2df4a26f36d256eb645b59->enter($__internal_623c6b44b8f61437a44788c4cdd640c765ce270f5f2df4a26f36d256eb645b59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "  Modifier une annonce - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_623c6b44b8f61437a44788c4cdd640c765ce270f5f2df4a26f36d256eb645b59->leave($__internal_623c6b44b8f61437a44788c4cdd640c765ce270f5f2df4a26f36d256eb645b59_prof);

    }

    // line 9
    public function block_esieaplatform_body($context, array $blocks = array())
    {
        $__internal_3005935dd2b727a57debd1a84cda6b3df325ebb61711619dd3d166d09b4796a3 = $this->env->getExtension("native_profiler");
        $__internal_3005935dd2b727a57debd1a84cda6b3df325ebb61711619dd3d166d09b4796a3->enter($__internal_3005935dd2b727a57debd1a84cda6b3df325ebb61711619dd3d166d09b4796a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "esieaplatform_body"));

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
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ESIEA_platform_view", array("id" => $this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-default\">
      <i class=\"glyphicon glyphicon-chevron-left\"></i>
      Retour à l'annonce
    </a>
  </p>

";
        
        $__internal_3005935dd2b727a57debd1a84cda6b3df325ebb61711619dd3d166d09b4796a3->leave($__internal_3005935dd2b727a57debd1a84cda6b3df325ebb61711619dd3d166d09b4796a3_prof);

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
