<?php

/* ESIEAPlatformBundle:Advert:delete.html.twig */
class __TwigTemplate_ab8e4d53863d15b5c5d1b729b35535d1f4d2bf8158df3ed54b3147853cd01d3a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'esieaplatform_body' => array($this, 'block_esieaplatform_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_024b0a3bda3dbb5331a21485fea5959dc8ca30218880cfe5404a8785d47e9bbf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_024b0a3bda3dbb5331a21485fea5959dc8ca30218880cfe5404a8785d47e9bbf->enter($__internal_024b0a3bda3dbb5331a21485fea5959dc8ca30218880cfe5404a8785d47e9bbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ESIEAPlatformBundle:Advert:delete.html.twig"));

        // line 2
        echo "
<head>
      <meta charset=\"utf-8\">
      <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
      <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
      <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
 



  ";
        // line 12
        echo twig_include($this->env, $context, "ESIEAPlatformBundle:Advert:header.html.twig");
        echo "


      ";
        // line 15
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 27
        echo "   </head>



";
        // line 31
        $this->displayBlock('esieaplatform_body', $context, $blocks);
        
        $__internal_024b0a3bda3dbb5331a21485fea5959dc8ca30218880cfe5404a8785d47e9bbf->leave($__internal_024b0a3bda3dbb5331a21485fea5959dc8ca30218880cfe5404a8785d47e9bbf_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_0158263872b313c1015e8e04454d06e5a684c8c08ce10b7e20b41b57ddc32119 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0158263872b313c1015e8e04454d06e5a684c8c08ce10b7e20b41b57ddc32119->enter($__internal_0158263872b313c1015e8e04454d06e5a684c8c08ce10b7e20b41b57ddc32119_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "ESIEA Plateforme";
        
        $__internal_0158263872b313c1015e8e04454d06e5a684c8c08ce10b7e20b41b57ddc32119->leave($__internal_0158263872b313c1015e8e04454d06e5a684c8c08ce10b7e20b41b57ddc32119_prof);

    }

    // line 15
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_1bd914c920faf3c54af81828bf97276aab538453c2f7257e7cc2febe25980e07 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1bd914c920faf3c54af81828bf97276aab538453c2f7257e7cc2febe25980e07->enter($__internal_1bd914c920faf3c54af81828bf97276aab538453c2f7257e7cc2febe25980e07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 16
        echo "      ";
        // line 17
        echo "      ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "c91f9fa_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_c91f9fa_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/css/c91f9fa_demo_1.css");
            // line 20
            echo "      <link rel=\"stylesheet\" href=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css\">
      <link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css?family=Open+Sans\" >
      <link href=\"http://fonts.googleapis.com/css?family=Open+Sans\" rel=\"stylesheet\" type=\"text/css\">
      <link rel=\"stylesheet\" href=\"";
            // line 23
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/css\" />
      <link href=\"vendor/bootstrap/css/bootstrap.min.css\" rel=\"stylesheet\">
      ";
        } else {
            // asset "c91f9fa"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_c91f9fa") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/css/c91f9fa.css");
            // line 20
            echo "      <link rel=\"stylesheet\" href=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css\">
      <link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css?family=Open+Sans\" >
      <link href=\"http://fonts.googleapis.com/css?family=Open+Sans\" rel=\"stylesheet\" type=\"text/css\">
      <link rel=\"stylesheet\" href=\"";
            // line 23
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/css\" />
      <link href=\"vendor/bootstrap/css/bootstrap.min.css\" rel=\"stylesheet\">
      ";
        }
        unset($context["asset_url"]);
        // line 26
        echo "      ";
        
        $__internal_1bd914c920faf3c54af81828bf97276aab538453c2f7257e7cc2febe25980e07->leave($__internal_1bd914c920faf3c54af81828bf97276aab538453c2f7257e7cc2febe25980e07_prof);

    }

    // line 31
    public function block_esieaplatform_body($context, array $blocks = array())
    {
        $__internal_01e123ab2ab3c7b4396452595ac8997724c7a7552f14a64a9457d6200cbdecdc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_01e123ab2ab3c7b4396452595ac8997724c7a7552f14a64a9457d6200cbdecdc->enter($__internal_01e123ab2ab3c7b4396452595ac8997724c7a7552f14a64a9457d6200cbdecdc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "esieaplatform_body"));

        // line 32
        echo "
  
 <section id=\"add\" class=\"container content-section text-center\" >
 <h3>Supprimer une recette</h3>
  <p>
    Voulez-vous supprimer cette recette de \"";
        // line 37
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "title", array()), "html", null, true);
        echo "\" ?
  </p>

  ";
        // line 41
        echo "  <form action=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("esiea_platform_delete", array("id" => $this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "id", array()))), "html", null, true);
        echo "\" method=\"post\">
    <a href=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("esiea_platform_view", array("id" => $this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-default\">
      <i class=\"glyphicon glyphicon-chevron-left\"></i>
      Retour à la recette
    </a>
    ";
        // line 47
        echo "    <input type=\"submit\" value=\"Supprimer\" class=\"btn btn-danger\" />
    ";
        // line 49
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
  </form>
 </section>
";
        
        $__internal_01e123ab2ab3c7b4396452595ac8997724c7a7552f14a64a9457d6200cbdecdc->leave($__internal_01e123ab2ab3c7b4396452595ac8997724c7a7552f14a64a9457d6200cbdecdc_prof);

    }

    public function getTemplateName()
    {
        return "ESIEAPlatformBundle:Advert:delete.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  152 => 49,  149 => 47,  142 => 42,  137 => 41,  131 => 37,  124 => 32,  118 => 31,  111 => 26,  104 => 23,  99 => 20,  91 => 23,  86 => 20,  81 => 17,  79 => 16,  73 => 15,  61 => 7,  54 => 31,  48 => 27,  46 => 15,  40 => 12,  32 => 7,  25 => 2,);
    }

    public function getSource()
    {
        return "{# src/ESIEA/PlatformBundle/Resources/views/Advert/delete.html.twig #}

<head>
      <meta charset=\"utf-8\">
      <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
      <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
      <title>{% block title %}ESIEA Plateforme{% endblock %}</title>
 



  {{ include(\"ESIEAPlatformBundle:Advert:header.html.twig\") }}


      {% block stylesheets %}
      {# On charge le CSS de bootstrap depuis le site directement #}
      {% stylesheets filter=\"cssrewrite, ?scssphp\"
      'bundles/esieaplatform/css/demo.css'
      %}
      <link rel=\"stylesheet\" href=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css\">
      <link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css?family=Open+Sans\" >
      <link href=\"http://fonts.googleapis.com/css?family=Open+Sans\" rel=\"stylesheet\" type=\"text/css\">
      <link rel=\"stylesheet\" href=\"{{ asset_url }}\" type=\"text/css\" />
      <link href=\"vendor/bootstrap/css/bootstrap.min.css\" rel=\"stylesheet\">
      {% endstylesheets %}
      {% endblock %}
   </head>



{% block esieaplatform_body %}

  
 <section id=\"add\" class=\"container content-section text-center\" >
 <h3>Supprimer une recette</h3>
  <p>
    Voulez-vous supprimer cette recette de \"{{ advert.title }}\" ?
  </p>

  {# On met l'id de l'annonce dans la route de l'action du formulaire #}
  <form action=\"{{ path('esiea_platform_delete', {'id': advert.id}) }}\" method=\"post\">
    <a href=\"{{ path('esiea_platform_view', {'id': advert.id}) }}\" class=\"btn btn-default\">
      <i class=\"glyphicon glyphicon-chevron-left\"></i>
      Retour à la recette
    </a>
    {# Ici j'ai écrit le bouton de soumission à la main #}
    <input type=\"submit\" value=\"Supprimer\" class=\"btn btn-danger\" />
    {# Ceci va générer le champ CSRF #}
    {{ form_rest(form) }}
  </form>
 </section>
{% endblock %}";
    }
}
