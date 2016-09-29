<?php

/* ESIEAPlatformBundle:Advert:index.html.twig */
class __TwigTemplate_99b329f26367755dbfbb067004492d8dd31ee249ce7d9bfbda76cde7a492164f extends Twig_Template
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
        $__internal_f49c4e5c64af8de5f8aefb34f8468f3496b1612a9376d204c375783db83ffe75 = $this->env->getExtension("native_profiler");
        $__internal_f49c4e5c64af8de5f8aefb34f8468f3496b1612a9376d204c375783db83ffe75->enter($__internal_f49c4e5c64af8de5f8aefb34f8468f3496b1612a9376d204c375783db83ffe75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ESIEAPlatformBundle:Advert:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f49c4e5c64af8de5f8aefb34f8468f3496b1612a9376d204c375783db83ffe75->leave($__internal_f49c4e5c64af8de5f8aefb34f8468f3496b1612a9376d204c375783db83ffe75_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_dc2e362a8896f019518df5c1e5e1feba504e07c573759401d17672a42d9f948a = $this->env->getExtension("native_profiler");
        $__internal_dc2e362a8896f019518df5c1e5e1feba504e07c573759401d17672a42d9f948a->enter($__internal_dc2e362a8896f019518df5c1e5e1feba504e07c573759401d17672a42d9f948a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "  Accueil - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_dc2e362a8896f019518df5c1e5e1feba504e07c573759401d17672a42d9f948a->leave($__internal_dc2e362a8896f019518df5c1e5e1feba504e07c573759401d17672a42d9f948a_prof);

    }

    // line 9
    public function block_esieaplatform_body($context, array $blocks = array())
    {
        $__internal_d222039f52abf3a5b1302b812bd7f9ddf61873b0c5946a3eec62fb3f44bd09c9 = $this->env->getExtension("native_profiler");
        $__internal_d222039f52abf3a5b1302b812bd7f9ddf61873b0c5946a3eec62fb3f44bd09c9->enter($__internal_d222039f52abf3a5b1302b812bd7f9ddf61873b0c5946a3eec62fb3f44bd09c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "esieaplatform_body"));

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
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("esiea_platform_view", array("id" => $this->getAttribute($context["advert"], "id", array()))), "html", null, true);
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
        
        $__internal_d222039f52abf3a5b1302b812bd7f9ddf61873b0c5946a3eec62fb3f44bd09c9->leave($__internal_d222039f52abf3a5b1302b812bd7f9ddf61873b0c5946a3eec62fb3f44bd09c9_prof);

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
