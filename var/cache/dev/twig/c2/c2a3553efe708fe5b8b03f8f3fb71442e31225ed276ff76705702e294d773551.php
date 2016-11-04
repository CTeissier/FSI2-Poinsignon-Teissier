<?php

/* ESIEAPlatformBundle:Advert:view.html.twig */
class __TwigTemplate_6945a673c26fed57929f66c409c8f09de1126ac099fe67660af4b66ba4b65a24 extends Twig_Template
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
        $__internal_e1e5bd1f67cbc4f0c5e41c7553178003574c1a314509fd1634bbdaa4fd3edbc0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e1e5bd1f67cbc4f0c5e41c7553178003574c1a314509fd1634bbdaa4fd3edbc0->enter($__internal_e1e5bd1f67cbc4f0c5e41c7553178003574c1a314509fd1634bbdaa4fd3edbc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ESIEAPlatformBundle:Advert:view.html.twig"));

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
        
        $__internal_e1e5bd1f67cbc4f0c5e41c7553178003574c1a314509fd1634bbdaa4fd3edbc0->leave($__internal_e1e5bd1f67cbc4f0c5e41c7553178003574c1a314509fd1634bbdaa4fd3edbc0_prof);

    }

    // line 8
    public function block_title($context, array $blocks = array())
    {
        $__internal_61eb4d50e8eff9761d969178fba68c9c890848fed353bb6de0ef3b7b6d1e68b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_61eb4d50e8eff9761d969178fba68c9c890848fed353bb6de0ef3b7b6d1e68b0->enter($__internal_61eb4d50e8eff9761d969178fba68c9c890848fed353bb6de0ef3b7b6d1e68b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ESIEAPlatformBundle:Advert:view.html.twig"));

        echo "ESIEA Plateforme";
        
        $__internal_61eb4d50e8eff9761d969178fba68c9c890848fed353bb6de0ef3b7b6d1e68b0->leave($__internal_61eb4d50e8eff9761d969178fba68c9c890848fed353bb6de0ef3b7b6d1e68b0_prof);

    }

    // line 10
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_8691b36bb12fdcbae0dee4bdfc2ebeff51308115392a6bb5d95f71c666eb7172 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8691b36bb12fdcbae0dee4bdfc2ebeff51308115392a6bb5d95f71c666eb7172->enter($__internal_8691b36bb12fdcbae0dee4bdfc2ebeff51308115392a6bb5d95f71c666eb7172_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ESIEAPlatformBundle:Advert:view.html.twig"));

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
        
        $__internal_8691b36bb12fdcbae0dee4bdfc2ebeff51308115392a6bb5d95f71c666eb7172->leave($__internal_8691b36bb12fdcbae0dee4bdfc2ebeff51308115392a6bb5d95f71c666eb7172_prof);

    }

    // line 24
    public function block_esieaplatform_body($context, array $blocks = array())
    {
        $__internal_ad429fe252fc77750256b970647f539b1ee7f308a68b0bd1848c1ffd2376eee6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad429fe252fc77750256b970647f539b1ee7f308a68b0bd1848c1ffd2376eee6->enter($__internal_ad429fe252fc77750256b970647f539b1ee7f308a68b0bd1848c1ffd2376eee6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ESIEAPlatformBundle:Advert:view.html.twig"));

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
        
        $__internal_ad429fe252fc77750256b970647f539b1ee7f308a68b0bd1848c1ffd2376eee6->leave($__internal_ad429fe252fc77750256b970647f539b1ee7f308a68b0bd1848c1ffd2376eee6_prof);

    }

    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_ac5f36cb1e880e20747890b42443cfadb6472519708b7407d44462a072e8706c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac5f36cb1e880e20747890b42443cfadb6472519708b7407d44462a072e8706c->enter($__internal_ac5f36cb1e880e20747890b42443cfadb6472519708b7407d44462a072e8706c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ESIEAPlatformBundle:Advert:view.html.twig"));

        // line 72
        echo "<script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js\"></script>
<script src=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js\"></script>
<script src=\"";
        // line 74
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/esieaplatform/js/demo.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_ac5f36cb1e880e20747890b42443cfadb6472519708b7407d44462a072e8706c->leave($__internal_ac5f36cb1e880e20747890b42443cfadb6472519708b7407d44462a072e8706c_prof);

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

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# src/ESIEA/PlatformBundle/Resources/view/Advert/view.html.twig #}


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
{% endblock %} ", "ESIEAPlatformBundle:Advert:view.html.twig", "C:\\wamp64\\www\\Symfony\\src\\ESIEA\\PlatformBundle/Resources/views/Advert/view.html.twig");
    }
}
