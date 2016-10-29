<?php

/* ESIEAPlatformBundle:Advert:view.html.twig */
class __TwigTemplate_e186f291adba780ea984b96caf3423f054c945bd430c22c4812b209cdb3ea0c1 extends Twig_Template
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
        $__internal_7737f22ce4da2cb46eae5f2c9755c8e40e0e2e1a20c6436ab8cd7aa47f7e6433 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7737f22ce4da2cb46eae5f2c9755c8e40e0e2e1a20c6436ab8cd7aa47f7e6433->enter($__internal_7737f22ce4da2cb46eae5f2c9755c8e40e0e2e1a20c6436ab8cd7aa47f7e6433_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ESIEAPlatformBundle:Advert:view.html.twig"));

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
        
        $__internal_7737f22ce4da2cb46eae5f2c9755c8e40e0e2e1a20c6436ab8cd7aa47f7e6433->leave($__internal_7737f22ce4da2cb46eae5f2c9755c8e40e0e2e1a20c6436ab8cd7aa47f7e6433_prof);

    }

    // line 8
    public function block_title($context, array $blocks = array())
    {
        $__internal_be12b825398de59b9721a853eb2c27994f1be33f8e89400eaac970eb7778b73b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be12b825398de59b9721a853eb2c27994f1be33f8e89400eaac970eb7778b73b->enter($__internal_be12b825398de59b9721a853eb2c27994f1be33f8e89400eaac970eb7778b73b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "ESIEA Plateforme";
        
        $__internal_be12b825398de59b9721a853eb2c27994f1be33f8e89400eaac970eb7778b73b->leave($__internal_be12b825398de59b9721a853eb2c27994f1be33f8e89400eaac970eb7778b73b_prof);

    }

    // line 10
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_9ca97385ee32b28c6a629b5f43d52c6b95d117213715f0a408885f19374514b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ca97385ee32b28c6a629b5f43d52c6b95d117213715f0a408885f19374514b1->enter($__internal_9ca97385ee32b28c6a629b5f43d52c6b95d117213715f0a408885f19374514b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_9ca97385ee32b28c6a629b5f43d52c6b95d117213715f0a408885f19374514b1->leave($__internal_9ca97385ee32b28c6a629b5f43d52c6b95d117213715f0a408885f19374514b1_prof);

    }

    // line 24
    public function block_esieaplatform_body($context, array $blocks = array())
    {
        $__internal_d9208899b18486fd0d351e3acbc4b51542a4dd8c0e501ff8288505b18c42974e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d9208899b18486fd0d351e3acbc4b51542a4dd8c0e501ff8288505b18c42974e->enter($__internal_d9208899b18486fd0d351e3acbc4b51542a4dd8c0e501ff8288505b18c42974e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "esieaplatform_body"));

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
        
        $__internal_d9208899b18486fd0d351e3acbc4b51542a4dd8c0e501ff8288505b18c42974e->leave($__internal_d9208899b18486fd0d351e3acbc4b51542a4dd8c0e501ff8288505b18c42974e_prof);

    }

    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_262c32b3b86713a67dc37b8a49c9e90d9db453a95f34569f3817a16d74ef9df1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_262c32b3b86713a67dc37b8a49c9e90d9db453a95f34569f3817a16d74ef9df1->enter($__internal_262c32b3b86713a67dc37b8a49c9e90d9db453a95f34569f3817a16d74ef9df1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 72
        echo "<script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js\"></script>
<script src=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js\"></script>
<script src=\"";
        // line 74
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/esieaplatform/js/demo.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_262c32b3b86713a67dc37b8a49c9e90d9db453a95f34569f3817a16d74ef9df1->leave($__internal_262c32b3b86713a67dc37b8a49c9e90d9db453a95f34569f3817a16d74ef9df1_prof);

    }

    public function getTemplateName()
    {
        return "ESIEAPlatformBundle:Advert:view.html.twig";
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
