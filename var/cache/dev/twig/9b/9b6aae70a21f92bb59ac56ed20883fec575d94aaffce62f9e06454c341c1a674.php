<?php

/* ESIEAPlatformBundle:Advert:header.html.twig */
class __TwigTemplate_3bdf99aee3800eb52c64ff1c443b7d5a2dff62ca474c28c0cd728b0e76eee43a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_44a545160c953190beee85ceb884edd54a96494e24ff2670a044b647b69b5c27 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_44a545160c953190beee85ceb884edd54a96494e24ff2670a044b647b69b5c27->enter($__internal_44a545160c953190beee85ceb884edd54a96494e24ff2670a044b647b69b5c27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ESIEAPlatformBundle:Advert:header.html.twig"));

        // line 2
        echo "<html lang=\"fr\">

<head>

   

    <title>Home</title>

    <!-- Bootstrap Core CSS -->
    <link href=\"vendor/bootstrap/css/bootstrap.min.css\" rel=\"stylesheet\">

    



</head>

<body id=\"page-top\" data-spy=\"scroll\" data-target=\".navbar-fixed-top\"  style=\"background-color:black;\">

    <!-- Navigation -->
    <nav class=\"navbar navbar-custom navbar-fixed-top\" role=\"navigation\">
        <div class=\"container\">
            <div class=\"navbar-header\">
             <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-main-collapse\">
                    Menu <i class=\"fa fa-bars\"></i>
                </button>
                <h2>ESIE_EAT</h2>

               
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
        // line 44
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("esiea_platform_home");
        echo "\">Home</a>
                    </li>
                    <li> <a  href=\"";
        // line 46
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("esiea_platform_add");
        echo "\">
                     <span class=\"light\">Publier</span> une recette
                                    </a></li>


                    
                    <li>
                        <a class=\"page-scroll\" href=\"#about\">À propos</a>
                    </li>
                    <li>
                        <a class=\"page-scroll\" href=\"#recette\">Recettes</a>
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


    




</body>

</html>
";
        
        $__internal_44a545160c953190beee85ceb884edd54a96494e24ff2670a044b647b69b5c27->leave($__internal_44a545160c953190beee85ceb884edd54a96494e24ff2670a044b647b69b5c27_prof);

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
        return array (  71 => 46,  66 => 44,  22 => 2,);
    }

    public function getSource()
    {
        return "{# app/Resources/views/header.html.twig #}
<html lang=\"fr\">

<head>

   

    <title>Home</title>

    <!-- Bootstrap Core CSS -->
    <link href=\"vendor/bootstrap/css/bootstrap.min.css\" rel=\"stylesheet\">

    



</head>

<body id=\"page-top\" data-spy=\"scroll\" data-target=\".navbar-fixed-top\"  style=\"background-color:black;\">

    <!-- Navigation -->
    <nav class=\"navbar navbar-custom navbar-fixed-top\" role=\"navigation\">
        <div class=\"container\">
            <div class=\"navbar-header\">
             <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-main-collapse\">
                    Menu <i class=\"fa fa-bars\"></i>
                </button>
                <h2>ESIE_EAT</h2>

               
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
                    <li> <a  href=\"{{ path('esiea_platform_add') }}\">
                     <span class=\"light\">Publier</span> une recette
                                    </a></li>


                    
                    <li>
                        <a class=\"page-scroll\" href=\"#about\">À propos</a>
                    </li>
                    <li>
                        <a class=\"page-scroll\" href=\"#recette\">Recettes</a>
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


    




</body>

</html>
";
    }
}
