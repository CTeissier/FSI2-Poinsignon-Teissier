<?php

/* ESIEACoreBundle::layout.html.twig */
class __TwigTemplate_3682d4a348a6015c7a08ba7a3b22fd79fa0d86611a6c54d7e3bcc752ec6bfd3b extends Twig_Template
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
        $__internal_7f36b99bcbc9e3f9a1d26f9234fac37597fd7198752afcb78722ca87b474bef5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f36b99bcbc9e3f9a1d26f9234fac37597fd7198752afcb78722ca87b474bef5->enter($__internal_7f36b99bcbc9e3f9a1d26f9234fac37597fd7198752afcb78722ca87b474bef5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ESIEACoreBundle::layout.html.twig"));

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


    <!-- Bootstrap Core CSS -->
    <link href=\"vendor/bootstrap/css/bootstrap.min.css\" rel=\"stylesheet\">

    

    ";
        // line 17
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("ESIEAPlatformBundle:Site:header"));
        echo "


    ";
        // line 20
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 37
        echo "  </head>

  <body>


    <!-- Left Side Bar -->      
    <div class=\"row\">
      <div id=\"menu\" class=\"col-md-3\">
        <h3>Les annonces</h3>
        <ul class=\"nav nav-pills nav-stacked\">
          <li><a href=\"";
        // line 47
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("esiea_platform_home");
        echo "\">Accueil</a></li>
          <li><a href=\"";
        // line 48
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("esiea_platform_add");
        echo "\">Ajouter une annonce</a></li>
        </ul>

        <h4>Dernières annonces</h4>
        ";
        // line 52
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("ESIEAPlatformBundle:Advert:menu", array("limit" => 3)));
        echo "
      </div>
      <div id=\"content\" class=\"col-md-9\">
        ";
        // line 55
        $this->displayBlock('body', $context, $blocks);
        // line 59
        echo "      </div>
    </div>

    

    <footer>
      <!-- Contact Section -->
    <section id=\"contact\" class=\"container content-section text-center\">
        <div class=\"row\">
            <div class=\"col-lg-8 col-lg-offset-2\">
                <h2>Contactez-nous</h2>
                <p>Vous êtes libre de nous envoyer un email et nous faire part de vos suggestions, ou juste pour faire un coucou !</p>
                <p><a href=\"daniel.poinsignon@gmail.com\">daniel.poinsignon@gmail.com</a>
                </p>
                <p><a href=\"teissier@et.esiea.fr\">teissier@et.esiea.fr</a>
                </p>
                <ul class=\"list-inline banner-social-buttons\">
                  
                    <li>
                        <a href=\"https:\" class=\"btn btn-default btn-lg\"><i class=\"fa fa-github fa-fw\"></i> <span class=\"network-name\">Github</span></a>
                    </li>
                    <li>
                        <a href=\"https:\" class=\"btn btn-default btn-lg\"><i class=\"fa fa-google-plus fa-fw\"></i> <span class=\"network-name\">ESIEA</span></a>
                    </li>
                </ul>
            </div>
        </div>
    </section>
      <p style=\"text-align:center\"><font size =\"2\"> Daniel POINSIGNON & Cannelle TEISSIER © ";
        // line 87
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo " for ESIEA.</font></p>
    </footer>
  </div>

  ";
        // line 91
        $this->displayBlock('javascripts', $context, $blocks);
        // line 98
        echo "
  </body>
