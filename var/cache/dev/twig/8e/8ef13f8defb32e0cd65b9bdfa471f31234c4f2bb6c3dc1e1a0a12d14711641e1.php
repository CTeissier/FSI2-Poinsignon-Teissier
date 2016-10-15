<?php

/* ESIEAPlatformBundle::layout.html.twig */
class __TwigTemplate_5ba1647840c1886e4623ec778b08e4648c3fc6a9595dd4e687986286ccef0acc extends Twig_Template
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
        $__internal_d94c1f85430783cb1d695ed66d1b71db1309ca57d407c54148f9fb0b7d4bdf82 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d94c1f85430783cb1d695ed66d1b71db1309ca57d407c54148f9fb0b7d4bdf82->enter($__internal_d94c1f85430783cb1d695ed66d1b71db1309ca57d407c54148f9fb0b7d4bdf82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ESIEAPlatformBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d94c1f85430783cb1d695ed66d1b71db1309ca57d407c54148f9fb0b7d4bdf82->leave($__internal_d94c1f85430783cb1d695ed66d1b71db1309ca57d407c54148f9fb0b7d4bdf82_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_c2a7ae7d25f3f911f02475d0e9bf3fce8dbb152c249402eb7cd1bdbcfb5d90ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c2a7ae7d25f3f911f02475d0e9bf3fce8dbb152c249402eb7cd1bdbcfb5d90ff->enter($__internal_c2a7ae7d25f3f911f02475d0e9bf3fce8dbb152c249402eb7cd1bdbcfb5d90ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "  Annonces - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_c2a7ae7d25f3f911f02475d0e9bf3fce8dbb152c249402eb7cd1bdbcfb5d90ff->leave($__internal_c2a7ae7d25f3f911f02475d0e9bf3fce8dbb152c249402eb7cd1bdbcfb5d90ff_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_407472668c8afa0c41504b0a1ba455fbf248b24c3ee172e8f094f54e63fd9b64 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_407472668c8afa0c41504b0a1ba455fbf248b24c3ee172e8f094f54e63fd9b64->enter($__internal_407472668c8afa0c41504b0a1ba455fbf248b24c3ee172e8f094f54e63fd9b64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_407472668c8afa0c41504b0a1ba455fbf248b24c3ee172e8f094f54e63fd9b64->leave($__internal_407472668c8afa0c41504b0a1ba455fbf248b24c3ee172e8f094f54e63fd9b64_prof);

    }

    // line 17
    public function block_esieaplatform_body($context, array $blocks = array())
    {
        $__internal_e8f8582214f4a69864f5c9e4d032cf0f4d25adee297d91a45ec3951bf857344d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e8f8582214f4a69864f5c9e4d032cf0f4d25adee297d91a45ec3951bf857344d->enter($__internal_e8f8582214f4a69864f5c9e4d032cf0f4d25adee297d91a45ec3951bf857344d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "esieaplatform_body"));

        // line 18
        echo "  ";
        
        $__internal_e8f8582214f4a69864f5c9e4d032cf0f4d25adee297d91a45ec3951bf857344d->leave($__internal_e8f8582214f4a69864f5c9e4d032cf0f4d25adee297d91a45ec3951bf857344d_prof);

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
