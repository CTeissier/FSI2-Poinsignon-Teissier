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
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_855add584f92e020afbb040157b7c73812bd87f9377f4e6622af73dc42924dd9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_855add584f92e020afbb040157b7c73812bd87f9377f4e6622af73dc42924dd9->enter($__internal_855add584f92e020afbb040157b7c73812bd87f9377f4e6622af73dc42924dd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ESIEACoreBundle::layout.html.twig"));

        // line 2
        echo "<!DOCTYPE html>
<html>
   <head>
       <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">


      <title>";
        // line 12
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
 
     
      ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("ESIEAPlatformBundle:Site:header"));
        echo "
     


     ";
        // line 19
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 30
        echo "   </head>
  
  <body>
      
    <!-- Intro Header -->
    <header class=\"intro\">
        <div class=\"intro-body\"   >
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-md-8 col-md-offset-2\">

<img src=\"http://www.w3schools.com/html/pic_mountain.jpg\" alt=\"Mountain View\" style=\"width:304px;height:228px;\">
                    
                        <h1 class=\"brand-heading\">ESIE_EATS</h1>
                        <p class=\"intro-text\">Prononcé EASY_EATS est un service proposé par les étudiants de l'ESIEA.
                            <br>Plus d'information prochainement.</p>
                        
                    </div>
                </div>
            </div>
        </div>
    </header>

   
     
         

         <!-- About Section -->
    <section id=\"about\" class=\"container content-section text-center\">
        <div class=\"row\">
            <div class=\"col-lg-8 col-lg-offset-2\">
                <h2>À propos d'ESIE_EATS</h2>
                <p>Nous travaillons avec plusieurs centaines de d'internautes pour vous proposer les meilleurs plats. Vos cuisiniers préférés cuisinent vos  <a href=\"google.fr\">recettes</a> préférés, ESIE_EATS vous les livre.</p>
                
                <p>La rapidité dont vous avez besoin. Consultez notre sélection de centaines de restaurants livrés en 30 minutes en moyenne.</p>
                <p>Le service que vous appréciez. Une fois vos plats sélectionnés, vous verrez s'inscrire le montant total de votre commande. Réglez avec votre compte Uber et suivez la livraison dans l'application.</p>


            </div>
        </div>
    </section>




