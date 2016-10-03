<?php

/* ESIEAPlatformBundle:Advert:index.html.twig */
class __TwigTemplate_28944bff6c60322c1f1f37e30fe3dcc93b8aafcb06b65897822c35a84408f87c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("ESIEAPlatformBundle::layout.html.twig", "ESIEAPlatformBundle:Advert:index.html.twig", 3);
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
        $__internal_fb064652fa3862c6589652179a884406163c75597fc0e1ab93e5b8a551a43811 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb064652fa3862c6589652179a884406163c75597fc0e1ab93e5b8a551a43811->enter($__internal_fb064652fa3862c6589652179a884406163c75597fc0e1ab93e5b8a551a43811_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ESIEAPlatformBundle:Advert:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fb064652fa3862c6589652179a884406163c75597fc0e1ab93e5b8a551a43811->leave($__internal_fb064652fa3862c6589652179a884406163c75597fc0e1ab93e5b8a551a43811_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_65884e55b4593cbfac90bd56906b18ebfe6b6f87e7ba23e17ace910f61cfc4a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_65884e55b4593cbfac90bd56906b18ebfe6b6f87e7ba23e17ace910f61cfc4a1->enter($__internal_65884e55b4593cbfac90bd56906b18ebfe6b6f87e7ba23e17ace910f61cfc4a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "  Accueil - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_65884e55b4593cbfac90bd56906b18ebfe6b6f87e7ba23e17ace910f61cfc4a1->leave($__internal_65884e55b4593cbfac90bd56906b18ebfe6b6f87e7ba23e17ace910f61cfc4a1_prof);

    }

    // line 9
    public function block_esieaplatform_body($context, array $blocks = array())
    {
        $__internal_4c50821ef6958bac317d8a2250c54a10f80cc5e9a1dfa55d46aa57267b4bbe36 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c50821ef6958bac317d8a2250c54a10f80cc5e9a1dfa55d46aa57267b4bbe36->enter($__internal_4c50821ef6958bac317d8a2250c54a10f80cc5e9a1dfa55d46aa57267b4bbe36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "esieaplatform_body"));

        // line 10
        echo "
  <h2>Liste des annonces</h2>

  <ul>
    ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listAdverts"]) ? $context["listAdverts"] : $this->getContext($context, "listAdverts")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["advert"]) {
            // line 15
            echo "      <li>
        <a href=\"";
            // line 16
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("esiea_platform_view", array("id" => $this->getAttribute($context["advert"], "id", array()))), "html", null, true);
            echo "\">
          ";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($context["advert"], "title", array()), "html", null, true);
            echo "
        </a>
        par ";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["advert"], "author", array()), "html", null, true);
            echo ",
        le ";
            // line 20
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["advert"], "date", array()), "d/m/Y"), "html", null, true);
            echo "
      </li>
    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 23
            echo "      <li>Pas (encore !) d'annonces</li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['advert'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "  </ul>

";
        
        $__internal_4c50821ef6958bac317d8a2250c54a10f80cc5e9a1dfa55d46aa57267b4bbe36->leave($__internal_4c50821ef6958bac317d8a2250c54a10f80cc5e9a1dfa55d46aa57267b4bbe36_prof);

    }

    public function getTemplateName()
    {
        return "ESIEAPlatformBundle:Advert:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 25,  92 => 23,  84 => 20,  80 => 19,  75 => 17,  71 => 16,  68 => 15,  63 => 14,  57 => 10,  51 => 9,  41 => 6,  35 => 5,  11 => 3,);
    }

    public function getSource()
    {
        return "{# src/ESIEA/PlatformBundle/Resources/views/Advert/index.html.twig #}

{% extends \"ESIEAPlatformBundle::layout.html.twig\" %}

{% block title %}
  Accueil - {{ parent() }}
{% endblock %}

{% block esieaplatform_body %}

  <h2>Liste des annonces</h2>

  <ul>
    {% for advert in listAdverts %}
      <li>
        <a href=\"{{ path('esiea_platform_view', {'id': advert.id}) }}\">
          {{ advert.title }}
        </a>
        par {{ advert.author }},
        le {{ advert.date|date('d/m/Y') }}
      </li>
    {% else %}
      <li>Pas (encore !) d'annonces</li>
    {% endfor %}
  </ul>

{% endblock %}";
    }
}
