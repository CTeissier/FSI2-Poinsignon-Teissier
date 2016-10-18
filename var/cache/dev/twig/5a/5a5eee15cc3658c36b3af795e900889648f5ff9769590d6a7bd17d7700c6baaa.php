<?php

/* ESIEAPlatformBundle:Advert:edit.html.twig */
class __TwigTemplate_f61983b19658522d5645d63f363c9088352310798485d83fc4e35fd16c06c96a extends Twig_Template
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
        $__internal_0eb66f193c83ce9cbe79ca5af7f6f47881a165f85bc9d0dea46a02510a7882bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0eb66f193c83ce9cbe79ca5af7f6f47881a165f85bc9d0dea46a02510a7882bf->enter($__internal_0eb66f193c83ce9cbe79ca5af7f6f47881a165f85bc9d0dea46a02510a7882bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ESIEAPlatformBundle:Advert:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0eb66f193c83ce9cbe79ca5af7f6f47881a165f85bc9d0dea46a02510a7882bf->leave($__internal_0eb66f193c83ce9cbe79ca5af7f6f47881a165f85bc9d0dea46a02510a7882bf_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_7bc71f4337a6275da17bd56d5caba529a01fe03efa6451d2d3b3a30d045fc632 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7bc71f4337a6275da17bd56d5caba529a01fe03efa6451d2d3b3a30d045fc632->enter($__internal_7bc71f4337a6275da17bd56d5caba529a01fe03efa6451d2d3b3a30d045fc632_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "  Modifier une annonce - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_7bc71f4337a6275da17bd56d5caba529a01fe03efa6451d2d3b3a30d045fc632->leave($__internal_7bc71f4337a6275da17bd56d5caba529a01fe03efa6451d2d3b3a30d045fc632_prof);

    }

    // line 9
    public function block_esieaplatform_body($context, array $blocks = array())
    {
        $__internal_71c8478455ce1ba68a171612962e2ba96505e2bde5866c4cf0f2ccae54c810de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_71c8478455ce1ba68a171612962e2ba96505e2bde5866c4cf0f2ccae54c810de->enter($__internal_71c8478455ce1ba68a171612962e2ba96505e2bde5866c4cf0f2ccae54c810de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "esieaplatform_body"));

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
        
        $__internal_71c8478455ce1ba68a171612962e2ba96505e2bde5866c4cf0f2ccae54c810de->leave($__internal_71c8478455ce1ba68a171612962e2ba96505e2bde5866c4cf0f2ccae54c810de_prof);

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
