<?php

/* ::layout.html.twig */
class __TwigTemplate_7ac9f76f9e2cc2b9d6f20d4e3d6b928d8b2b7de3c579fb3c6f7ca8cb027304cd extends Twig_Template
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
        $__internal_31ac2bd461efb8562242a20a284615b17be481386c04b8fe9f26c133eb5abb2e = $this->env->getExtension("native_profiler");
        $__internal_31ac2bd461efb8562242a20a284615b17be481386c04b8fe9f26c133eb5abb2e->enter($__internal_31ac2bd461efb8562242a20a284615b17be481386c04b8fe9f26c133eb5abb2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::layout.html.twig"));

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
        echo $this->env->getExtension('routing')->getPath("esiea_platform_home");
        echo "\">Accueil</a></li>

          <li><a href=\"";
        // line 68
        echo $this->env->getExtension('routing')->getPath("esiea_platform_add");
        echo "\">Ajouter une annonce</a></li>

        </ul>


        <h4>Dernières annonces</h4>

        ";
        // line 75
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("ESIEAPlatformBundle:Advert:menu", array("limit" => 3)));
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
        
        $__internal_31ac2bd461efb8562242a20a284615b17be481386c04b8fe9f26c133eb5abb2e->leave($__internal_31ac2bd461efb8562242a20a284615b17be481386c04b8fe9f26c133eb5abb2e_prof);

    }

    // line 15
    public function block_title($context, array $blocks = array())
    {
        $__internal_16d30bab01c7980a165cbfdb5c487c77aec1599b6c0ae80bfa7b3113ab7f7ecc = $this->env->getExtension("native_profiler");
        $__internal_16d30bab01c7980a165cbfdb5c487c77aec1599b6c0ae80bfa7b3113ab7f7ecc->enter($__internal_16d30bab01c7980a165cbfdb5c487c77aec1599b6c0ae80bfa7b3113ab7f7ecc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "ESIEA Plateforme";
        
        $__internal_16d30bab01c7980a165cbfdb5c487c77aec1599b6c0ae80bfa7b3113ab7f7ecc->leave($__internal_16d30bab01c7980a165cbfdb5c487c77aec1599b6c0ae80bfa7b3113ab7f7ecc_prof);

    }

    // line 18
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_c520aa54013bbd429977a467a7af6bfec8a2e8f3a44300cf447a9d51d84920f2 = $this->env->getExtension("native_profiler");
        $__internal_c520aa54013bbd429977a467a7af6bfec8a2e8f3a44300cf447a9d51d84920f2->enter($__internal_c520aa54013bbd429977a467a7af6bfec8a2e8f3a44300cf447a9d51d84920f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 19
        echo "
    ";
        // line 21
        echo "
    <link rel=\"stylesheet\" href=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css\">

  ";
        
        $__internal_c520aa54013bbd429977a467a7af6bfec8a2e8f3a44300cf447a9d51d84920f2->leave($__internal_c520aa54013bbd429977a467a7af6bfec8a2e8f3a44300cf447a9d51d84920f2_prof);

    }

    // line 81
    public function block_body($context, array $blocks = array())
    {
        $__internal_dce245c7e17e583043b5d11a6940e50fb1269ba570ffd45a75f3bca2682a22c3 = $this->env->getExtension("native_profiler");
        $__internal_dce245c7e17e583043b5d11a6940e50fb1269ba570ffd45a75f3bca2682a22c3->enter($__internal_dce245c7e17e583043b5d11a6940e50fb1269ba570ffd45a75f3bca2682a22c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 82
        echo "
        ";
        
        $__internal_dce245c7e17e583043b5d11a6940e50fb1269ba570ffd45a75f3bca2682a22c3->leave($__internal_dce245c7e17e583043b5d11a6940e50fb1269ba570ffd45a75f3bca2682a22c3_prof);

    }

    // line 102
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_1e9bfa8cdf2456bd980a6895d268b167674f85a08eae6367be3a8c15bf60124f = $this->env->getExtension("native_profiler");
        $__internal_1e9bfa8cdf2456bd980a6895d268b167674f85a08eae6367be3a8c15bf60124f->enter($__internal_1e9bfa8cdf2456bd980a6895d268b167674f85a08eae6367be3a8c15bf60124f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 103
        echo "
    ";
        // line 105
        echo "
    <script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js\"></script>

    <script src=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js\"></script>

  ";
        
        $__internal_1e9bfa8cdf2456bd980a6895d268b167674f85a08eae6367be3a8c15bf60124f->leave($__internal_1e9bfa8cdf2456bd980a6895d268b167674f85a08eae6367be3a8c15bf60124f_prof);

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
