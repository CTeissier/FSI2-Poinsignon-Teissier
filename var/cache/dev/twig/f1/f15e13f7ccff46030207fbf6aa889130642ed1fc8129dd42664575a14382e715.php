<?php

/* ::layout.html.twig */
class __TwigTemplate_cfed4336906f4234c91d8467c616d9213ec2bf1bd9b0f94888da60545cde4026 extends Twig_Template
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
        $__internal_9158c9d27d6190df744bf2c243fd906684faf12e4c1e8527be4f993982b6fd90 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9158c9d27d6190df744bf2c243fd906684faf12e4c1e8527be4f993982b6fd90->enter($__internal_9158c9d27d6190df744bf2c243fd906684faf12e4c1e8527be4f993982b6fd90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::layout.html.twig"));

        // line 2
        echo "

<!DOCTYPE html>

<html>

<head>

  <meta charset=\"utf-8\">

  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">


  <title>";
        // line 15
        $this->displayBlock('title', $context, $blocks);
        echo "</title>


  ";
        // line 18
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 25
        echo "
</head>


<body>

  <div class=\"container\">

    <div id=\"header\" class=\"jumbotron\">

      <h1>Ma plateforme d'annonces</h1>

      <p>

        Ce projet est propulsé par Symfony,

        et construit grâce au àOpenClassrooms et SensioLabs.

      </p>

      <p>

        <a class=\"btn btn-primary btn-lg\" href=\"https://openclassrooms.com/courses/developpez-votre-site-web-avec-le-framework-symfony2\">

          Participer au MOESIEA »

        </a>

      </p>

    </div>


    <div class=\"row\">

      <div id=\"menu\" class=\"col-md-3\">

        <h3>Les annonces</h3>

        <ul class=\"nav nav-pills nav-stacked\">

          <li><a href=\"";
        // line 66
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("esiea_platform_home");
        echo "\">Accueil</a></li>

          <li><a href=\"";
        // line 68
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("esiea_platform_add");
        echo "\">Ajouter une annonce</a></li>

        </ul>


        <h4>Dernières annonces</h4>

        ";
        // line 75
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("ESIEAPlatformBundle:Advert:menu", array("limit" => 3)));
        echo "

      </div>

      <div id=\"content\" class=\"col-md-9\">

        ";
        // line 81
        $this->displayBlock('body', $context, $blocks);
        // line 84
        echo "
      </div>

    </div>


    <hr>


    <footer>

      <p>The sky's the limit © ";
        // line 95
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo " and beyond.</p>

    </footer>

  </div>


  ";
        // line 102
        $this->displayBlock('javascripts', $context, $blocks);
        // line 111
        echo "

</body>

</html>";
        
        $__internal_9158c9d27d6190df744bf2c243fd906684faf12e4c1e8527be4f993982b6fd90->leave($__internal_9158c9d27d6190df744bf2c243fd906684faf12e4c1e8527be4f993982b6fd90_prof);

    }

    // line 15
    public function block_title($context, array $blocks = array())
    {
        $__internal_8d17d0171b3c51d86871c440506d7aa3edfaba49a793ac6e48dfa2017d723936 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d17d0171b3c51d86871c440506d7aa3edfaba49a793ac6e48dfa2017d723936->enter($__internal_8d17d0171b3c51d86871c440506d7aa3edfaba49a793ac6e48dfa2017d723936_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "ESIEA Plateforme";
        
        $__internal_8d17d0171b3c51d86871c440506d7aa3edfaba49a793ac6e48dfa2017d723936->leave($__internal_8d17d0171b3c51d86871c440506d7aa3edfaba49a793ac6e48dfa2017d723936_prof);

    }

    // line 18
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_f90e25f1c70872138bc9ce421d37aa388acce869658419d249119ac890557e8b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f90e25f1c70872138bc9ce421d37aa388acce869658419d249119ac890557e8b->enter($__internal_f90e25f1c70872138bc9ce421d37aa388acce869658419d249119ac890557e8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 19
        echo "
    ";
        // line 21
        echo "
    <link rel=\"stylesheet\" href=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css\">

  ";
        
        $__internal_f90e25f1c70872138bc9ce421d37aa388acce869658419d249119ac890557e8b->leave($__internal_f90e25f1c70872138bc9ce421d37aa388acce869658419d249119ac890557e8b_prof);

    }

    // line 81
    public function block_body($context, array $blocks = array())
    {
        $__internal_e333c1920bbac1fa0618e6568fe85dbd9181341a7ec23e0f54a24993b77a0f08 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e333c1920bbac1fa0618e6568fe85dbd9181341a7ec23e0f54a24993b77a0f08->enter($__internal_e333c1920bbac1fa0618e6568fe85dbd9181341a7ec23e0f54a24993b77a0f08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 82
        echo "
        ";
        
        $__internal_e333c1920bbac1fa0618e6568fe85dbd9181341a7ec23e0f54a24993b77a0f08->leave($__internal_e333c1920bbac1fa0618e6568fe85dbd9181341a7ec23e0f54a24993b77a0f08_prof);

    }

    // line 102
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_eeadbb2b11aa19302aff6e2ae043b50e059f68d04850b08f578426107a6a5a1b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eeadbb2b11aa19302aff6e2ae043b50e059f68d04850b08f578426107a6a5a1b->enter($__internal_eeadbb2b11aa19302aff6e2ae043b50e059f68d04850b08f578426107a6a5a1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 103
        echo "
    ";
        // line 105
        echo "
    <script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js\"></script>

    <script src=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js\"></script>

  ";
        
        $__internal_eeadbb2b11aa19302aff6e2ae043b50e059f68d04850b08f578426107a6a5a1b->leave($__internal_eeadbb2b11aa19302aff6e2ae043b50e059f68d04850b08f578426107a6a5a1b_prof);

    }

    public function getTemplateName()
    {
        return "::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  208 => 105,  205 => 103,  199 => 102,  191 => 82,  185 => 81,  175 => 21,  172 => 19,  166 => 18,  154 => 15,  143 => 111,  141 => 102,  131 => 95,  118 => 84,  116 => 81,  107 => 75,  97 => 68,  92 => 66,  49 => 25,  47 => 18,  41 => 15,  26 => 2,);
    }

    public function getSource()
    {
        return "{# app/Resources/views/layout.html.twig #}


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

        Ce projet est propulsé par Symfony,

        et construit grâce au àOpenClassrooms et SensioLabs.

      </p>

      <p>

        <a class=\"btn btn-primary btn-lg\" href=\"https://openclassrooms.com/courses/developpez-votre-site-web-avec-le-framework-symfony2\">

          Participer au MOESIEA »

        </a>

      </p>

    </div>


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
