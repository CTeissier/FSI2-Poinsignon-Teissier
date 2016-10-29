<?php

/* @ESIEAPlatform/Advert/add.html.twig */
class __TwigTemplate_fb832bd1ace2043d2fd2cb1e4cad5c6a641fa38e75fe82073b791130378ec311 extends Twig_Template
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
        $__internal_e6807e7bf207dbbc078355705ed7127dab0922abbf885fb5e56de722fa8cbe99 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e6807e7bf207dbbc078355705ed7127dab0922abbf885fb5e56de722fa8cbe99->enter($__internal_e6807e7bf207dbbc078355705ed7127dab0922abbf885fb5e56de722fa8cbe99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@ESIEAPlatform/Advert/add.html.twig"));

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
        
        $__internal_e6807e7bf207dbbc078355705ed7127dab0922abbf885fb5e56de722fa8cbe99->leave($__internal_e6807e7bf207dbbc078355705ed7127dab0922abbf885fb5e56de722fa8cbe99_prof);

    }

    // line 10
    public function block_title($context, array $blocks = array())
    {
        $__internal_d8b4d64a2614db6c6d3130a3f9f9dfe865480afccfd3b5953b2d0b6925cfdd04 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d8b4d64a2614db6c6d3130a3f9f9dfe865480afccfd3b5953b2d0b6925cfdd04->enter($__internal_d8b4d64a2614db6c6d3130a3f9f9dfe865480afccfd3b5953b2d0b6925cfdd04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "ESIEA Plateforme";
        
        $__internal_d8b4d64a2614db6c6d3130a3f9f9dfe865480afccfd3b5953b2d0b6925cfdd04->leave($__internal_d8b4d64a2614db6c6d3130a3f9f9dfe865480afccfd3b5953b2d0b6925cfdd04_prof);

    }

    // line 17
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_9fdd0f749d19ecabad2cc9f3cd78f871b688693a663ea93089aa705df638ef39 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9fdd0f749d19ecabad2cc9f3cd78f871b688693a663ea93089aa705df638ef39->enter($__internal_9fdd0f749d19ecabad2cc9f3cd78f871b688693a663ea93089aa705df638ef39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_9fdd0f749d19ecabad2cc9f3cd78f871b688693a663ea93089aa705df638ef39->leave($__internal_9fdd0f749d19ecabad2cc9f3cd78f871b688693a663ea93089aa705df638ef39_prof);

    }

    // line 30
    public function block_body($context, array $blocks = array())
    {
        $__internal_9bf785ac2b6739d88b3ee7c783fe65a4aaebb4f3e4ceb47cc5b14b1d111026ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9bf785ac2b6739d88b3ee7c783fe65a4aaebb4f3e4ceb47cc5b14b1d111026ca->enter($__internal_9bf785ac2b6739d88b3ee7c783fe65a4aaebb4f3e4ceb47cc5b14b1d111026ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_9bf785ac2b6739d88b3ee7c783fe65a4aaebb4f3e4ceb47cc5b14b1d111026ca->leave($__internal_9bf785ac2b6739d88b3ee7c783fe65a4aaebb4f3e4ceb47cc5b14b1d111026ca_prof);

    }

    // line 43
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_c30323ed73b5962ac7dba46a61a8d0f6846641b88d5ae0f1f8a7fe1b82f2d695 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c30323ed73b5962ac7dba46a61a8d0f6846641b88d5ae0f1f8a7fe1b82f2d695->enter($__internal_c30323ed73b5962ac7dba46a61a8d0f6846641b88d5ae0f1f8a7fe1b82f2d695_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 45
        echo "<script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js\"></script>
<script src=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js\"></script>
<script src=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/esieaplatform/js/demo.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_c30323ed73b5962ac7dba46a61a8d0f6846641b88d5ae0f1f8a7fe1b82f2d695->leave($__internal_c30323ed73b5962ac7dba46a61a8d0f6846641b88d5ae0f1f8a7fe1b82f2d695_prof);

    }

    public function getTemplateName()
    {
        return "@ESIEAPlatform/Advert/add.html.twig";
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
