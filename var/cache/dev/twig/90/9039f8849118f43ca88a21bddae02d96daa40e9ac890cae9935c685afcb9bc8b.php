<?php

/* @ESIEACore/layout.html.twig */
class __TwigTemplate_34ec71b726187e81f09662d93d3fad72ba65cc85e08bf8a3d8e715159ca22b4d extends Twig_Template
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
        $__internal_a793f91fcc3600a6b47e22bfd64c1eba59672260ec72792b0f14c8cf0bc673fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a793f91fcc3600a6b47e22bfd64c1eba59672260ec72792b0f14c8cf0bc673fd->enter($__internal_a793f91fcc3600a6b47e22bfd64c1eba59672260ec72792b0f14c8cf0bc673fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@ESIEACore/layout.html.twig"));

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
        // line 15
        echo "
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

    <div class=\"row\">
      <div id=\"menu\" class=\"col-md-3\">
        <h3>Les annonces</h3>
        <ul class=\"nav nav-pills nav-stacked\">
          <li><a href=\"";
        // line 36
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("esiea_platform_home");
        echo "\">Accueil</a></li>
          ";
        // line 37
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_AUTEUR")) {
            // line 38
            echo "            <li><a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("esiea_platform_add");
            echo "\">Ajouter une annonce</a></li>
          ";
        }
        // line 40
        echo "        </ul>

        <h4>Dernières annonces</h4>
        ";
        // line 43
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("ESIEAPlatformBundle:Advert:menu", array("limit" => 3)));
        echo "

    
      </div>
      <div id=\"content\" class=\"col-md-9\">
        ";
        // line 48
        $this->displayBlock('body', $context, $blocks);
        // line 50
        echo "      </div>
    </div>

    <hr>

    <footer>
      <p>The sky's the limit © ";
        // line 56
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo " and beyond.</p>
    </footer>
  </div>

  ";
        // line 60
        $this->displayBlock('javascripts', $context, $blocks);
        // line 65
        echo "
  </body>
</html>";
        
        $__internal_a793f91fcc3600a6b47e22bfd64c1eba59672260ec72792b0f14c8cf0bc673fd->leave($__internal_a793f91fcc3600a6b47e22bfd64c1eba59672260ec72792b0f14c8cf0bc673fd_prof);

    }

    // line 9
    public function block_title($context, array $blocks = array())
    {
        $__internal_3fb741f8377ab6a80bcc7b9a7b0e442e673684fdcd3e5f168d3fad68564be085 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3fb741f8377ab6a80bcc7b9a7b0e442e673684fdcd3e5f168d3fad68564be085->enter($__internal_3fb741f8377ab6a80bcc7b9a7b0e442e673684fdcd3e5f168d3fad68564be085_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "ESIEA Plateforme";
        
        $__internal_3fb741f8377ab6a80bcc7b9a7b0e442e673684fdcd3e5f168d3fad68564be085->leave($__internal_3fb741f8377ab6a80bcc7b9a7b0e442e673684fdcd3e5f168d3fad68564be085_prof);

    }

    // line 11
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_24096b111a79ec00af8a7bc5d81a1ed76d5ec2bf556006687870802dae3f2b23 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_24096b111a79ec00af8a7bc5d81a1ed76d5ec2bf556006687870802dae3f2b23->enter($__internal_24096b111a79ec00af8a7bc5d81a1ed76d5ec2bf556006687870802dae3f2b23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 12
        echo "      ";
        // line 13
        echo "      <link rel=\"stylesheet\" href=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css\">
";
        
        $__internal_24096b111a79ec00af8a7bc5d81a1ed76d5ec2bf556006687870802dae3f2b23->leave($__internal_24096b111a79ec00af8a7bc5d81a1ed76d5ec2bf556006687870802dae3f2b23_prof);

    }

    // line 48
    public function block_body($context, array $blocks = array())
    {
        $__internal_c73aba44fbde3e2c7987b2b903689d4eb1e9f5722e4aec9c095251c3748ae5b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c73aba44fbde3e2c7987b2b903689d4eb1e9f5722e4aec9c095251c3748ae5b2->enter($__internal_c73aba44fbde3e2c7987b2b903689d4eb1e9f5722e4aec9c095251c3748ae5b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 49
        echo "        ";
        
        $__internal_c73aba44fbde3e2c7987b2b903689d4eb1e9f5722e4aec9c095251c3748ae5b2->leave($__internal_c73aba44fbde3e2c7987b2b903689d4eb1e9f5722e4aec9c095251c3748ae5b2_prof);

    }

    // line 60
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_b89990a5c9f17b3b7cba19a011440d9edae80a27df1d2868389bcbd6b910a481 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b89990a5c9f17b3b7cba19a011440d9edae80a27df1d2868389bcbd6b910a481->enter($__internal_b89990a5c9f17b3b7cba19a011440d9edae80a27df1d2868389bcbd6b910a481_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 61
        echo "    ";
        // line 62
        echo "    <script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js\"></script>
    <script src=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js\"></script>
  ";
        
        $__internal_b89990a5c9f17b3b7cba19a011440d9edae80a27df1d2868389bcbd6b910a481->leave($__internal_b89990a5c9f17b3b7cba19a011440d9edae80a27df1d2868389bcbd6b910a481_prof);

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
        return array (  167 => 62,  165 => 61,  159 => 60,  152 => 49,  146 => 48,  138 => 13,  136 => 12,  130 => 11,  118 => 9,  109 => 65,  107 => 60,  100 => 56,  92 => 50,  90 => 48,  82 => 43,  77 => 40,  71 => 38,  69 => 37,  65 => 36,  42 => 15,  40 => 11,  35 => 9,  26 => 2,);
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

    <div class=\"row\">
      <div id=\"menu\" class=\"col-md-3\">
        <h3>Les annonces</h3>
        <ul class=\"nav nav-pills nav-stacked\">
          <li><a href=\"{{ path('esiea_platform_home') }}\">Accueil</a></li>
          {% if is_granted('ROLE_AUTEUR') %}
            <li><a href=\"{{ path('esiea_platform_add') }}\">Ajouter une annonce</a></li>
          {% endif %}
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
