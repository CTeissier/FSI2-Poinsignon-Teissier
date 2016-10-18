<?php

/* ESIEACoreBundle::layout.html.twig */
class __TwigTemplate_faafd527bf00cd52b9ccbfffebd172850b1544f6d13fdea7f8f9fd977750313f extends Twig_Template
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
        $__internal_01dad650a5b98e75ab04ec3bddb2f8b7ba515d35670ebdfa3bfbfb4be97fc0c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_01dad650a5b98e75ab04ec3bddb2f8b7ba515d35670ebdfa3bfbfb4be97fc0c3->enter($__internal_01dad650a5b98e75ab04ec3bddb2f8b7ba515d35670ebdfa3bfbfb4be97fc0c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ESIEACoreBundle::layout.html.twig"));

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
        
        $__internal_01dad650a5b98e75ab04ec3bddb2f8b7ba515d35670ebdfa3bfbfb4be97fc0c3->leave($__internal_01dad650a5b98e75ab04ec3bddb2f8b7ba515d35670ebdfa3bfbfb4be97fc0c3_prof);

    }

    // line 9
    public function block_title($context, array $blocks = array())
    {
        $__internal_16cc0285cfe979d704b040333cc07fb8c5a413d811785714d2eb78e6f1227e79 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_16cc0285cfe979d704b040333cc07fb8c5a413d811785714d2eb78e6f1227e79->enter($__internal_16cc0285cfe979d704b040333cc07fb8c5a413d811785714d2eb78e6f1227e79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "ESIEA Plateforme";
        
        $__internal_16cc0285cfe979d704b040333cc07fb8c5a413d811785714d2eb78e6f1227e79->leave($__internal_16cc0285cfe979d704b040333cc07fb8c5a413d811785714d2eb78e6f1227e79_prof);

    }

    // line 11
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_df28fe9a6c6ac3a622fe75f920f5849ef461a2168f52a4e13e1088ce3f5011f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df28fe9a6c6ac3a622fe75f920f5849ef461a2168f52a4e13e1088ce3f5011f2->enter($__internal_df28fe9a6c6ac3a622fe75f920f5849ef461a2168f52a4e13e1088ce3f5011f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_df28fe9a6c6ac3a622fe75f920f5849ef461a2168f52a4e13e1088ce3f5011f2->leave($__internal_df28fe9a6c6ac3a622fe75f920f5849ef461a2168f52a4e13e1088ce3f5011f2_prof);

    }

    // line 54
    public function block_body($context, array $blocks = array())
    {
        $__internal_481480a36499cd93e48dbfe7ea13e11b365dd91c853138cf0d08d7e1a42de7f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_481480a36499cd93e48dbfe7ea13e11b365dd91c853138cf0d08d7e1a42de7f3->enter($__internal_481480a36499cd93e48dbfe7ea13e11b365dd91c853138cf0d08d7e1a42de7f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 55
        echo "        ";
        
        $__internal_481480a36499cd93e48dbfe7ea13e11b365dd91c853138cf0d08d7e1a42de7f3->leave($__internal_481480a36499cd93e48dbfe7ea13e11b365dd91c853138cf0d08d7e1a42de7f3_prof);

    }

    // line 66
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_4674295c963cb7458ff80d303ab7bf1f225d798c49045ff12bb86011f5046c0c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4674295c963cb7458ff80d303ab7bf1f225d798c49045ff12bb86011f5046c0c->enter($__internal_4674295c963cb7458ff80d303ab7bf1f225d798c49045ff12bb86011f5046c0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 67
        echo "    ";
        // line 68
        echo "    <script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js\"></script>
    <script src=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js\"></script>
  ";
        
        $__internal_4674295c963cb7458ff80d303ab7bf1f225d798c49045ff12bb86011f5046c0c->leave($__internal_4674295c963cb7458ff80d303ab7bf1f225d798c49045ff12bb86011f5046c0c_prof);

    }

    public function getTemplateName()
    {
        return "ESIEACoreBundle::layout.html.twig";
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
