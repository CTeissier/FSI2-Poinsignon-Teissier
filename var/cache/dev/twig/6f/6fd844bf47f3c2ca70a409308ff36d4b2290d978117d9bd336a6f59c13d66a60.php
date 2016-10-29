<?php

/* ESIEAPlatformBundle:Advert:add.html.twig */
class __TwigTemplate_1747fa04754cf18a31bed44cdd8ea71a72af4609cdfa5398c05d89effee4be42 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_630356fb0cdf4d327d5f7a19aa74ba83460d87f1498c1370dd2533d6f32aebf6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_630356fb0cdf4d327d5f7a19aa74ba83460d87f1498c1370dd2533d6f32aebf6->enter($__internal_630356fb0cdf4d327d5f7a19aa74ba83460d87f1498c1370dd2533d6f32aebf6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ESIEAPlatformBundle:Advert:add.html.twig"));

        // line 2
        echo "

<head>
       <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">


      <title>";
        // line 10
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
 
     
      ";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("ESIEAPlatformBundle:Site:header"));
        echo "
     


     ";
        // line 17
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 27
        echo "   </head>
  

";
        // line 30
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_630356fb0cdf4d327d5f7a19aa74ba83460d87f1498c1370dd2533d6f32aebf6->leave($__internal_630356fb0cdf4d327d5f7a19aa74ba83460d87f1498c1370dd2533d6f32aebf6_prof);

    }

    // line 10
    public function block_title($context, array $blocks = array())
    {
        $__internal_346734cb822b5a8ac30179d90327b31864889aaa71d04a61df08f59767fd6e4f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_346734cb822b5a8ac30179d90327b31864889aaa71d04a61df08f59767fd6e4f->enter($__internal_346734cb822b5a8ac30179d90327b31864889aaa71d04a61df08f59767fd6e4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "ESIEA Plateforme";
        
        $__internal_346734cb822b5a8ac30179d90327b31864889aaa71d04a61df08f59767fd6e4f->leave($__internal_346734cb822b5a8ac30179d90327b31864889aaa71d04a61df08f59767fd6e4f_prof);

    }

    // line 17
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_98701519129a4519e5f7009bde9edd81cb4d17e68b86f368f60be80ee7c81366 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_98701519129a4519e5f7009bde9edd81cb4d17e68b86f368f60be80ee7c81366->enter($__internal_98701519129a4519e5f7009bde9edd81cb4d17e68b86f368f60be80ee7c81366_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 18
        echo "     ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "c91f9fa_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_c91f9fa_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/css/c91f9fa_demo_1.css");
            // line 21
            echo "      <link rel=\"stylesheet\" href=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css\">
      <link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css?family=Open+Sans\" >
      <link href=\"http://fonts.googleapis.com/css?family=Open+Sans\" rel=\"stylesheet\" type=\"text/css\">
      <link rel=\"stylesheet\" href=\"";
            // line 24
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/css\" />
      ";
        } else {
            // asset "c91f9fa"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_c91f9fa") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/css/c91f9fa.css");
            // line 21
            echo "      <link rel=\"stylesheet\" href=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css\">
      <link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css?family=Open+Sans\" >
      <link href=\"http://fonts.googleapis.com/css?family=Open+Sans\" rel=\"stylesheet\" type=\"text/css\">
      <link rel=\"stylesheet\" href=\"";
            // line 24
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/css\" />
      ";
        }
        unset($context["asset_url"]);
        // line 26
        echo "      ";
        
        $__internal_98701519129a4519e5f7009bde9edd81cb4d17e68b86f368f60be80ee7c81366->leave($__internal_98701519129a4519e5f7009bde9edd81cb4d17e68b86f368f60be80ee7c81366_prof);

    }

    // line 30
    public function block_body($context, array $blocks = array())
    {
        $__internal_c7f8c2fcbd4ea1a786607fb1fa9f75012b6a0163af47ac2ffe65a77f52541ec0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c7f8c2fcbd4ea1a786607fb1fa9f75012b6a0163af47ac2ffe65a77f52541ec0->enter($__internal_c7f8c2fcbd4ea1a786607fb1fa9f75012b6a0163af47ac2ffe65a77f52541ec0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 31
        echo "<!-- Formulaire d'ajout -->


<section id=\"add\" class=\"container content-section text-center\" >

<h3>Ajouter une recette</h3>   
 ";
        // line 37
        echo twig_include($this->env, $context, "ESIEAPlatformBundle:Advert:form.html.twig");
        echo "

  

</section>
\t
   ";
        // line 43
        $this->displayBlock('javascripts', $context, $blocks);
        // line 48
        echo " 

";
        
        $__internal_c7f8c2fcbd4ea1a786607fb1fa9f75012b6a0163af47ac2ffe65a77f52541ec0->leave($__internal_c7f8c2fcbd4ea1a786607fb1fa9f75012b6a0163af47ac2ffe65a77f52541ec0_prof);

    }

    // line 43
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_0a33fe6d02414af72c404e6b783f8cd02d05b926e797d27c28d0361d62d5d714 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a33fe6d02414af72c404e6b783f8cd02d05b926e797d27c28d0361d62d5d714->enter($__internal_0a33fe6d02414af72c404e6b783f8cd02d05b926e797d27c28d0361d62d5d714_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 45
        echo "<script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js\"></script>
<script src=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js\"></script>
<script src=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/esieaplatform/js/demo.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_0a33fe6d02414af72c404e6b783f8cd02d05b926e797d27c28d0361d62d5d714->leave($__internal_0a33fe6d02414af72c404e6b783f8cd02d05b926e797d27c28d0361d62d5d714_prof);

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
        return array (  160 => 47,  156 => 45,  150 => 43,  141 => 48,  139 => 43,  130 => 37,  122 => 31,  116 => 30,  109 => 26,  103 => 24,  98 => 21,  91 => 24,  86 => 21,  81 => 18,  75 => 17,  63 => 10,  56 => 30,  51 => 27,  49 => 17,  42 => 13,  36 => 10,  26 => 2,);
    }

    public function getSource()
    {
        return "{# src/ESIEA/PlatformBundle/Resources/views/Advert/add.html.twig #}


<head>
       <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">


      <title>{% block title %}ESIEA Plateforme{% endblock %}</title>
 
     
      {{ render(controller('ESIEAPlatformBundle:Site:header')) }}
     


     {% block stylesheets %}
     {% stylesheets filter=\"cssrewrite, ?scssphp\"
      'bundles/esieaplatform/css/demo.css'
      %}
      <link rel=\"stylesheet\" href=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css\">
      <link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css?family=Open+Sans\" >
      <link href=\"http://fonts.googleapis.com/css?family=Open+Sans\" rel=\"stylesheet\" type=\"text/css\">
      <link rel=\"stylesheet\" href=\"{{ asset_url }}\" type=\"text/css\" />
      {% endstylesheets %}
      {% endblock %}
   </head>
  

{% block body %}
<!-- Formulaire d'ajout -->


<section id=\"add\" class=\"container content-section text-center\" >

<h3>Ajouter une recette</h3>   
 {{ include(\"ESIEAPlatformBundle:Advert:form.html.twig\") }}

  

</section>
\t
   {% block javascripts %}
{# Ajoutez ces lignes JavaScript si vous comptez vous servir des fonctionnalités du bootstrap Twitter #}
<script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js\"></script>
<script src=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js\"></script>
<script src=\"{{ asset('bundles/esieaplatform/js/demo.js') }}\"></script>
{% endblock %} 

{% endblock %}";
    }
}
