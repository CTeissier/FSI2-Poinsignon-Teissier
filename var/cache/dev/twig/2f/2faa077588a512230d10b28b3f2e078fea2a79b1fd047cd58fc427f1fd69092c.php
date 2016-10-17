<?php

/* ESIEAPlatformBundle::layout.html.twig */
class __TwigTemplate_0f899269a923be819a479535e6f7e38a240350d3e6d7a021656347f6e2d69378 extends Twig_Template
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
        $__internal_1fa30b2e0a84b3b142758ba8678ffb75e6f2727e620dc61c32a834e21e8fc4af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1fa30b2e0a84b3b142758ba8678ffb75e6f2727e620dc61c32a834e21e8fc4af->enter($__internal_1fa30b2e0a84b3b142758ba8678ffb75e6f2727e620dc61c32a834e21e8fc4af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ESIEAPlatformBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1fa30b2e0a84b3b142758ba8678ffb75e6f2727e620dc61c32a834e21e8fc4af->leave($__internal_1fa30b2e0a84b3b142758ba8678ffb75e6f2727e620dc61c32a834e21e8fc4af_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_c6b13ef8b60e7c6ff06aa4f7fe345dc5fd874a8c120012aaa31af61b7771ff41 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c6b13ef8b60e7c6ff06aa4f7fe345dc5fd874a8c120012aaa31af61b7771ff41->enter($__internal_c6b13ef8b60e7c6ff06aa4f7fe345dc5fd874a8c120012aaa31af61b7771ff41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "  Annonces - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_c6b13ef8b60e7c6ff06aa4f7fe345dc5fd874a8c120012aaa31af61b7771ff41->leave($__internal_c6b13ef8b60e7c6ff06aa4f7fe345dc5fd874a8c120012aaa31af61b7771ff41_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_219337eb48af0dc2faaf0ebc7af17f7f4648c88b4be264ca021e0ae45ba0861c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_219337eb48af0dc2faaf0ebc7af17f7f4648c88b4be264ca021e0ae45ba0861c->enter($__internal_219337eb48af0dc2faaf0ebc7af17f7f4648c88b4be264ca021e0ae45ba0861c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_219337eb48af0dc2faaf0ebc7af17f7f4648c88b4be264ca021e0ae45ba0861c->leave($__internal_219337eb48af0dc2faaf0ebc7af17f7f4648c88b4be264ca021e0ae45ba0861c_prof);

    }

    // line 17
    public function block_esieaplatform_body($context, array $blocks = array())
    {
        $__internal_7d135c5f87dfbbd147921e1dab4171f82602564a6f3c37e0a401f74e068d6377 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d135c5f87dfbbd147921e1dab4171f82602564a6f3c37e0a401f74e068d6377->enter($__internal_7d135c5f87dfbbd147921e1dab4171f82602564a6f3c37e0a401f74e068d6377_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "esieaplatform_body"));

        // line 18
        echo "  ";
        
        $__internal_7d135c5f87dfbbd147921e1dab4171f82602564a6f3c37e0a401f74e068d6377->leave($__internal_7d135c5f87dfbbd147921e1dab4171f82602564a6f3c37e0a401f74e068d6377_prof);

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
