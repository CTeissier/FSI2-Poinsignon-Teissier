<?php

/* @ESIEAPlatform/layout.html.twig */
class __TwigTemplate_16852c57c27826d884860834a30decac81916b9201876c7b55465b85aee5d973 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("ESIEACoreBundle::layout.html.twig", "@ESIEAPlatform/layout.html.twig", 3);
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
        $__internal_df34e6ac976040c1d3a94c6734d292e2ac99c7c332dfbc2bd5d5a90653c6358d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df34e6ac976040c1d3a94c6734d292e2ac99c7c332dfbc2bd5d5a90653c6358d->enter($__internal_df34e6ac976040c1d3a94c6734d292e2ac99c7c332dfbc2bd5d5a90653c6358d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@ESIEAPlatform/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_df34e6ac976040c1d3a94c6734d292e2ac99c7c332dfbc2bd5d5a90653c6358d->leave($__internal_df34e6ac976040c1d3a94c6734d292e2ac99c7c332dfbc2bd5d5a90653c6358d_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_6d24eab5d852d429c17ebce3bcb9d8e6714eadf52aa456c34c823c1f30daabd3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d24eab5d852d429c17ebce3bcb9d8e6714eadf52aa456c34c823c1f30daabd3->enter($__internal_6d24eab5d852d429c17ebce3bcb9d8e6714eadf52aa456c34c823c1f30daabd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "  Annonces - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_6d24eab5d852d429c17ebce3bcb9d8e6714eadf52aa456c34c823c1f30daabd3->leave($__internal_6d24eab5d852d429c17ebce3bcb9d8e6714eadf52aa456c34c823c1f30daabd3_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_eceb7358b325bec7a2be18b99545cbaab58a4d5eb3a4da0e6ac798f5037e967d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eceb7358b325bec7a2be18b99545cbaab58a4d5eb3a4da0e6ac798f5037e967d->enter($__internal_eceb7358b325bec7a2be18b99545cbaab58a4d5eb3a4da0e6ac798f5037e967d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_eceb7358b325bec7a2be18b99545cbaab58a4d5eb3a4da0e6ac798f5037e967d->leave($__internal_eceb7358b325bec7a2be18b99545cbaab58a4d5eb3a4da0e6ac798f5037e967d_prof);

    }

    // line 17
    public function block_esieaplatform_body($context, array $blocks = array())
    {
        $__internal_b005a702684c682aa4c9eb1bcd8b2804e8b285732c76b7dd757ec1f67d96e350 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b005a702684c682aa4c9eb1bcd8b2804e8b285732c76b7dd757ec1f67d96e350->enter($__internal_b005a702684c682aa4c9eb1bcd8b2804e8b285732c76b7dd757ec1f67d96e350_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "esieaplatform_body"));

        // line 18
        echo "  ";
        
        $__internal_b005a702684c682aa4c9eb1bcd8b2804e8b285732c76b7dd757ec1f67d96e350->leave($__internal_b005a702684c682aa4c9eb1bcd8b2804e8b285732c76b7dd757ec1f67d96e350_prof);

    }

    public function getTemplateName()
    {
        return "@ESIEAPlatform/layout.html.twig";
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
