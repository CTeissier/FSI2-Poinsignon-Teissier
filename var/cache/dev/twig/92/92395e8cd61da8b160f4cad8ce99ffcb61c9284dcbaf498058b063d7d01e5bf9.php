<?php

/* @ESIEAPlatform/Advert/delete.html.twig */
class __TwigTemplate_2019cadcff5170891b937efce110c3e6594eeaae60062b14e047c7d57e6cb12b extends Twig_Template
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
        $__internal_f17bd3d7cc2537bb7bc002b4d3e9c15f55c61ad95ba40095c2f7ab1af48c0e2c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f17bd3d7cc2537bb7bc002b4d3e9c15f55c61ad95ba40095c2f7ab1af48c0e2c->enter($__internal_f17bd3d7cc2537bb7bc002b4d3e9c15f55c61ad95ba40095c2f7ab1af48c0e2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@ESIEAPlatform/Advert/delete.html.twig"));

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
        
        $__internal_f17bd3d7cc2537bb7bc002b4d3e9c15f55c61ad95ba40095c2f7ab1af48c0e2c->leave($__internal_f17bd3d7cc2537bb7bc002b4d3e9c15f55c61ad95ba40095c2f7ab1af48c0e2c_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_96decaa2ebb2ae6457c3a4f416e2f172b30ab71badff7963643ef153ed743a46 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_96decaa2ebb2ae6457c3a4f416e2f172b30ab71badff7963643ef153ed743a46->enter($__internal_96decaa2ebb2ae6457c3a4f416e2f172b30ab71badff7963643ef153ed743a46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "ESIEA Plateforme";
        
        $__internal_96decaa2ebb2ae6457c3a4f416e2f172b30ab71badff7963643ef153ed743a46->leave($__internal_96decaa2ebb2ae6457c3a4f416e2f172b30ab71badff7963643ef153ed743a46_prof);

    }

    // line 15
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_2cf4bb879bd64619c658bd521f5914c13b404556ac0980531aec9a683113050f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2cf4bb879bd64619c658bd521f5914c13b404556ac0980531aec9a683113050f->enter($__internal_2cf4bb879bd64619c658bd521f5914c13b404556ac0980531aec9a683113050f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_2cf4bb879bd64619c658bd521f5914c13b404556ac0980531aec9a683113050f->leave($__internal_2cf4bb879bd64619c658bd521f5914c13b404556ac0980531aec9a683113050f_prof);

    }

    // line 31
    public function block_esieaplatform_body($context, array $blocks = array())
    {
        $__internal_e54436da53ee00b49a2ae2cfbd13f6203fb3e650806a5ab095e55c73b0be97ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e54436da53ee00b49a2ae2cfbd13f6203fb3e650806a5ab095e55c73b0be97ed->enter($__internal_e54436da53ee00b49a2ae2cfbd13f6203fb3e650806a5ab095e55c73b0be97ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "esieaplatform_body"));

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
        
        $__internal_e54436da53ee00b49a2ae2cfbd13f6203fb3e650806a5ab095e55c73b0be97ed->leave($__internal_e54436da53ee00b49a2ae2cfbd13f6203fb3e650806a5ab095e55c73b0be97ed_prof);

    }

    public function getTemplateName()
    {
        return "@ESIEAPlatform/Advert/delete.html.twig";
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
