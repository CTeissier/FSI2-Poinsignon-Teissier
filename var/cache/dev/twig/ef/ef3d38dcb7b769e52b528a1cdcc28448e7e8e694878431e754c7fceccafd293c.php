<?php

/* ESIEACoreBundle::layout.html.twig */
class __TwigTemplate_7048ba49e9fd5db503b0d9479bcfbddfd1a4a85ca9eab9ea944b4c8824857780 extends Twig_Template
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
        $__internal_d95247db7a7c67eafd93232c4852a8d7c938aa7c3d694ebe00396bf76a0efffa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d95247db7a7c67eafd93232c4852a8d7c938aa7c3d694ebe00396bf76a0efffa->enter($__internal_d95247db7a7c67eafd93232c4852a8d7c938aa7c3d694ebe00396bf76a0efffa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ESIEACoreBundle::layout.html.twig"));

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

    <div class=\"row\">
      <div id=\"menu\" class=\"col-md-3\">
        <h3>Les annonces</h3>
        <ul class=\"nav nav-pills nav-stacked\">
          <li><a href=\"";
        // line 35
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("esiea_platform_home");
        echo "\">Accueil</a></li>
          <li><a href=\"";
        // line 36
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("esiea_platform_add");
        echo "\">Ajouter une annonce</a></li>
        </ul>

        <h4>Dernières annonces</h4>
        ";
        // line 40
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("ESIEAPlatformBundle:Advert:menu", array("limit" => 3)));
        echo "
      </div>
      <div id=\"content\" class=\"col-md-9\">
        ";
        // line 43
        $this->displayBlock('body', $context, $blocks);
        // line 45
        echo "      </div>
    </div>

    <hr>

    <footer>
      <p>The sky's the limit © ";
        // line 51
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo " and beyond.</p>
    </footer>
  </div>

  ";
        // line 55
        $this->displayBlock('javascripts', $context, $blocks);
        // line 60
        echo "
  </body>
</html>";
        
        $__internal_d95247db7a7c67eafd93232c4852a8d7c938aa7c3d694ebe00396bf76a0efffa->leave($__internal_d95247db7a7c67eafd93232c4852a8d7c938aa7c3d694ebe00396bf76a0efffa_prof);

    }

    // line 9
    public function block_title($context, array $blocks = array())
    {
        $__internal_6e235c3b7301ddedc179552441ef9ef2fabcbdb5a1dcc8ee93b20a11edb41144 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e235c3b7301ddedc179552441ef9ef2fabcbdb5a1dcc8ee93b20a11edb41144->enter($__internal_6e235c3b7301ddedc179552441ef9ef2fabcbdb5a1dcc8ee93b20a11edb41144_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "ESIEA Plateforme";
        
        $__internal_6e235c3b7301ddedc179552441ef9ef2fabcbdb5a1dcc8ee93b20a11edb41144->leave($__internal_6e235c3b7301ddedc179552441ef9ef2fabcbdb5a1dcc8ee93b20a11edb41144_prof);

    }

    // line 11
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_2e7910c1606555073ed3c473d871cb03ab877ef50fd30cff55a7f64ef10f1f1a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e7910c1606555073ed3c473d871cb03ab877ef50fd30cff55a7f64ef10f1f1a->enter($__internal_2e7910c1606555073ed3c473d871cb03ab877ef50fd30cff55a7f64ef10f1f1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 12
        echo "      ";
        // line 13
        echo "      <link rel=\"stylesheet\" href=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css\">
    ";
        
        $__internal_2e7910c1606555073ed3c473d871cb03ab877ef50fd30cff55a7f64ef10f1f1a->leave($__internal_2e7910c1606555073ed3c473d871cb03ab877ef50fd30cff55a7f64ef10f1f1a_prof);

    }

    // line 43
    public function block_body($context, array $blocks = array())
    {
        $__internal_1fcf1386ce519e7d333c11f1d3760b9d003eba53d4edaaca20d6a0c3214d3de3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1fcf1386ce519e7d333c11f1d3760b9d003eba53d4edaaca20d6a0c3214d3de3->enter($__internal_1fcf1386ce519e7d333c11f1d3760b9d003eba53d4edaaca20d6a0c3214d3de3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 44
        echo "        ";
        
        $__internal_1fcf1386ce519e7d333c11f1d3760b9d003eba53d4edaaca20d6a0c3214d3de3->leave($__internal_1fcf1386ce519e7d333c11f1d3760b9d003eba53d4edaaca20d6a0c3214d3de3_prof);

    }

    // line 55
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_5425ba26387e396f400c86616970cb74a850ccd42682372167361587688a1cfc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5425ba26387e396f400c86616970cb74a850ccd42682372167361587688a1cfc->enter($__internal_5425ba26387e396f400c86616970cb74a850ccd42682372167361587688a1cfc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 56
        echo "    ";
        // line 57
        echo "    <script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js\"></script>
    <script src=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js\"></script>
  ";
        
        $__internal_5425ba26387e396f400c86616970cb74a850ccd42682372167361587688a1cfc->leave($__internal_5425ba26387e396f400c86616970cb74a850ccd42682372167361587688a1cfc_prof);

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
        return array (  158 => 57,  156 => 56,  150 => 55,  143 => 44,  137 => 43,  129 => 13,  127 => 12,  121 => 11,  109 => 9,  100 => 60,  98 => 55,  91 => 51,  83 => 45,  81 => 43,  75 => 40,  68 => 36,  64 => 35,  42 => 15,  40 => 11,  35 => 9,  26 => 2,);
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
