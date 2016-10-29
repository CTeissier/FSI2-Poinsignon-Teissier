<?php

/* @ESIEAPlatform/Advert/view.html.twig */
class __TwigTemplate_9d79159c7d1720c996a6fae2edb1d73b4ebcb41f5245e840f3bbd252a8b2f994 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'esieaplatform_body' => array($this, 'block_esieaplatform_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3156ac9cf38797bd9c6233c617190c0ebb5132a840b1f304b425532c0cfe82e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3156ac9cf38797bd9c6233c617190c0ebb5132a840b1f304b425532c0cfe82e0->enter($__internal_3156ac9cf38797bd9c6233c617190c0ebb5132a840b1f304b425532c0cfe82e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@ESIEAPlatform/Advert/view.html.twig"));

        // line 2
        echo "

<head>
      <meta charset=\"utf-8\">
      <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
      <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
      <title>";
        // line 8
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
         ";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("ESIEAPlatformBundle:Site:header"));
        echo "
      ";
        // line 10
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 21
        echo "   </head>


";
        // line 24
        $this->displayBlock('esieaplatform_body', $context, $blocks);
        // line 76
        echo " ";
        
        $__internal_3156ac9cf38797bd9c6233c617190c0ebb5132a840b1f304b425532c0cfe82e0->leave($__internal_3156ac9cf38797bd9c6233c617190c0ebb5132a840b1f304b425532c0cfe82e0_prof);

    }

    // line 8
    public function block_title($context, array $blocks = array())
    {
        $__internal_dcfbaa5de2ace434224d12639d853ad4dc5d46809649c1dca07990da51cd9378 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dcfbaa5de2ace434224d12639d853ad4dc5d46809649c1dca07990da51cd9378->enter($__internal_dcfbaa5de2ace434224d12639d853ad4dc5d46809649c1dca07990da51cd9378_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "ESIEA Plateforme";
        
        $__internal_dcfbaa5de2ace434224d12639d853ad4dc5d46809649c1dca07990da51cd9378->leave($__internal_dcfbaa5de2ace434224d12639d853ad4dc5d46809649c1dca07990da51cd9378_prof);

    }

    // line 10
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_a3a4b72ef509f5ea96f36bd7b022439c2da71c95c796db1cea797f01c4cf064f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a3a4b72ef509f5ea96f36bd7b022439c2da71c95c796db1cea797f01c4cf064f->enter($__internal_a3a4b72ef509f5ea96f36bd7b022439c2da71c95c796db1cea797f01c4cf064f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 11
        echo "      ";
        // line 12
        echo "      ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "c91f9fa_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_c91f9fa_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/css/c91f9fa_demo_1.css");
            // line 15
            echo "      <link rel=\"stylesheet\" href=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css\">
      <link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css?family=Open+Sans\" >
      <link href=\"http://fonts.googleapis.com/css?family=Open+Sans\" rel=\"stylesheet\" type=\"text/css\">
      <link rel=\"stylesheet\" href=\"";
            // line 18
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/css\" />
      ";
        } else {
            // asset "c91f9fa"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_c91f9fa") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/css/c91f9fa.css");
            // line 15
            echo "      <link rel=\"stylesheet\" href=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css\">
      <link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css?family=Open+Sans\" >
      <link href=\"http://fonts.googleapis.com/css?family=Open+Sans\" rel=\"stylesheet\" type=\"text/css\">
      <link rel=\"stylesheet\" href=\"";
            // line 18
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/css\" />
      ";
        }
        unset($context["asset_url"]);
        // line 20
        echo "      ";
        
        $__internal_a3a4b72ef509f5ea96f36bd7b022439c2da71c95c796db1cea797f01c4cf064f->leave($__internal_a3a4b72ef509f5ea96f36bd7b022439c2da71c95c796db1cea797f01c4cf064f_prof);

    }

    // line 24
    public function block_esieaplatform_body($context, array $blocks = array())
    {
        $__internal_21bde0273dce5cacf8407de4300eb1b5996c14295b99eb07470f1aa71bb46156 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_21bde0273dce5cacf8407de4300eb1b5996c14295b99eb07470f1aa71bb46156->enter($__internal_21bde0273dce5cacf8407de4300eb1b5996c14295b99eb07470f1aa71bb46156_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "esieaplatform_body"));

        // line 25
        echo "<section id=\"add\" class=\"container content-section text-center\" bgcolor=\"#FF0000\" style=\"text-align: center\">
   <img
      src=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute($this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "image", array()), "webPath", array())), "html", null, true);
        echo "\"
      alt=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "image", array()), "alt", array()), "html", null, true);
        echo "\"
      height=\"240\"
      />
   
   <div style=\"float: left; margin-right: 1em;\">
   <!-- Image ici -->
   
   </div>
   <div>
   <br> <h2>";
        // line 37
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "title", array()), "html", null, true);
        echo "</h2></br>
   </div>
   <p style=\"text-align: left\">Par Chef ";
        // line 39
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "author", array()), "html", null, true);
        echo " 
   <br>";
        // line 40
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "date", array()), "d/m/Y"), "html", null, true);
        echo "</br></p>

   <div class=\"well\" style=\"background: black\">
     <p> ";
        // line 43
        echo nl2br(twig_escape_filter($this->env, $this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "content", array()), "html", null, true));
        echo " </p>
   </div>
   <p style=\"text-align: center\">
      <a href=\"";
        // line 46
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("esiea_platform_home");
        echo "\" class=\"btn btn-default\">
      <i class=\"glyphicon glyphicon-chevron-left\"></i>
      <br>Retour à la page d'accueil</br>
      </a>

      <a href=\"";
        // line 51
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("esiea_platform_delivery");
        echo "\" class=\"btn btn-primary\">
      <i class=\"glyphicon glyphicon-cutlery\"></i>
      <br>Faites livrer cette recette chez-vous</br>
      </a>

      <a href=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("esiea_platform_edit", array("id" => $this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-default\">
      <i class=\"glyphicon glyphicon-edit\"></i>
      <br>Modifier la recette</br>
      </a>
      <a href=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("esiea_platform_delete", array("id" => $this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-danger\">
      <i class=\"glyphicon glyphicon-trash\"></i>
      <br>Supprimer la recette</br>
      </a>



   </p>
</section>

";
        // line 70
        $this->displayBlock('javascripts', $context, $blocks);
        
        $__internal_21bde0273dce5cacf8407de4300eb1b5996c14295b99eb07470f1aa71bb46156->leave($__internal_21bde0273dce5cacf8407de4300eb1b5996c14295b99eb07470f1aa71bb46156_prof);

    }

    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_9c8945130bcd61325592fc3870fb3055da317b0813848438577222ee131c52ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c8945130bcd61325592fc3870fb3055da317b0813848438577222ee131c52ec->enter($__internal_9c8945130bcd61325592fc3870fb3055da317b0813848438577222ee131c52ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 72
        echo "<script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js\"></script>
<script src=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js\"></script>
<script src=\"";
        // line 74
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/esieaplatform/js/demo.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_9c8945130bcd61325592fc3870fb3055da317b0813848438577222ee131c52ec->leave($__internal_9c8945130bcd61325592fc3870fb3055da317b0813848438577222ee131c52ec_prof);

    }

    public function getTemplateName()
    {
        return "@ESIEAPlatform/Advert/view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  212 => 74,  208 => 72,  196 => 70,  183 => 60,  176 => 56,  168 => 51,  160 => 46,  154 => 43,  148 => 40,  144 => 39,  139 => 37,  127 => 28,  123 => 27,  119 => 25,  113 => 24,  106 => 20,  100 => 18,  95 => 15,  88 => 18,  83 => 15,  78 => 12,  76 => 11,  70 => 10,  58 => 8,  51 => 76,  49 => 24,  44 => 21,  42 => 10,  38 => 9,  34 => 8,  26 => 2,);
    }

    public function getSource()
    {
        return "{# src/ESIEA/PlatformBundle/Resources/view/Advert/view.html.twig #}


<head>
      <meta charset=\"utf-8\">
      <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
      <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
      <title>{% block title %}ESIEA Plateforme{% endblock %}</title>
         {{ render(controller('ESIEAPlatformBundle:Site:header')) }}
      {% block stylesheets %}
      {# On charge le CSS de bootstrap depuis le site directement #}
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


{% block esieaplatform_body %}
<section id=\"add\" class=\"container content-section text-center\" bgcolor=\"#FF0000\" style=\"text-align: center\">
   <img
      src=\"{{ asset(advert.image.webPath) }}\"
      alt=\"{{ advert.image.alt }}\"
      height=\"240\"
      />
   
   <div style=\"float: left; margin-right: 1em;\">
   <!-- Image ici -->
   
   </div>
   <div>
   <br> <h2>{{ advert.title }}</h2></br>
   </div>
   <p style=\"text-align: left\">Par Chef {{ advert.author }} 
   <br>{{ advert.date|date('d/m/Y') }}</br></p>

   <div class=\"well\" style=\"background: black\">
     <p> {{ advert.content | nl2br }} </p>
   </div>
   <p style=\"text-align: center\">
      <a href=\"{{ path('esiea_platform_home') }}\" class=\"btn btn-default\">
      <i class=\"glyphicon glyphicon-chevron-left\"></i>
      <br>Retour à la page d'accueil</br>
      </a>

      <a href=\"{{ path('esiea_platform_delivery') }}\" class=\"btn btn-primary\">
      <i class=\"glyphicon glyphicon-cutlery\"></i>
      <br>Faites livrer cette recette chez-vous</br>
      </a>

      <a href=\"{{ path('esiea_platform_edit', {'id': advert.id}) }}\" class=\"btn btn-default\">
      <i class=\"glyphicon glyphicon-edit\"></i>
      <br>Modifier la recette</br>
      </a>
      <a href=\"{{ path('esiea_platform_delete', {'id': advert.id}) }}\" class=\"btn btn-danger\">
      <i class=\"glyphicon glyphicon-trash\"></i>
      <br>Supprimer la recette</br>
      </a>



   </p>
</section>

{% block javascripts %}
{# Ajoutez ces lignes JavaScript si vous comptez vous servir des fonctionnalités du bootstrap Twitter #}
<script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js\"></script>
<script src=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js\"></script>
<script src=\"{{ asset('bundles/esieaplatform/js/demo.js') }}\"></script>
{% endblock %}
{% endblock %} ";
    }
}
