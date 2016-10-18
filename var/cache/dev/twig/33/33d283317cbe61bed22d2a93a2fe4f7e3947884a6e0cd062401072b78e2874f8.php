<?php

/* @ESIEACore/layout.html.twig */
class __TwigTemplate_52d3c05ca274822b2aeaa407a0837276305f568bac37deaa60c09ed5c6b2c547 extends Twig_Template
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
        $__internal_450ac2a64349fe8405b0fbecf6cfb6b9585ea0df3261d15cd57bc13e940b9ef3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_450ac2a64349fe8405b0fbecf6cfb6b9585ea0df3261d15cd57bc13e940b9ef3->enter($__internal_450ac2a64349fe8405b0fbecf6cfb6b9585ea0df3261d15cd57bc13e940b9ef3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@ESIEACore/layout.html.twig"));

        // line 2
        echo "
<!DOCTYPE html>
<html>
  <head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

    <title>";
        // line 9
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

    ";
        // line 11
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 23
        echo "  </head>

  <body>
  <div class=\"container\">
    <div id=\"header\" class=\"jumbotron\">

      <h1>Ma plateforme d'annonces</h1>
      <p>
        Ce projet est propulsé par Symfony, et construit grâce au MOOC OpenClassrooms et SensioLabs.
      </p>
      <p>
        <a class=\"btn btn-primary btn-lg\" href=\"https://openclassrooms.com/courses/developpez-votre-site-web-avec-le-framework-symfony2\">
          Participer au MOOC »
        </a>
      </p>
    </div>

          ";
        // line 40
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("ESIEAPlatformBundle:Site:header"));
        echo "

    <div class=\"row\">
      <div id=\"menu\" class=\"col-md-3\">
        <h3>Les annonces</h3>
        <ul class=\"nav nav-pills nav-stacked\">
          <li><a href=\"";
        // line 46
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("esiea_platform_home");
        echo "\">Accueil</a></li>
          <li><a href=\"";
        // line 47
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("esiea_platform_add");
        echo "\">Ajouter une annonce</a></li>
        </ul>

        <h4>Dernières annonces</h4>
        ";
        // line 51
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("ESIEAPlatformBundle:Advert:menu", array("limit" => 3)));
        echo "
      </div>
      <div id=\"content\" class=\"col-md-9\">
        ";
        // line 54
        $this->displayBlock('body', $context, $blocks);
        // line 56
        echo "      </div>
    </div>

    <hr>

    <footer>
      <p>The sky's the limit © ";
        // line 62
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo " and beyond.</p>
    </footer>
  </div>

  ";
        // line 66
        $this->displayBlock('javascripts', $context, $blocks);
        // line 71
        echo "
  </body>
