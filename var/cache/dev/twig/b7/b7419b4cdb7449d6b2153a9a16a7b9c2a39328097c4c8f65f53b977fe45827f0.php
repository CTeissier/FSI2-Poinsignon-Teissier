<?php

/* ESIEAPlatformBundle::layout.html.twig */
class __TwigTemplate_95b818ef26455bba6d20891e81c566da09ba436adb5a4fe38e60d5f2fa68649b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("ESIEACoreBundle::layout.html.twig", "ESIEAPlatformBundle::layout.html.twig", 3);
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
        $__internal_7595be7a87d60056c658a073beedaf618941a4d6096e42bd0d29b8f0fed43389 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7595be7a87d60056c658a073beedaf618941a4d6096e42bd0d29b8f0fed43389->enter($__internal_7595be7a87d60056c658a073beedaf618941a4d6096e42bd0d29b8f0fed43389_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ESIEAPlatformBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7595be7a87d60056c658a073beedaf618941a4d6096e42bd0d29b8f0fed43389->leave($__internal_7595be7a87d60056c658a073beedaf618941a4d6096e42bd0d29b8f0fed43389_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_56f2467c4d48dd47eb2419dee322728935359396288e1b0d2fa881a9dbd38e7d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_56f2467c4d48dd47eb2419dee322728935359396288e1b0d2fa881a9dbd38e7d->enter($__internal_56f2467c4d48dd47eb2419dee322728935359396288e1b0d2fa881a9dbd38e7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "  Annonces - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_56f2467c4d48dd47eb2419dee322728935359396288e1b0d2fa881a9dbd38e7d->leave($__internal_56f2467c4d48dd47eb2419dee322728935359396288e1b0d2fa881a9dbd38e7d_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_2ab5985f63d9699609b7975ee3984b8b7b5a1e03ba9043579f3462a7cee9d649 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ab5985f63d9699609b7975ee3984b8b7b5a1e03ba9043579f3462a7cee9d649->enter($__internal_2ab5985f63d9699609b7975ee3984b8b7b5a1e03ba9043579f3462a7cee9d649_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_2ab5985f63d9699609b7975ee3984b8b7b5a1e03ba9043579f3462a7cee9d649->leave($__internal_2ab5985f63d9699609b7975ee3984b8b7b5a1e03ba9043579f3462a7cee9d649_prof);

    }

    // line 17
    public function block_esieaplatform_body($context, array $blocks = array())
    {
        $__internal_c264b9e8293113659c34e90ae4ab91ec6ef487e416e95a845918e3c21f24a53c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c264b9e8293113659c34e90ae4ab91ec6ef487e416e95a845918e3c21f24a53c->enter($__internal_c264b9e8293113659c34e90ae4ab91ec6ef487e416e95a845918e3c21f24a53c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "esieaplatform_body"));

        // line 18
        echo "  ";
        
        $__internal_c264b9e8293113659c34e90ae4ab91ec6ef487e416e95a845918e3c21f24a53c->leave($__internal_c264b9e8293113659c34e90ae4ab91ec6ef487e416e95a845918e3c21f24a53c_prof);

    }

    public function getTemplateName()
    {
        return "ESIEAPlatformBundle::layout.html.twig";
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
