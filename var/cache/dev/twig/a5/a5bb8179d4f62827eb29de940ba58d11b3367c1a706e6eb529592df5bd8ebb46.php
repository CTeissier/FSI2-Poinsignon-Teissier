<?php

/* ESIEAPlatformBundle:Advert:add.html.twig */
class __TwigTemplate_4f85ab68c1ec969ca666eb18ee44730a32cd6548ddbd1498fa0cb772e0f4f2c4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("ESIEAPlatformBundle::layout.html.twig", "ESIEAPlatformBundle:Advert:add.html.twig", 3);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "ESIEAPlatformBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_06293c5ac4c61c1291efb8813bc37fc07ea9dbea277b14ab723dc5ef4caa6f46 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_06293c5ac4c61c1291efb8813bc37fc07ea9dbea277b14ab723dc5ef4caa6f46->enter($__internal_06293c5ac4c61c1291efb8813bc37fc07ea9dbea277b14ab723dc5ef4caa6f46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ESIEAPlatformBundle:Advert:add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_06293c5ac4c61c1291efb8813bc37fc07ea9dbea277b14ab723dc5ef4caa6f46->leave($__internal_06293c5ac4c61c1291efb8813bc37fc07ea9dbea277b14ab723dc5ef4caa6f46_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_3ef31c95d9f80a57a749701e9c114a7b5dfd3ccb70ec8604e1544a676292a0e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ef31c95d9f80a57a749701e9c114a7b5dfd3ccb70ec8604e1544a676292a0e0->enter($__internal_3ef31c95d9f80a57a749701e9c114a7b5dfd3ccb70ec8604e1544a676292a0e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<section id=\"add\" class=\"container content-section text-center\">

  <h2>Ajouter une annonce</h2>

  ";
        // line 10
        echo twig_include($this->env, $context, "ESIEAPlatformBundle:Advert:form.html.twig");
        echo "

  <p>
    Attention : cette annonce sera ajoutée directement
    sur la page d'accueil après validation du formulaire.
  </p>
</section>
";
        
        $__internal_3ef31c95d9f80a57a749701e9c114a7b5dfd3ccb70ec8604e1544a676292a0e0->leave($__internal_3ef31c95d9f80a57a749701e9c114a7b5dfd3ccb70ec8604e1544a676292a0e0_prof);

    }

    public function getTemplateName()
    {
        return "ESIEAPlatformBundle:Advert:add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 10,  40 => 6,  34 => 5,  11 => 3,);
    }

    public function getSource()
    {
        return "{# src/ESIEA/PlatformBundle/Resources/views/Advert/add.html.twig #}

{% extends \"ESIEAPlatformBundle::layout.html.twig\" %}

{% block body %}
<section id=\"add\" class=\"container content-section text-center\">

  <h2>Ajouter une annonce</h2>

  {{ include(\"ESIEAPlatformBundle:Advert:form.html.twig\") }}

  <p>
    Attention : cette annonce sera ajoutée directement
    sur la page d'accueil après validation du formulaire.
  </p>
</section>
{% endblock %}";
    }
}
