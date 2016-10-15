<?php

/* ESIEACoreBundle:Core:index.html.twig */
class __TwigTemplate_f0402efef677deb1895140c36e411c8ad44b84c1a6c3e8d35390fc0abc8e2d1a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("ESIEACoreBundle::layout.html.twig", "ESIEACoreBundle:Core:index.html.twig", 2);
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
        $__internal_f27d12079d982b3fe1ebb37ed9b771965fc6d6548650880ed35f43f5d121ccdb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f27d12079d982b3fe1ebb37ed9b771965fc6d6548650880ed35f43f5d121ccdb->enter($__internal_f27d12079d982b3fe1ebb37ed9b771965fc6d6548650880ed35f43f5d121ccdb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ESIEACoreBundle:Core:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f27d12079d982b3fe1ebb37ed9b771965fc6d6548650880ed35f43f5d121ccdb->leave($__internal_f27d12079d982b3fe1ebb37ed9b771965fc6d6548650880ed35f43f5d121ccdb_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_0341b620923e20b11a4f63ccb52eaa7c66abef1276b4571364a7ab57feed068e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0341b620923e20b11a4f63ccb52eaa7c66abef1276b4571364a7ab57feed068e->enter($__internal_0341b620923e20b11a4f63ccb52eaa7c66abef1276b4571364a7ab57feed068e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 5
        echo "  Page d'accueil - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_0341b620923e20b11a4f63ccb52eaa7c66abef1276b4571364a7ab57feed068e->leave($__internal_0341b620923e20b11a4f63ccb52eaa7c66abef1276b4571364a7ab57feed068e_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_b5cebf8b37777bf168260f48affecfadf1c9c06b2fe98c017f29f1a141cf4bac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b5cebf8b37777bf168260f48affecfadf1c9c06b2fe98c017f29f1a141cf4bac->enter($__internal_b5cebf8b37777bf168260f48affecfadf1c9c06b2fe98c017f29f1a141cf4bac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_b5cebf8b37777bf168260f48affecfadf1c9c06b2fe98c017f29f1a141cf4bac->leave($__internal_b5cebf8b37777bf168260f48affecfadf1c9c06b2fe98c017f29f1a141cf4bac_prof);

    }

    public function getTemplateName()
    {
        return "ESIEACoreBundle:Core:index.html.twig";
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
