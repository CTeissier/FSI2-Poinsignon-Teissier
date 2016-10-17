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
        $__internal_98b0a40622674b95c082366fa9108f83eda26d24d3b594142042104e84eb1862 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_98b0a40622674b95c082366fa9108f83eda26d24d3b594142042104e84eb1862->enter($__internal_98b0a40622674b95c082366fa9108f83eda26d24d3b594142042104e84eb1862_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ESIEACoreBundle::layout.html.twig"));

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

          ";
        // line 32
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("ESIEAPlatformBundle:Site:header"));
        echo "

    <div class=\"row\">
      <div id=\"menu\" class=\"col-md-3\">
        <h3>Les annonces</h3>
        <ul class=\"nav nav-pills nav-stacked\">
          <li><a href=\"";
        // line 38
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("esiea_platform_home");
        echo "\">Accueil</a></li>
          <li><a href=\"";
        // line 39
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("esiea_platform_add");
        echo "\">Ajouter une annonce</a></li>
        </ul>

        <h4>Dernières annonces</h4>
        ";
        // line 43
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("ESIEAPlatformBundle:Advert:menu", array("limit" => 3)));
        echo "
      </div>
      <div id=\"content\" class=\"col-md-9\">
        ";
        // line 46
        $this->displayBlock('body', $context, $blocks);
        // line 48
        echo "      </div>
    </div>

    <hr>

    <footer>
      <p>The sky's the limit © ";
        // line 54
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo " and beyond.</p>
    </footer>
  </div>

  ";
        // line 58
        $this->displayBlock('javascripts', $context, $blocks);
        // line 63
        echo "
  </body>
</html>";
        
        $__internal_98b0a40622674b95c082366fa9108f83eda26d24d3b594142042104e84eb1862->leave($__internal_98b0a40622674b95c082366fa9108f83eda26d24d3b594142042104e84eb1862_prof);

    }

    // line 9
    public function block_title($context, array $blocks = array())
    {
        $__internal_35b3cdd8c9b96ba0644ca6746a49b93c45c78bd0d431b6bc15156a3810cd1f41 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_35b3cdd8c9b96ba0644ca6746a49b93c45c78bd0d431b6bc15156a3810cd1f41->enter($__internal_35b3cdd8c9b96ba0644ca6746a49b93c45c78bd0d431b6bc15156a3810cd1f41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "ESIEA Plateforme";
        
        $__internal_35b3cdd8c9b96ba0644ca6746a49b93c45c78bd0d431b6bc15156a3810cd1f41->leave($__internal_35b3cdd8c9b96ba0644ca6746a49b93c45c78bd0d431b6bc15156a3810cd1f41_prof);

    }

    // line 11
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_244e300d050f341ec16fae0358b5f5dbe33ad16e09354913ac9a6409672ed3be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_244e300d050f341ec16fae0358b5f5dbe33ad16e09354913ac9a6409672ed3be->enter($__internal_244e300d050f341ec16fae0358b5f5dbe33ad16e09354913ac9a6409672ed3be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 12
        echo "      ";
        // line 13
        echo "      <link rel=\"stylesheet\" href=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css\">
    ";
        
        $__internal_244e300d050f341ec16fae0358b5f5dbe33ad16e09354913ac9a6409672ed3be->leave($__internal_244e300d050f341ec16fae0358b5f5dbe33ad16e09354913ac9a6409672ed3be_prof);

    }

    // line 46
    public function block_body($context, array $blocks = array())
    {
        $__internal_b5eeb36f8f2aabbc87f1fa75d99ccb61fa0706dee65fef5f5b82ace16fedc92d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b5eeb36f8f2aabbc87f1fa75d99ccb61fa0706dee65fef5f5b82ace16fedc92d->enter($__internal_b5eeb36f8f2aabbc87f1fa75d99ccb61fa0706dee65fef5f5b82ace16fedc92d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 47
        echo "        ";
        
        $__internal_b5eeb36f8f2aabbc87f1fa75d99ccb61fa0706dee65fef5f5b82ace16fedc92d->leave($__internal_b5eeb36f8f2aabbc87f1fa75d99ccb61fa0706dee65fef5f5b82ace16fedc92d_prof);

    }

    // line 58
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_c3426eab051285c22fac7b073ea00d8cc0738588113b6584bcd63236c832dba0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c3426eab051285c22fac7b073ea00d8cc0738588113b6584bcd63236c832dba0->enter($__internal_c3426eab051285c22fac7b073ea00d8cc0738588113b6584bcd63236c832dba0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 59
        echo "    ";
        // line 60
        echo "    <script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js\"></script>
    <script src=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js\"></script>
  ";
        
        $__internal_c3426eab051285c22fac7b073ea00d8cc0738588113b6584bcd63236c832dba0->leave($__internal_c3426eab051285c22fac7b073ea00d8cc0738588113b6584bcd63236c832dba0_prof);

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
        return array (  164 => 60,  162 => 59,  156 => 58,  149 => 47,  143 => 46,  135 => 13,  133 => 12,  127 => 11,  115 => 9,  106 => 63,  104 => 58,  97 => 54,  89 => 48,  87 => 46,  81 => 43,  74 => 39,  70 => 38,  61 => 32,  42 => 15,  40 => 11,  35 => 9,  26 => 2,);
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
