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
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a1968958336dabcdbd9bfd921218d2fb037f45194da847b2631418dda526f4f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a1968958336dabcdbd9bfd921218d2fb037f45194da847b2631418dda526f4f0->enter($__internal_a1968958336dabcdbd9bfd921218d2fb037f45194da847b2631418dda526f4f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ESIEACoreBundle::layout.html.twig"));

        // line 2
        echo "<!-- Core -->
<!DOCTYPE html>
<html>
   <head>
      <meta charset=\"utf-8\">
      <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
      <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
      <title>";
        // line 9
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
      <!-- Navigation -->
      <nav class=\"navbar navbar-custom navbar-fixed-top\" role=\"navigation\">
         <div class=\"container\">
            <div class=\"navbar-header\">
               <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-main-collapse\">
               Menu <i class=\"fa fa-bars\"></i>
               </button>
               <h2>ESIE_<font color=\"#598bdb\">EATS</font></h2>
            </div>
           
            <div class=\"collapse navbar-collapse navbar-right navbar-main-collapse\">
               <ul class=\"nav navbar-nav\">
                 
                  <li class=\"hidden\">
                     <a href=\"#page-top\"></a>
                  </li>
                  <li>
                     <a class=\"page-scroll\" href=\"";
        // line 27
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("esiea_platform_home");
        echo "\">Home</a>
                  </li>
                  <li> <a  href=\"";
        // line 29
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("esiea_platform_add");
        echo "\">
                     <span class=\"page-scroll\">Publier</span> une recette
                     </a>
                  </li>
                  <li>
                     <a class=\"page-scroll\" href=\"#about\">À propos</a>
                  </li>
                  <li>
                     <a class=\"page-scroll\" href=\"#recette\">Recettes</a>
                  </li>
                  <li>
                     <a class=\"page-scroll\" href=\"";
        // line 40
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("esiea_platform_faq");
        echo "\">FAQ</a>
                  </li>
                  <li>
                     <a class=\"page-scroll\" 
                        href=\"#contact\"
                        >Contact</a>
                  </li>
               </ul>
            </div>
            
         </div>
        </nav>
      ";
        // line 52
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 64
        echo "   </head>
   <body>
      <!-- Intro Header -->
      <header class=\"intro\">
         <div class=\"intro-body\"   >
            <div class=\"container\">
               <div class=\"row\">
                  <div class=\"col-md-8 col-md-offset-2\">
                     <img src=\"https://maxcdn.icons8.com/Color/PNG/512/Food/rice_bowl-512.png\" alt=\"Mountain View\" style=\"width:304px;height:228px;\">
                     <h2 class=\"brand-heading\">ESIE_<font color=\"#598bdb\">EATS</font></h2>
                     <p >Prononcé EASY_EATS est un service proposé par les étudiants de l'ESIEA.
                        <br>Plus d'information prochainement.
                     </p>
                  </div>
               </div>
            </div>
         </div>
      </header>
      <!-- About Section -->
      <section id=\"about\" class=\"container content-section text-center\">
         <div class=\"row\">
            <div class=\"col-lg-8 col-lg-offset-2\">
               <h2>À propos d'ESIE_<font color=\"#598bdb\">EATS</font></h2>
               <p>Nous travaillons avec plusieurs centaines de d'internautes pour vous proposer les meilleurs plats. Vos cuisiniers préférés cuisinent vos  <a href=\"#recette\">recettes</a> préférés, ESIE_<font color=\"#598bdb\">EATS</font> vous les livre.</p>
               <p>La rapidité dont vous avez besoin. Consultez notre sélection de recette livrés en 30 minutes en moyenne.</p>
               <p>Le service que vous appréciez. Une fois vos plats sélectionnés, faites vous livrer vos plats préférés !</p>
            </div>
         </div>
      </section>
      <!--Just delete menu side bar -->
      <section id=\"recette\" class=\"container content-section text-center\">
         <div class=\"row\">
            <div class=\"col-lg-8 col-lg-offset-2\">
               <h2>Dernières recettes</h2>
              
                  ";
        // line 99
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listAdverts"]) ? $context["listAdverts"] : $this->getContext($context, "listAdverts")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["advert"]) {
            // line 100
            echo "                  <p>
                     <a href=\"";
            // line 101
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("esiea_platform_view", array("id" => $this->getAttribute($context["advert"], "id", array()))), "html", null, true);
            echo "\" style=\"text-align:center\">
                     ";
            // line 102
            echo twig_escape_filter($this->env, $this->getAttribute($context["advert"], "title", array()), "html", null, true);
            echo "
                     </a>
                     par ";
            // line 104
            echo twig_escape_filter($this->env, $this->getAttribute($context["advert"], "author", array()), "html", null, true);
            echo ",
                     le ";
            // line 105
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["advert"], "date", array()), "d/m/Y"), "html", null, true);
            echo "
                  </p>
                  ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 108
            echo "                  <p>Pas (encore !) d'annonces</p>
                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['advert'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 110
        echo "             
               <!-- Pagination -->
               <ul class=\"pagination\">
                  ";
        // line 113
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["nbPages"]) ? $context["nbPages"] : $this->getContext($context, "nbPages"))));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 114
            echo "                  <li";
            if (($context["p"] == (isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")))) {
                echo " class=\"active\"";
            }
            echo ">
                  <a href=\"";
            // line 115
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
        // line 118
        echo "               </ul>
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
                     <a href=\"https:\" class=\"btn btn-default btn-lg\"><span class=\"network-name\">Github</span></a>
                  </li>
                  <li>
                     <a href=\"https:\" class=\"btn btn-default btn-lg\"> <span class=\"network-name\">ESIEA</span></a>
                  </li>
               </ul>
            </div>
         </div>
      </section>
      <p style=\"text-align:center\"><font size =\"2\"> Daniel POINSIGNON & Cannelle TEISSIER © ";
        // line 143
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo " for ESIEA - Manger, bouger.</font></p>
      </footer>
      </div>
   </body>
   ";
        // line 147
        $this->displayBlock('javascripts', $context, $blocks);
        // line 152
        echo "</html> 
";
        
        $__internal_a1968958336dabcdbd9bfd921218d2fb037f45194da847b2631418dda526f4f0->leave($__internal_a1968958336dabcdbd9bfd921218d2fb037f45194da847b2631418dda526f4f0_prof);

    }

    // line 9
    public function block_title($context, array $blocks = array())
    {
        $__internal_770fbcf91210d8a831d9bc33b5db913fab8f072d4cc34a669dd8ca076a968500 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_770fbcf91210d8a831d9bc33b5db913fab8f072d4cc34a669dd8ca076a968500->enter($__internal_770fbcf91210d8a831d9bc33b5db913fab8f072d4cc34a669dd8ca076a968500_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "ESIEA Plateforme";
        
        $__internal_770fbcf91210d8a831d9bc33b5db913fab8f072d4cc34a669dd8ca076a968500->leave($__internal_770fbcf91210d8a831d9bc33b5db913fab8f072d4cc34a669dd8ca076a968500_prof);

    }

    // line 52
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_6ed42c00b6a6d8041b4b028ab752796ca92b90525b51de13a177ec669ea33416 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ed42c00b6a6d8041b4b028ab752796ca92b90525b51de13a177ec669ea33416->enter($__internal_6ed42c00b6a6d8041b4b028ab752796ca92b90525b51de13a177ec669ea33416_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 53
        echo "      ";
        // line 54
        echo "      ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "c91f9fa_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_c91f9fa_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/css/c91f9fa_demo_1.css");
            // line 57
            echo "      <link rel=\"stylesheet\" href=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css\">
      <link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css?family=Open+Sans\" >
      <link href=\"http://fonts.googleapis.com/css?family=Open+Sans\" rel=\"stylesheet\" type=\"text/css\">
      <link rel=\"stylesheet\" href=\"";
            // line 60
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/css\" />
      <link href=\"vendor/bootstrap/css/bootstrap.min.css\" rel=\"stylesheet\">
      ";
        } else {
            // asset "c91f9fa"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_c91f9fa") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/css/c91f9fa.css");
            // line 57
            echo "      <link rel=\"stylesheet\" href=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css\">
      <link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css?family=Open+Sans\" >
      <link href=\"http://fonts.googleapis.com/css?family=Open+Sans\" rel=\"stylesheet\" type=\"text/css\">
      <link rel=\"stylesheet\" href=\"";
            // line 60
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/css\" />
      <link href=\"vendor/bootstrap/css/bootstrap.min.css\" rel=\"stylesheet\">
      ";
        }
        unset($context["asset_url"]);
        // line 63
        echo "      ";
        
        $__internal_6ed42c00b6a6d8041b4b028ab752796ca92b90525b51de13a177ec669ea33416->leave($__internal_6ed42c00b6a6d8041b4b028ab752796ca92b90525b51de13a177ec669ea33416_prof);

    }

    // line 147
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_7cacbfd369db9d22869c4c6554dcf49a41c191afa59f2b42f02f0f46b7f5a547 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7cacbfd369db9d22869c4c6554dcf49a41c191afa59f2b42f02f0f46b7f5a547->enter($__internal_7cacbfd369db9d22869c4c6554dcf49a41c191afa59f2b42f02f0f46b7f5a547_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 148
        echo "   <script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js\"></script>
   <script src=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js\"></script>
   <script src=\"";
        // line 150
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/esieaplatform/js/demo.js"), "html", null, true);
        echo "\"></script>
   ";
        
        $__internal_7cacbfd369db9d22869c4c6554dcf49a41c191afa59f2b42f02f0f46b7f5a547->leave($__internal_7cacbfd369db9d22869c4c6554dcf49a41c191afa59f2b42f02f0f46b7f5a547_prof);

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
        return array (  302 => 150,  298 => 148,  292 => 147,  285 => 63,  278 => 60,  273 => 57,  265 => 60,  260 => 57,  255 => 54,  253 => 53,  247 => 52,  235 => 9,  227 => 152,  225 => 147,  218 => 143,  191 => 118,  180 => 115,  173 => 114,  169 => 113,  164 => 110,  157 => 108,  149 => 105,  145 => 104,  140 => 102,  136 => 101,  133 => 100,  128 => 99,  91 => 64,  89 => 52,  74 => 40,  60 => 29,  55 => 27,  34 => 9,  25 => 2,);
    }

    public function getSource()
    {
        return "{# src/ESIEA/CoreBundle/Resources/views/layout.html.twig #}
<!-- Core -->
<!DOCTYPE html>
<html>
   <head>
      <meta charset=\"utf-8\">
      <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
      <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
      <title>{% block title %}ESIEA Plateforme{% endblock %}</title>
      <!-- Navigation -->
      <nav class=\"navbar navbar-custom navbar-fixed-top\" role=\"navigation\">
         <div class=\"container\">
            <div class=\"navbar-header\">
               <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-main-collapse\">
               Menu <i class=\"fa fa-bars\"></i>
               </button>
               <h2>ESIE_<font color=\"#598bdb\">EATS</font></h2>
            </div>
           
            <div class=\"collapse navbar-collapse navbar-right navbar-main-collapse\">
               <ul class=\"nav navbar-nav\">
                 
                  <li class=\"hidden\">
                     <a href=\"#page-top\"></a>
                  </li>
                  <li>
                     <a class=\"page-scroll\" href=\"{{ path('esiea_platform_home') }}\">Home</a>
                  </li>
                  <li> <a  href=\"{{ path('esiea_platform_add') }}\">
                     <span class=\"page-scroll\">Publier</span> une recette
                     </a>
                  </li>
                  <li>
                     <a class=\"page-scroll\" href=\"#about\">À propos</a>
                  </li>
                  <li>
                     <a class=\"page-scroll\" href=\"#recette\">Recettes</a>
                  </li>
                  <li>
                     <a class=\"page-scroll\" href=\"{{ path('esiea_platform_faq') }}\">FAQ</a>
                  </li>
                  <li>
                     <a class=\"page-scroll\" 
                        href=\"#contact\"
                        >Contact</a>
                  </li>
               </ul>
            </div>
            
         </div>
        </nav>
      {% block stylesheets %}
      {# On charge le CSS de bootstrap depuis le site directement #}
      {% stylesheets filter=\"cssrewrite, ?scssphp\"
      'bundles/esieaplatform/css/demo.css'
      %}
      <link rel=\"stylesheet\" href=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css\">
      <link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css?family=Open+Sans\" >
      <link href=\"http://fonts.googleapis.com/css?family=Open+Sans\" rel=\"stylesheet\" type=\"text/css\">
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
                     <img src=\"https://maxcdn.icons8.com/Color/PNG/512/Food/rice_bowl-512.png\" alt=\"Mountain View\" style=\"width:304px;height:228px;\">
                     <h2 class=\"brand-heading\">ESIE_<font color=\"#598bdb\">EATS</font></h2>
                     <p >Prononcé EASY_EATS est un service proposé par les étudiants de l'ESIEA.
                        <br>Plus d'information prochainement.
                     </p>
                  </div>
               </div>
            </div>
         </div>
      </header>
      <!-- About Section -->
      <section id=\"about\" class=\"container content-section text-center\">
         <div class=\"row\">
            <div class=\"col-lg-8 col-lg-offset-2\">
               <h2>À propos d'ESIE_<font color=\"#598bdb\">EATS</font></h2>
               <p>Nous travaillons avec plusieurs centaines de d'internautes pour vous proposer les meilleurs plats. Vos cuisiniers préférés cuisinent vos  <a href=\"#recette\">recettes</a> préférés, ESIE_<font color=\"#598bdb\">EATS</font> vous les livre.</p>
               <p>La rapidité dont vous avez besoin. Consultez notre sélection de recette livrés en 30 minutes en moyenne.</p>
               <p>Le service que vous appréciez. Une fois vos plats sélectionnés, faites vous livrer vos plats préférés !</p>
            </div>
         </div>
      </section>
      <!--Just delete menu side bar -->
      <section id=\"recette\" class=\"container content-section text-center\">
         <div class=\"row\">
            <div class=\"col-lg-8 col-lg-offset-2\">
               <h2>Dernières recettes</h2>
              
                  {% for advert in listAdverts %}
                  <p>
                     <a href=\"{{ path('esiea_platform_view', {'id': advert.id}) }}\" style=\"text-align:center\">
                     {{ advert.title }}
                     </a>
                     par {{ advert.author }},
                     le {{ advert.date|date('d/m/Y') }}
                  </p>
                  {% else %}
                  <p>Pas (encore !) d'annonces</p>
                  {% endfor %}
             
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
                     <a href=\"https:\" class=\"btn btn-default btn-lg\"><span class=\"network-name\">Github</span></a>
                  </li>
                  <li>
                     <a href=\"https:\" class=\"btn btn-default btn-lg\"> <span class=\"network-name\">ESIEA</span></a>
                  </li>
               </ul>
            </div>
         </div>
      </section>
      <p style=\"text-align:center\"><font size =\"2\"> Daniel POINSIGNON & Cannelle TEISSIER © {{ 'now'|date('Y') }} for ESIEA - Manger, bouger.</font></p>
      </footer>
      </div>
   </body>
   {% block javascripts %}
   <script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js\"></script>
   <script src=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js\"></script>
   <script src=\"{{ asset('bundles/esieaplatform/js/demo.js') }}\"></script>
   {% endblock %}
</html> 
";
    }
}
