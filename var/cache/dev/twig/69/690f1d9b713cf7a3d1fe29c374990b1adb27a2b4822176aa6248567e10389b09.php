<?php

/* ESIEAPlatformBundle:Advert:edit.html.twig */
class __TwigTemplate_ed94d87f23527c1402b1d5fca8bd423c544e0aa27d0540e314e3845a2441c61e extends Twig_Template
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
        $__internal_07d71dd929e584b95a71baf7d174f692756e0391131f617c7159d7c0d658a43a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_07d71dd929e584b95a71baf7d174f692756e0391131f617c7159d7c0d658a43a->enter($__internal_07d71dd929e584b95a71baf7d174f692756e0391131f617c7159d7c0d658a43a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ESIEAPlatformBundle:Advert:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_07d71dd929e584b95a71baf7d174f692756e0391131f617c7159d7c0d658a43a->leave($__internal_07d71dd929e584b95a71baf7d174f692756e0391131f617c7159d7c0d658a43a_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_74052ca748de8b66adaa55b512702452beccda0a29340a878b42d04d736b7402 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_74052ca748de8b66adaa55b512702452beccda0a29340a878b42d04d736b7402->enter($__internal_74052ca748de8b66adaa55b512702452beccda0a29340a878b42d04d736b7402_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "  Modifier une annonce - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_74052ca748de8b66adaa55b512702452beccda0a29340a878b42d04d736b7402->leave($__internal_74052ca748de8b66adaa55b512702452beccda0a29340a878b42d04d736b7402_prof);

    }

    // line 9
    public function block_esieaplatform_body($context, array $blocks = array())
    {
        $__internal_7952b5c7b2ab30bc3a69b6a6734d1b66bd1a21674b5af4974870159379c9af2b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7952b5c7b2ab30bc3a69b6a6734d1b66bd1a21674b5af4974870159379c9af2b->enter($__internal_7952b5c7b2ab30bc3a69b6a6734d1b66bd1a21674b5af4974870159379c9af2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "esieaplatform_body"));

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
        
        $__internal_7952b5c7b2ab30bc3a69b6a6734d1b66bd1a21674b5af4974870159379c9af2b->leave($__internal_7952b5c7b2ab30bc3a69b6a6734d1b66bd1a21674b5af4974870159379c9af2b_prof);

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
