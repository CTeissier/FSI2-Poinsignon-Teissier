<?php

/* ESIEAPlatformBundle::layout.html.twig */
class __TwigTemplate_7d5bc214821cd73a077faa5d7a7b90cd811000d6f5e301e55bba471b62f5c8e7 extends Twig_Template
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
        $__internal_b14108da6c5c26d34e2bf4cf12a8a70969e5fd959d26c4c929d2a1f60ef72b4c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b14108da6c5c26d34e2bf4cf12a8a70969e5fd959d26c4c929d2a1f60ef72b4c->enter($__internal_b14108da6c5c26d34e2bf4cf12a8a70969e5fd959d26c4c929d2a1f60ef72b4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ESIEAPlatformBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b14108da6c5c26d34e2bf4cf12a8a70969e5fd959d26c4c929d2a1f60ef72b4c->leave($__internal_b14108da6c5c26d34e2bf4cf12a8a70969e5fd959d26c4c929d2a1f60ef72b4c_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_78eda3e909e1fc771d2d16236180f49893b1647149599d28a760beb6dedb3b70 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_78eda3e909e1fc771d2d16236180f49893b1647149599d28a760beb6dedb3b70->enter($__internal_78eda3e909e1fc771d2d16236180f49893b1647149599d28a760beb6dedb3b70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "  Annonces - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_78eda3e909e1fc771d2d16236180f49893b1647149599d28a760beb6dedb3b70->leave($__internal_78eda3e909e1fc771d2d16236180f49893b1647149599d28a760beb6dedb3b70_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_1ed8eb573e9f9bea3b49e81dd1c72201e2923cee6b412090f9ac4cf6dd3ca90a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ed8eb573e9f9bea3b49e81dd1c72201e2923cee6b412090f9ac4cf6dd3ca90a->enter($__internal_1ed8eb573e9f9bea3b49e81dd1c72201e2923cee6b412090f9ac4cf6dd3ca90a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_1ed8eb573e9f9bea3b49e81dd1c72201e2923cee6b412090f9ac4cf6dd3ca90a->leave($__internal_1ed8eb573e9f9bea3b49e81dd1c72201e2923cee6b412090f9ac4cf6dd3ca90a_prof);

    }

    // line 17
    public function block_esieaplatform_body($context, array $blocks = array())
    {
        $__internal_93220c05cf2c0be85f1d9ed50d82fcd80058309c626335f6ec7a1bda83c78a6b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_93220c05cf2c0be85f1d9ed50d82fcd80058309c626335f6ec7a1bda83c78a6b->enter($__internal_93220c05cf2c0be85f1d9ed50d82fcd80058309c626335f6ec7a1bda83c78a6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "esieaplatform_body"));

        // line 18
        echo "  ";
        
        $__internal_93220c05cf2c0be85f1d9ed50d82fcd80058309c626335f6ec7a1bda83c78a6b->leave($__internal_93220c05cf2c0be85f1d9ed50d82fcd80058309c626335f6ec7a1bda83c78a6b_prof);

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
