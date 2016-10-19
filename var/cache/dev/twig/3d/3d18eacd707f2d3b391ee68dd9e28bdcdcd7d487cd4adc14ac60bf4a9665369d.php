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
        $__internal_b14a7c283285d2407724caaf13e59e0e708695239b146117eeac3aa8a8aafdf0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b14a7c283285d2407724caaf13e59e0e708695239b146117eeac3aa8a8aafdf0->enter($__internal_b14a7c283285d2407724caaf13e59e0e708695239b146117eeac3aa8a8aafdf0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ESIEACoreBundle::layout.html.twig"));

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
        // line 32
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
        // line 82
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listAdverts"]) ? $context["listAdverts"] : $this->getContext($context, "listAdverts")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["advert"]) {
            // line 83
            echo "            <br>
               <a href=\"";
            // line 84
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("esiea_platform_view", array("id" => $this->getAttribute($context["advert"], "id", array()))), "html", null, true);
            echo "\">
               ";
            // line 85
            echo twig_escape_filter($this->env, $this->getAttribute($context["advert"], "title", array()), "html", null, true);
            echo "
               </a>
               par ";
            // line 87
            echo twig_escape_filter($this->env, $this->getAttribute($context["advert"], "author", array()), "html", null, true);
            echo ",
               le ";
            // line 88
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["advert"], "date", array()), "d/m/Y"), "html", null, true);
            echo "
            </br>
            ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 91
            echo "            <li>Pas (encore !) d'annonces</li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['advert'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 93
        echo "
         </ul>
         <!-- Pagination -->
         <ul class=\"pagination\">
            ";
        // line 97
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["nbPages"]) ? $context["nbPages"] : $this->getContext($context, "nbPages"))));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 98
            echo "            <li";
            if (($context["p"] == (isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")))) {
                echo " class=\"active\"";
            }
            echo ">
            <a href=\"";
            // line 99
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
        // line 102
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
        // line 127
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo " for ESIEA.</font></p>
      </footer>
      </div>
      
   </body>



   </body>
";
        // line 136
        $this->displayBlock('javascripts', $context, $blocks);
        // line 145
        echo "
</html>
";
        
        $__internal_b14a7c283285d2407724caaf13e59e0e708695239b146117eeac3aa8a8aafdf0->leave($__internal_b14a7c283285d2407724caaf13e59e0e708695239b146117eeac3aa8a8aafdf0_prof);

    }

    // line 12
    public function block_title($context, array $blocks = array())
    {
        $__internal_7006b1b19fbfe3d46ff7f6c35272ce179933d8208ab016312f68377652f4fb4b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7006b1b19fbfe3d46ff7f6c35272ce179933d8208ab016312f68377652f4fb4b->enter($__internal_7006b1b19fbfe3d46ff7f6c35272ce179933d8208ab016312f68377652f4fb4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "ESIEA Plateforme";
        
        $__internal_7006b1b19fbfe3d46ff7f6c35272ce179933d8208ab016312f68377652f4fb4b->leave($__internal_7006b1b19fbfe3d46ff7f6c35272ce179933d8208ab016312f68377652f4fb4b_prof);

    }

    // line 19
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_a9b31d7a1e7ab62b94fbcee82407124aadfd7a1d3ea2517b45a259e0599d4f50 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a9b31d7a1e7ab62b94fbcee82407124aadfd7a1d3ea2517b45a259e0599d4f50->enter($__internal_a9b31d7a1e7ab62b94fbcee82407124aadfd7a1d3ea2517b45a259e0599d4f50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 20
        echo "      ";
        // line 21
        echo "      <link rel=\"stylesheet\" href=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css\">
      <link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css?family=Roboto\" >

      <link href=\"http://fonts.googleapis.com/css?family=Roboto\" rel=\"stylesheet\" type=\"text/css\">
      ";
        // line 25
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "c91f9fa_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_c91f9fa_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/css/c91f9fa_demo_1.css");
            // line 28
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
        // line 31
        echo "      ";
        
        $__internal_a9b31d7a1e7ab62b94fbcee82407124aadfd7a1d3ea2517b45a259e0599d4f50->leave($__internal_a9b31d7a1e7ab62b94fbcee82407124aadfd7a1d3ea2517b45a259e0599d4f50_prof);

    }

    // line 136
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_56daf4b4348537c3e6f40427bc98ef21fc1bac41a4baff8420a5752de5f9f238 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_56daf4b4348537c3e6f40427bc98ef21fc1bac41a4baff8420a5752de5f9f238->enter($__internal_56daf4b4348537c3e6f40427bc98ef21fc1bac41a4baff8420a5752de5f9f238_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 137
        echo "      ";
        // line 138
        echo "      <script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js\"></script>
      <script src=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js\"></script>
      <script src=\"";
        // line 140
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/esieaplatform/js/demo.js"), "html", null, true);
        echo "\"></script>



      ";
        
        $__internal_56daf4b4348537c3e6f40427bc98ef21fc1bac41a4baff8420a5752de5f9f238->leave($__internal_56daf4b4348537c3e6f40427bc98ef21fc1bac41a4baff8420a5752de5f9f238_prof);

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
        return array (  283 => 140,  279 => 138,  277 => 137,  271 => 136,  264 => 31,  248 => 28,  244 => 25,  238 => 21,  236 => 20,  230 => 19,  218 => 12,  209 => 145,  207 => 136,  195 => 127,  168 => 102,  157 => 99,  150 => 98,  146 => 97,  140 => 93,  133 => 91,  125 => 88,  121 => 87,  116 => 85,  112 => 84,  109 => 83,  104 => 82,  52 => 32,  50 => 19,  43 => 15,  37 => 12,  25 => 2,);
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

      <link href=\"http://fonts.googleapis.com/css?family=Roboto\" rel=\"stylesheet\" type=\"text/css\">
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
