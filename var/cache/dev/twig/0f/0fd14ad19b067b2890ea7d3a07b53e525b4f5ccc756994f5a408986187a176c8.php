<?php

/* ESIEACoreBundle::layout.html.twig */
class __TwigTemplate_1aad8530d62e3d8d17d813a070d4c087c01d467bb70d2f63624aa9596ed5b0e3 extends Twig_Template
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
        $__internal_99c85cf96dfaed45eada5915f624cbc1a040032f617da6c3989c7da7aac28a5b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_99c85cf96dfaed45eada5915f624cbc1a040032f617da6c3989c7da7aac28a5b->enter($__internal_99c85cf96dfaed45eada5915f624cbc1a040032f617da6c3989c7da7aac28a5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ESIEACoreBundle::layout.html.twig"));

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
        
        $__internal_99c85cf96dfaed45eada5915f624cbc1a040032f617da6c3989c7da7aac28a5b->leave($__internal_99c85cf96dfaed45eada5915f624cbc1a040032f617da6c3989c7da7aac28a5b_prof);

    }

    // line 9
    public function block_title($context, array $blocks = array())
    {
        $__internal_496287df610890751a01621e8ce81b45e10abb575f5247646372f28bf59494d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_496287df610890751a01621e8ce81b45e10abb575f5247646372f28bf59494d4->enter($__internal_496287df610890751a01621e8ce81b45e10abb575f5247646372f28bf59494d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "ESIEA Plateforme";
        
        $__internal_496287df610890751a01621e8ce81b45e10abb575f5247646372f28bf59494d4->leave($__internal_496287df610890751a01621e8ce81b45e10abb575f5247646372f28bf59494d4_prof);

    }

    // line 11
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_a32288628e9e19f6410b6859ae53cdfb5de376e1cbef4c5afa15becb9f94ee50 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a32288628e9e19f6410b6859ae53cdfb5de376e1cbef4c5afa15becb9f94ee50->enter($__internal_a32288628e9e19f6410b6859ae53cdfb5de376e1cbef4c5afa15becb9f94ee50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 12
        echo "      ";
        // line 13
        echo "      <link rel=\"stylesheet\" href=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css\">
";
        
        $__internal_a32288628e9e19f6410b6859ae53cdfb5de376e1cbef4c5afa15becb9f94ee50->leave($__internal_a32288628e9e19f6410b6859ae53cdfb5de376e1cbef4c5afa15becb9f94ee50_prof);

    }

    // line 48
    public function block_body($context, array $blocks = array())
    {
        $__internal_9d6d65351e660dab133db8a05ac16feebf3156eae6963708f48760523477f4c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d6d65351e660dab133db8a05ac16feebf3156eae6963708f48760523477f4c6->enter($__internal_9d6d65351e660dab133db8a05ac16feebf3156eae6963708f48760523477f4c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 49
        echo "        ";
        
        $__internal_9d6d65351e660dab133db8a05ac16feebf3156eae6963708f48760523477f4c6->leave($__internal_9d6d65351e660dab133db8a05ac16feebf3156eae6963708f48760523477f4c6_prof);

    }

    // line 60
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_32792ef26606a2d6d76109234398f3792829e4a770cf83b7fcc0ca7b19a0b3e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_32792ef26606a2d6d76109234398f3792829e4a770cf83b7fcc0ca7b19a0b3e4->enter($__internal_32792ef26606a2d6d76109234398f3792829e4a770cf83b7fcc0ca7b19a0b3e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 61
        echo "    ";
        // line 62
        echo "    <script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js\"></script>
    <script src=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js\"></script>
  ";
        
        $__internal_32792ef26606a2d6d76109234398f3792829e4a770cf83b7fcc0ca7b19a0b3e4->leave($__internal_32792ef26606a2d6d76109234398f3792829e4a770cf83b7fcc0ca7b19a0b3e4_prof);

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
