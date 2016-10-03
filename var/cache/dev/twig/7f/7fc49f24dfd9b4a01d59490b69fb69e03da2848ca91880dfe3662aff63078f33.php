<?php

/* ESIEAPlatformBundle:Advert:form.html.twig */
class __TwigTemplate_1ea7fff5e233b57dc05f2c82d1ba701ac81dee1d0e390407a9c9ce80281bcb23 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bbe531058a17a6850c1fbefc3de5da84c5a42520500f58c9a748cb7fc6939bb9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bbe531058a17a6850c1fbefc3de5da84c5a42520500f58c9a748cb7fc6939bb9->enter($__internal_bbe531058a17a6850c1fbefc3de5da84c5a42520500f58c9a748cb7fc6939bb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ESIEAPlatformBundle:Advert:form.html.twig"));

        // line 2
        echo "
<h3>Formulaire d'annonce</h3>

";
        // line 7
        echo "<div class=\"well\">
  Ici se trouvera le formulaire.
</div>";
        
        $__internal_bbe531058a17a6850c1fbefc3de5da84c5a42520500f58c9a748cb7fc6939bb9->leave($__internal_bbe531058a17a6850c1fbefc3de5da84c5a42520500f58c9a748cb7fc6939bb9_prof);

    }

    public function getTemplateName()
    {
        return "ESIEAPlatformBundle:Advert:form.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  27 => 7,  22 => 2,);
    }

    public function getSource()
    {
        return "{# src/ESIEA/PlatformBundle/Resources/views/Advert/form.html.twig #}

<h3>Formulaire d'annonce</h3>

{# On laisse vide la vue pour l'instant, on la comblera plus tard
   lorsqu'on saura afficher un formulaire. #}
<div class=\"well\">
  Ici se trouvera le formulaire.
</div>";
    }
}