<section id=\"recette\" class=\"container content-section text-center\">
   <div class=\"row\">
      <div class=\"col-lg-8 col-lg-offset-2\">
         <h2>Dernières recettes</h2>
         <ul class=\"intro-text\">
            ";
        // line 80
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listAdverts"]) ? $context["listAdverts"] : $this->getContext($context, "listAdverts")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["advert"]) {
            // line 81
            echo "            <br>
               <a href=\"";
            // line 82
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("esiea_platform_view", array("id" => $this->getAttribute($context["advert"], "id", array()))), "html", null, true);
            echo "\">
               ";
            // line 83
            echo twig_escape_filter($this->env, $this->getAttribute($context["advert"], "title", array()), "html", null, true);
            echo "
               </a>
               par ";
            // line 85
            echo twig_escape_filter($this->env, $this->getAttribute($context["advert"], "author", array()), "html", null, true);
            echo ",
               le ";
            // line 86
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["advert"], "date", array()), "d/m/Y"), "html", null, true);
            echo "
            </br>
            ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 89
            echo "            <li>Pas (encore !) d'annonces</li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['advert'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 91
        echo "
         </ul>
         <!-- Pagination -->
         <ul class=\"pagination\">
            ";
        // line 95
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["nbPages"]) ? $context["nbPages"] : $this->getContext($context, "nbPages"))));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 96
            echo "            <li";
            if (($context["p"] == (isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")))) {
                echo " class=\"active\"";
            }
            echo ">
            <a href=\"";
            // line 97
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("esiea_platform_home", array("page" => $context["p"])), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["p"], "html", null, true);
            echo "</a>
            </li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 100
        echo "         </ul>
      </div>
   </div>
</section>
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
        // line 125
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo " for ESIEA.</font></p>
      </footer>
      </div>
      
   </body>



   </body>
";
        // line 134
        $this->displayBlock('javascripts', $context, $blocks);
        // line 143
        echo "
</html>
";
        
        $__internal_855add584f92e020afbb040157b7c73812bd87f9377f4e6622af73dc42924dd9->leave($__internal_855add584f92e020afbb040157b7c73812bd87f9377f4e6622af73dc42924dd9_prof);

    }

    // line 12
    public function block_title($context, array $blocks = array())
    {
        $__internal_dfc56166d53e027278ad7851fd193fccd0be0727ed0fad613004da2a59ccb0b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dfc56166d53e027278ad7851fd193fccd0be0727ed0fad613004da2a59ccb0b7->enter($__internal_dfc56166d53e027278ad7851fd193fccd0be0727ed0fad613004da2a59ccb0b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "ESIEA Plateforme";
        
        $__internal_dfc56166d53e027278ad7851fd193fccd0be0727ed0fad613004da2a59ccb0b7->leave($__internal_dfc56166d53e027278ad7851fd193fccd0be0727ed0fad613004da2a59ccb0b7_prof);

    }

    // line 19
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_6c6e027dd386e47b439f4eda27597f0ba90a9c132595e07f975652b0bc98ec81 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c6e027dd386e47b439f4eda27597f0ba90a9c132595e07f975652b0bc98ec81->enter($__internal_6c6e027dd386e47b439f4eda27597f0ba90a9c132595e07f975652b0bc98ec81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 20
        echo "      ";
        // line 21
        echo "      <link rel=\"stylesheet\" href=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css\">
      <link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css?family=Roboto\" >
      ";
        // line 23
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "c91f9fa_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_c91f9fa_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/css/c91f9fa_demo_1.css");
            // line 26
            echo "      <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/css\" />
      <link href=\"vendor/bootstrap/css/bootstrap.min.css\" rel=\"stylesheet\">
      ";
        } else {
            // asset "c91f9fa"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_c91f9fa") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/css/c91f9fa.css");
            echo "      <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/css\" />
      <link href=\"vendor/bootstrap/css/bootstrap.min.css\" rel=\"stylesheet\">
      ";
        }
        unset($context["asset_url"]);
        // line 29
        echo "      ";
        
        $__internal_6c6e027dd386e47b439f4eda27597f0ba90a9c132595e07f975652b0bc98ec81->leave($__internal_6c6e027dd386e47b439f4eda27597f0ba90a9c132595e07f975652b0bc98ec81_prof);

    }

    // line 134
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_7bbfaf18bc2515aa1426d5829150002182c9d748b53091d0dbcbca87c96f84cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7bbfaf18bc2515aa1426d5829150002182c9d748b53091d0dbcbca87c96f84cc->enter($__internal_7bbfaf18bc2515aa1426d5829150002182c9d748b53091d0dbcbca87c96f84cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 135
        echo "      ";
        // line 136
        echo "      <script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js\"></script>
      <script src=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js\"></script>
      <script src=\"";
        // line 138
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/esieaplatform/js/demo.js"), "html", null, true);
        echo "\"></script>



      ";
        
        $__internal_7bbfaf18bc2515aa1426d5829150002182c9d748b53091d0dbcbca87c96f84cc->leave($__internal_7bbfaf18bc2515aa1426d5829150002182c9d748b53091d0dbcbca87c96f84cc_prof);

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
        return array (  281 => 138,  277 => 136,  275 => 135,  269 => 134,  262 => 29,  246 => 26,  242 => 23,  238 => 21,  236 => 20,  230 => 19,  218 => 12,  209 => 143,  207 => 134,  195 => 125,  168 => 100,  157 => 97,  150 => 96,  146 => 95,  140 => 91,  133 => 89,  125 => 86,  121 => 85,  116 => 83,  112 => 82,  109 => 81,  104 => 80,  52 => 30,  50 => 19,  43 => 15,  37 => 12,  25 => 2,);
    }

    public function getSource()
    {
        return "{# src/ESIEA/CoreBundle/Resources/views/layout.html.twig #}
<!DOCTYPE html>
<html>
   <head>
       <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">


      <title>{% block title %}ESIEA Plateforme{% endblock %}</title>
 
     
      {{ render(controller('ESIEAPlatformBundle:Site:header')) }}
     


     {% block stylesheets %}
      {# On charge le CSS de bootstrap depuis le site directement #}
      <link rel=\"stylesheet\" href=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css\">
      <link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css?family=Roboto\" >
      {% stylesheets filter=\"cssrewrite, ?scssphp\"
      'bundles/esieaplatform/css/demo.css'
      %}
      <link rel=\"stylesheet\" href=\"{{ asset_url }}\" type=\"text/css\" />
      <link href=\"vendor/bootstrap/css/bootstrap.min.css\" rel=\"stylesheet\">
      {% endstylesheets %}
      {% endblock %}
   </head>
  
  <body>
      
    <!-- Intro Header -->
    <header class=\"intro\">
        <div class=\"intro-body\"   >
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-md-8 col-md-offset-2\">

<img src=\"http://www.w3schools.com/html/pic_mountain.jpg\" alt=\"Mountain View\" style=\"width:304px;height:228px;\">
                    
                        <h1 class=\"brand-heading\">ESIE_EATS</h1>
                        <p class=\"intro-text\">Prononcé EASY_EATS est un service proposé par les étudiants de l'ESIEA.
                            <br>Plus d'information prochainement.</p>
                        
                    </div>
                </div>
            </div>
        </div>
    </header>

   
     
         

         <!-- About Section -->
    <section id=\"about\" class=\"container content-section text-center\">
        <div class=\"row\">
            <div class=\"col-lg-8 col-lg-offset-2\">
                <h2>À propos d'ESIE_EATS</h2>
                <p>Nous travaillons avec plusieurs centaines de d'internautes pour vous proposer les meilleurs plats. Vos cuisiniers préférés cuisinent vos  <a href=\"google.fr\">recettes</a> préférés, ESIE_EATS vous les livre.</p>
                
                <p>La rapidité dont vous avez besoin. Consultez notre sélection de centaines de restaurants livrés en 30 minutes en moyenne.</p>
                <p>Le service que vous appréciez. Une fois vos plats sélectionnés, vous verrez s'inscrire le montant total de votre commande. Réglez avec votre compte Uber et suivez la livraison dans l'application.</p>


            </div>
        </div>
    </section>




<section id=\"recette\" class=\"container content-section text-center\">
   <div class=\"row\">
      <div class=\"col-lg-8 col-lg-offset-2\">
         <h2>Dernières recettes</h2>
         <ul class=\"intro-text\">
            {% for advert in listAdverts %}
            <br>
               <a href=\"{{ path('esiea_platform_view', {'id': advert.id}) }}\">
               {{ advert.title }}
               </a>
               par {{ advert.author }},
               le {{ advert.date|date('d/m/Y') }}
            </br>
            {% else %}
            <li>Pas (encore !) d'annonces</li>
            {% endfor %}

         </ul>
         <!-- Pagination -->
         <ul class=\"pagination\">
            {% for p in range(1, nbPages) %}
            <li{% if p == page %} class=\"active\"{% endif %}>
            <a href=\"{{ path('esiea_platform_home', {'page': p}) }}\">{{ p }}</a>
            </li>
            {% endfor %}
         </ul>
      </div>
   </div>
</section>
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
      
   </body>



   </body>
{% block javascripts %}
      {# Ajoutez ces lignes JavaScript si vous comptez vous servir des fonctionnalités du bootstrap Twitter #}
      <script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js\"></script>
      <script src=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js\"></script>
      <script src=\"{{ asset('bundles/esieaplatform/js/demo.js') }}\"></script>



      {% endblock %}

</html>
";
    }
}
