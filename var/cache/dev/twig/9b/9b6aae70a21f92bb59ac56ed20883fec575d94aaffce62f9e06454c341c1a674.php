<?php

/* ESIEAPlatformBundle:Advert:header.html.twig */
class __TwigTemplate_3bdf99aee3800eb52c64ff1c443b7d5a2dff62ca474c28c0cd728b0e76eee43a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bcfdca4373b377e53f70ba2fb8ae7426684a7400ef58d39668c82e009bf4adc1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bcfdca4373b377e53f70ba2fb8ae7426684a7400ef58d39668c82e009bf4adc1->enter($__internal_bcfdca4373b377e53f70ba2fb8ae7426684a7400ef58d39668c82e009bf4adc1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ESIEAPlatformBundle:Advert:header.html.twig"));

        // line 2
        echo "<html lang=\"fr\">

<head>

    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">

    <title>Home</title>

    <!-- Bootstrap Core CSS -->
    <link href=\"vendor/bootstrap/css/bootstrap.min.css\" rel=\"stylesheet\">

    


";
        // line 20
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "c91f9fa_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_c91f9fa_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/css/c91f9fa_demo_1.css");
            // line 22
            echo "
        <link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css?family=Roboto\"/>
        <link rel=\"stylesheet\" href=\"";
            // line 24
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/css\" />
";
        } else {
            // asset "c91f9fa"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_c91f9fa") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/css/c91f9fa.css");
            // line 22
            echo "
        <link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css?family=Roboto\"/>
        <link rel=\"stylesheet\" href=\"";
            // line 24
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/css\" />
";
        }
        unset($context["asset_url"]);
        // line 26
        echo "


</head>

<body id=\"page-top\" data-spy=\"scroll\" data-target=\".navbar-fixed-top\">

    <!-- Navigation -->
    <nav class=\"navbar navbar-custom navbar-fixed-top\" role=\"navigation\">
        <div class=\"container\">
            <div class=\"navbar-header\">
                <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-main-collapse\">
                    Menu <i class=\"fa fa-bars\"></i>
                </button>
                <a class=\"navbar-brand page-scroll\" href=\"#page-top\">
                    <i class=\"fa fa-play-circle\"></i> <span class=\"light\">Publier</span> une recette
                </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class=\"collapse navbar-collapse navbar-right navbar-main-collapse\">
                <ul class=\"nav navbar-nav\">
                    <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
                    <li class=\"hidden\">
                        <a href=\"#page-top\"></a>
                    </li>
                    <li>
                        <a class=\"page-scroll\" href=\"";
        // line 53
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("esiea_platform_home");
        echo "\">Home</a>
                    </li>
                    <li>
                        <a class=\"page-scroll\" href=\"#about\">À propos</a>
                    </li>
                    <li>
                        <a class=\"page-scroll\" href=\"#download\">Recettes</a>
                    </li>
                     <li>
                        <a class=\"page-scroll\" href=\"#about\">FAQ</a>
                    </li>

                    <li>
                        <a class=\"page-scroll\" href=\"#contact\">Contact</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Intro Header -->
    <header class=\"intro\">
        <div class=\"intro-body\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-md-8 col-md-offset-2\">
                        <h1 class=\"brand-heading\">ESIE_EATS</h1>
                        <p class=\"intro-text\">Prononcé EASY_EATS est un service proposé par les étudiants de l'ESIEA.
                            <br>Plus d'information prochainement.</p>
                        <a href=\"#about\" class=\"btn btn-circle page-scroll\">
                            <i class=\"fa fa-angle-double-down animated\"></i>
                        </a>
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


    
";
        // line 110
        $this->displayBlock('javascripts', $context, $blocks);
        // line 113
        echo "
</body>

</html>
";
        
        $__internal_bcfdca4373b377e53f70ba2fb8ae7426684a7400ef58d39668c82e009bf4adc1->leave($__internal_bcfdca4373b377e53f70ba2fb8ae7426684a7400ef58d39668c82e009bf4adc1_prof);

    }

    // line 110
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_20d5d19b1c8479853fe6885566668b9625f85b6725170a133f4d0051d64d3325 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_20d5d19b1c8479853fe6885566668b9625f85b6725170a133f4d0051d64d3325->enter($__internal_20d5d19b1c8479853fe6885566668b9625f85b6725170a133f4d0051d64d3325_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 111
        echo "            <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/esieaplatform/js/demo.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_20d5d19b1c8479853fe6885566668b9625f85b6725170a133f4d0051d64d3325->leave($__internal_20d5d19b1c8479853fe6885566668b9625f85b6725170a133f4d0051d64d3325_prof);

    }

    public function getTemplateName()
    {
        return "ESIEAPlatformBundle:Advert:header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  176 => 111,  170 => 110,  159 => 113,  157 => 110,  97 => 53,  68 => 26,  62 => 24,  58 => 22,  51 => 24,  47 => 22,  43 => 20,  23 => 2,);
    }

    public function getSource()
    {
        return "{# app/Resources/views/header.html.twig #}
<html lang=\"fr\">

<head>

    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">

    <title>Home</title>

    <!-- Bootstrap Core CSS -->
    <link href=\"vendor/bootstrap/css/bootstrap.min.css\" rel=\"stylesheet\">

    


{% stylesheets filter=\"cssrewrite, ?scssphp\"
        'bundles/esieaplatform/css/demo.css'%}

        <link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css?family=Roboto\"/>
        <link rel=\"stylesheet\" href=\"{{ asset_url }}\" type=\"text/css\" />
{% endstylesheets %}



</head>

<body id=\"page-top\" data-spy=\"scroll\" data-target=\".navbar-fixed-top\">

    <!-- Navigation -->
    <nav class=\"navbar navbar-custom navbar-fixed-top\" role=\"navigation\">
        <div class=\"container\">
            <div class=\"navbar-header\">
                <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-main-collapse\">
                    Menu <i class=\"fa fa-bars\"></i>
                </button>
                <a class=\"navbar-brand page-scroll\" href=\"#page-top\">
                    <i class=\"fa fa-play-circle\"></i> <span class=\"light\">Publier</span> une recette
                </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class=\"collapse navbar-collapse navbar-right navbar-main-collapse\">
                <ul class=\"nav navbar-nav\">
                    <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
                    <li class=\"hidden\">
                        <a href=\"#page-top\"></a>
                    </li>
                    <li>
                        <a class=\"page-scroll\" href=\"{{ path('esiea_platform_home') }}\">Home</a>
                    </li>
                    <li>
                        <a class=\"page-scroll\" href=\"#about\">À propos</a>
                    </li>
                    <li>
                        <a class=\"page-scroll\" href=\"#download\">Recettes</a>
                    </li>
                     <li>
                        <a class=\"page-scroll\" href=\"#about\">FAQ</a>
                    </li>

                    <li>
                        <a class=\"page-scroll\" href=\"#contact\">Contact</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Intro Header -->
    <header class=\"intro\">
        <div class=\"intro-body\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-md-8 col-md-offset-2\">
                        <h1 class=\"brand-heading\">ESIE_EATS</h1>
                        <p class=\"intro-text\">Prononcé EASY_EATS est un service proposé par les étudiants de l'ESIEA.
                            <br>Plus d'information prochainement.</p>
                        <a href=\"#about\" class=\"btn btn-circle page-scroll\">
                            <i class=\"fa fa-angle-double-down animated\"></i>
                        </a>
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


    
{% block javascripts %}
            <script src=\"{{ asset('bundles/esieaplatform/js/demo.js') }}\"></script>
{% endblock %}

</body>

</html>
";
    }
}