</html>";
        
        $__internal_450ac2a64349fe8405b0fbecf6cfb6b9585ea0df3261d15cd57bc13e940b9ef3->leave($__internal_450ac2a64349fe8405b0fbecf6cfb6b9585ea0df3261d15cd57bc13e940b9ef3_prof);

    }

    // line 9
    public function block_title($context, array $blocks = array())
    {
        $__internal_96a84b509e97c8950b3defe9d4d537453f626f212942e12e835a8da95077c5bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_96a84b509e97c8950b3defe9d4d537453f626f212942e12e835a8da95077c5bc->enter($__internal_96a84b509e97c8950b3defe9d4d537453f626f212942e12e835a8da95077c5bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "ESIEA Plateforme";
        
        $__internal_96a84b509e97c8950b3defe9d4d537453f626f212942e12e835a8da95077c5bc->leave($__internal_96a84b509e97c8950b3defe9d4d537453f626f212942e12e835a8da95077c5bc_prof);

    }

    // line 11
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_ebe3c9e373c65e1fa0e4165c51551e2c3c530f2fe9e5d84f668290ebd1b806dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ebe3c9e373c65e1fa0e4165c51551e2c3c530f2fe9e5d84f668290ebd1b806dc->enter($__internal_ebe3c9e373c65e1fa0e4165c51551e2c3c530f2fe9e5d84f668290ebd1b806dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 12
        echo "      ";
        // line 13
        echo "      <link rel=\"stylesheet\" href=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css\">
  

    ";
        // line 16
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "c56c767_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_c56c767_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/css/c56c767_main_1.css");
            // line 19
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/css\" />
      ";
            // asset "c56c767_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_c56c767_1") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/css/c56c767_platform_2.css");
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/css\" />
      ";
        } else {
            // asset "c56c767"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_c56c767") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/css/c56c767.css");
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/css\" />
      ";
        }
        unset($context["asset_url"]);
        // line 21
        echo "
    ";
        
        $__internal_ebe3c9e373c65e1fa0e4165c51551e2c3c530f2fe9e5d84f668290ebd1b806dc->leave($__internal_ebe3c9e373c65e1fa0e4165c51551e2c3c530f2fe9e5d84f668290ebd1b806dc_prof);

    }

    // line 54
    public function block_body($context, array $blocks = array())
    {
        $__internal_be6c6d1a82862d05a97bf2d767109c15f73644a818e4f0e80bd140e3b2b4a20e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be6c6d1a82862d05a97bf2d767109c15f73644a818e4f0e80bd140e3b2b4a20e->enter($__internal_be6c6d1a82862d05a97bf2d767109c15f73644a818e4f0e80bd140e3b2b4a20e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 55
        echo "        ";
        
        $__internal_be6c6d1a82862d05a97bf2d767109c15f73644a818e4f0e80bd140e3b2b4a20e->leave($__internal_be6c6d1a82862d05a97bf2d767109c15f73644a818e4f0e80bd140e3b2b4a20e_prof);

    }

    // line 66
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_8b46b620db7103daacbffba08f07215cdb13cd3a305795d4c9898a44734c5c1d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b46b620db7103daacbffba08f07215cdb13cd3a305795d4c9898a44734c5c1d->enter($__internal_8b46b620db7103daacbffba08f07215cdb13cd3a305795d4c9898a44734c5c1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 67
        echo "    ";
        // line 68
        echo "    <script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js\"></script>
    <script src=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js\"></script>
  ";
        
        $__internal_8b46b620db7103daacbffba08f07215cdb13cd3a305795d4c9898a44734c5c1d->leave($__internal_8b46b620db7103daacbffba08f07215cdb13cd3a305795d4c9898a44734c5c1d_prof);

    }

    public function getTemplateName()
    {
        return "@ESIEACore/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  193 => 68,  191 => 67,  185 => 66,  178 => 55,  172 => 54,  164 => 21,  144 => 19,  140 => 16,  135 => 13,  133 => 12,  127 => 11,  115 => 9,  106 => 71,  104 => 66,  97 => 62,  89 => 56,  87 => 54,  81 => 51,  74 => 47,  70 => 46,  61 => 40,  42 => 23,  40 => 11,  35 => 9,  26 => 2,);
    }

    public function getSource()
    {
        return "{# src/ESIEA/CoreBundle/Resources/views/layout.html.twig #}

<!DOCTYPE html>
<html>
  <head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

    <title>{% block title %}ESIEA Plateforme{% endblock %}</title>

    {% block stylesheets %}
      {# On charge le CSS de bootstrap depuis le site directement #}
      <link rel=\"stylesheet\" href=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css\">
  

    {% stylesheets filter=\"cssrewrite, ?scssphp\"
        'bundles/esieaplatform/css/main.css'
        'bundles/esieaplatform/css/platform.css' %}
        <link rel=\"stylesheet\" href=\"{{ asset_url }}\" type=\"text/css\" />
      {% endstylesheets %}

    {% endblock %}
  </head>

  <body>
  <div class=\"container\">
    <div id=\"header\" class=\"jumbotron\">

      <h1>Ma plateforme d'annonces</h1>
      <p>
        Ce projet est propulsé par Symfony, et construit grâce au MOOC OpenClassrooms et SensioLabs.
      </p>
      <p>
        <a class=\"btn btn-primary btn-lg\" href=\"https://openclassrooms.com/courses/developpez-votre-site-web-avec-le-framework-symfony2\">
          Participer au MOOC »
        </a>
      </p>
    </div>

          {{ render(controller('ESIEAPlatformBundle:Site:header')) }}

    <div class=\"row\">
      <div id=\"menu\" class=\"col-md-3\">
        <h3>Les annonces</h3>
        <ul class=\"nav nav-pills nav-stacked\">
          <li><a href=\"{{ path('esiea_platform_home') }}\">Accueil</a></li>
          <li><a href=\"{{ path('esiea_platform_add') }}\">Ajouter une annonce</a></li>
        </ul>

        <h4>Dernières annonces</h4>
        {{ render(controller(\"ESIEAPlatformBundle:Advert:menu\", {'limit': 3})) }}
      </div>
      <div id=\"content\" class=\"col-md-9\">
        {% block body %}
        {% endblock %}
      </div>
    </div>

    <hr>

    <footer>
      <p>The sky's the limit © {{ 'now'|date('Y') }} and beyond.</p>
    </footer>
  </div>

  {% block javascripts %}
    {# Ajoutez ces lignes JavaScript si vous comptez vous servir des fonctionnalités du bootstrap Twitter #}
    <script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js\"></script>
    <script src=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js\"></script>
  {% endblock %}

  </body>
</html>";
    }
}