</html>";
        
        $__internal_7f36b99bcbc9e3f9a1d26f9234fac37597fd7198752afcb78722ca87b474bef5->leave($__internal_7f36b99bcbc9e3f9a1d26f9234fac37597fd7198752afcb78722ca87b474bef5_prof);

    }

    // line 9
    public function block_title($context, array $blocks = array())
    {
        $__internal_e25ed2d86dd1b3ee1521b140f74fb830ec4e4306da0cbf21bfecb9dca595f9a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e25ed2d86dd1b3ee1521b140f74fb830ec4e4306da0cbf21bfecb9dca595f9a1->enter($__internal_e25ed2d86dd1b3ee1521b140f74fb830ec4e4306da0cbf21bfecb9dca595f9a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "ESIEA Plateforme";
        
        $__internal_e25ed2d86dd1b3ee1521b140f74fb830ec4e4306da0cbf21bfecb9dca595f9a1->leave($__internal_e25ed2d86dd1b3ee1521b140f74fb830ec4e4306da0cbf21bfecb9dca595f9a1_prof);

    }

    // line 20
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_cceed529b0a37fcd259d790a404c07b502d9b238e1369ca417aee046f0df8880 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cceed529b0a37fcd259d790a404c07b502d9b238e1369ca417aee046f0df8880->enter($__internal_cceed529b0a37fcd259d790a404c07b502d9b238e1369ca417aee046f0df8880_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 21
        echo "      ";
        // line 22
        echo "      <link rel=\"stylesheet\" href=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css\">
      <link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css?family=Roboto\" >
  


    ";
        // line 27
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "c91f9fa_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_c91f9fa_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/css/c91f9fa_demo_1.css");
            // line 30
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/css\" />
    ";
        } else {
            // asset "c91f9fa"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_c91f9fa") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/css/c91f9fa.css");
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/css\" />
    ";
        }
        unset($context["asset_url"]);
        // line 32
        echo "



    ";
        
        $__internal_cceed529b0a37fcd259d790a404c07b502d9b238e1369ca417aee046f0df8880->leave($__internal_cceed529b0a37fcd259d790a404c07b502d9b238e1369ca417aee046f0df8880_prof);

    }

    // line 55
    public function block_body($context, array $blocks = array())
    {
        $__internal_3ba9e72b01d37ce75bc99be29e1e343355884d9931f0ba53e1cab567b54a164d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ba9e72b01d37ce75bc99be29e1e343355884d9931f0ba53e1cab567b54a164d->enter($__internal_3ba9e72b01d37ce75bc99be29e1e343355884d9931f0ba53e1cab567b54a164d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 56
        echo "             <!-- Les trois dernières recettes affichés -->

        ";
        
        $__internal_3ba9e72b01d37ce75bc99be29e1e343355884d9931f0ba53e1cab567b54a164d->leave($__internal_3ba9e72b01d37ce75bc99be29e1e343355884d9931f0ba53e1cab567b54a164d_prof);

    }

    // line 91
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_3fad65b377f7c617a42f3db6af841b3257e0fdc0d1f5a43b52df030c08659407 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3fad65b377f7c617a42f3db6af841b3257e0fdc0d1f5a43b52df030c08659407->enter($__internal_3fad65b377f7c617a42f3db6af841b3257e0fdc0d1f5a43b52df030c08659407_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 92
        echo "    ";
        // line 93
        echo "    <script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js\"></script>
    <script src=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js\"></script>
    <script src=\"";
        // line 95
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/esieaplatform/js/demo.js"), "html", null, true);
        echo "\"></script>
   
  ";
        
        $__internal_3fad65b377f7c617a42f3db6af841b3257e0fdc0d1f5a43b52df030c08659407->leave($__internal_3fad65b377f7c617a42f3db6af841b3257e0fdc0d1f5a43b52df030c08659407_prof);

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
        return array (  216 => 95,  212 => 93,  210 => 92,  204 => 91,  195 => 56,  189 => 55,  178 => 32,  164 => 30,  160 => 27,  153 => 22,  151 => 21,  145 => 20,  133 => 9,  124 => 98,  122 => 91,  115 => 87,  85 => 59,  83 => 55,  77 => 52,  70 => 48,  66 => 47,  54 => 37,  52 => 20,  46 => 17,  35 => 9,  26 => 2,);
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


    <!-- Bootstrap Core CSS -->
    <link href=\"vendor/bootstrap/css/bootstrap.min.css\" rel=\"stylesheet\">

    

    {{ render(controller('ESIEAPlatformBundle:Site:header')) }}


    {% block stylesheets %}
      {# On charge le CSS de bootstrap depuis le site directement #}
      <link rel=\"stylesheet\" href=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css\">
      <link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css?family=Roboto\" >
  


    {% stylesheets filter=\"cssrewrite, ?scssphp\"
        'bundles/esieaplatform/css/demo.css'
        %}
    <link rel=\"stylesheet\" href=\"{{ asset_url }}\" type=\"text/css\" />
    {% endstylesheets %}




    {% endblock %}
  </head>

  <body>


    <!-- Left Side Bar -->      
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
             <!-- Les trois dernières recettes affichés -->

        {% endblock %}
      </div>
    </div>

    

    <footer>
      <!-- Contact Section -->
    <section id=\"contact\" class=\"container content-section text-center\">
        <div class=\"row\">
            <div class=\"col-lg-8 col-lg-offset-2\">
                <h2>Contactez-nous</h2>
                <p>Vous êtes libre de nous envoyer un email et nous faire part de vos suggestions, ou juste pour faire un coucou !</p>
                <p><a href=\"daniel.poinsignon@gmail.com\">daniel.poinsignon@gmail.com</a>
                </p>
                <p><a href=\"teissier@et.esiea.fr\">teissier@et.esiea.fr</a>
                </p>
                <ul class=\"list-inline banner-social-buttons\">
                  
                    <li>
                        <a href=\"https:\" class=\"btn btn-default btn-lg\"><i class=\"fa fa-github fa-fw\"></i> <span class=\"network-name\">Github</span></a>
                    </li>
                    <li>
                        <a href=\"https:\" class=\"btn btn-default btn-lg\"><i class=\"fa fa-google-plus fa-fw\"></i> <span class=\"network-name\">ESIEA</span></a>
                    </li>
                </ul>
            </div>
        </div>
    </section>
      <p style=\"text-align:center\"><font size =\"2\"> Daniel POINSIGNON & Cannelle TEISSIER © {{ 'now'|date('Y') }} for ESIEA.</font></p>
    </footer>
  </div>

  {% block javascripts %}
    {# Ajoutez ces lignes JavaScript si vous comptez vous servir des fonctionnalités du bootstrap Twitter #}
    <script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js\"></script>
    <script src=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js\"></script>
    <script src=\"{{ asset('bundles/esieaplatform/js/demo.js') }}\"></script>
   
  {% endblock %}

  </body>
</html>";
    }
}
