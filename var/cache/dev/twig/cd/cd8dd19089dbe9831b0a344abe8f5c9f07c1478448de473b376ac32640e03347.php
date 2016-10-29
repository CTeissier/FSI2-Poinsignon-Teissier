<?php

/* @ESIEACore/Core/index.html.twig */
class __TwigTemplate_39a128e1e18faa1d53fa9ae849e045d8cd00e27d6d207a2ce015d787eead9bd9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("ESIEACoreBundle::layout.html.twig", "@ESIEACore/Core/index.html.twig", 2);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "ESIEACoreBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1d2aa81732ea1d111d42f54a305e8a7fc92bb0f5bc5f770a7ea4fd37d8ec1a52 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d2aa81732ea1d111d42f54a305e8a7fc92bb0f5bc5f770a7ea4fd37d8ec1a52->enter($__internal_1d2aa81732ea1d111d42f54a305e8a7fc92bb0f5bc5f770a7ea4fd37d8ec1a52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@ESIEACore/Core/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1d2aa81732ea1d111d42f54a305e8a7fc92bb0f5bc5f770a7ea4fd37d8ec1a52->leave($__internal_1d2aa81732ea1d111d42f54a305e8a7fc92bb0f5bc5f770a7ea4fd37d8ec1a52_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_597cb3fde12dceb6e0c193bedca99807bbf40115672db7c9d83a78b80de1a0ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_597cb3fde12dceb6e0c193bedca99807bbf40115672db7c9d83a78b80de1a0ba->enter($__internal_597cb3fde12dceb6e0c193bedca99807bbf40115672db7c9d83a78b80de1a0ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 5
        echo "  Page d'accueil - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_597cb3fde12dceb6e0c193bedca99807bbf40115672db7c9d83a78b80de1a0ba->leave($__internal_597cb3fde12dceb6e0c193bedca99807bbf40115672db7c9d83a78b80de1a0ba_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_0437366b95b829db0120f4c1e9d4841e933a77a5a782887df42f50a08a1dd5b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0437366b95b829db0120f4c1e9d4841e933a77a5a782887df42f50a08a1dd5b3->enter($__internal_0437366b95b829db0120f4c1e9d4841e933a77a5a782887df42f50a08a1dd5b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "
  <h2>Page d'accueil de notre site</h2>

  ";
        // line 13
        echo "  ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "info"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 14
            echo "    <div class=\"alert alert-info\">Message flash : ";
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "</div>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "
  ";
        // line 18
        echo "  <h3>Dernières annonces</h3>
  ";
        // line 19
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("ESIEAPlatformBundle:Advert:menu", array("limit" => 3)));
        echo "

  <h3>Derniers messages sur le forum (hypothétique)</h3>
  <p>
    ";
        // line 25
        echo "    Bla bla bla...
  </p>

";
        
        $__internal_0437366b95b829db0120f4c1e9d4841e933a77a5a782887df42f50a08a1dd5b3->leave($__internal_0437366b95b829db0120f4c1e9d4841e933a77a5a782887df42f50a08a1dd5b3_prof);

    }

    public function getTemplateName()
    {
        return "@ESIEACore/Core/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 25,  82 => 19,  79 => 18,  76 => 16,  67 => 14,  62 => 13,  57 => 9,  51 => 8,  41 => 5,  35 => 4,  11 => 2,);
    }

    public function getSource()
    {
        return "{# On utilise ici le layout général, qui se situe dans ce même CoreBundle maintenant #}
{% extends \"ESIEACoreBundle::layout.html.twig\" %}

{% block title %}
  Page d'accueil - {{ parent() }}
{% endblock %}

{% block body %}

  <h2>Page d'accueil de notre site</h2>

  {# On affiche tous les messages flash dont le nom est « info » #}
  {% for message in app.session.flashbag.get('info') %}
    <div class=\"alert alert-info\">Message flash : {{ message }}</div>
  {% endfor %}

  {# Pour afficher les dernières annonces, on réutilise le contrôleur menu du PlatformBundle #}
  <h3>Dernières annonces</h3>
  {{ render(controller(\"ESIEAPlatformBundle:Advert:menu\", {'limit': 3})) }}

  <h3>Derniers messages sur le forum (hypothétique)</h3>
  <p>
    {# Ici, on devrait utiliser un contrôleur d'un éventuel ForumBundle pour afficher les derniers posts sur le forum,
       ce n'est pas le sujet ici #}
    Bla bla bla...
  </p>

{% endblock %}";
    }
}
