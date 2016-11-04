<?php

/* ESIEAPlatformBundle:Advert:header.html.twig */
class __TwigTemplate_c216f98ac434836f8e468f31ce94ac356c64b27d11b9d22697616d6bd338b8cd extends Twig_Template
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
        $__internal_8fb8e2c1791297cd132ceb34e85bdeb4b10016799859419b0b9dd226f5485df5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8fb8e2c1791297cd132ceb34e85bdeb4b10016799859419b0b9dd226f5485df5->enter($__internal_8fb8e2c1791297cd132ceb34e85bdeb4b10016799859419b0b9dd226f5485df5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ESIEAPlatformBundle:Advert:header.html.twig"));

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
            

                <h2>ESIE_<font color=\"#598bdb\">EATS</font></h2>

               
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
        // line 46
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("esiea_platform_home");
        echo "\">Home</a>
                    </li>
                    <li> <a  href=\"";
        // line 48
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("esiea_platform_add");
        echo "\">
                     <span class=\"page-scroll\">Publier</span> une recette
                                    </a></li>
                   
                    <li>
                        <a class=\"page-scroll\" href=\"";
        // line 53
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("esiea_platform_home");
        echo "\">À propos</a>
                    </li>
                    <li>
                        <a class=\"page-scroll\" href=\"";
        // line 56
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("esiea_platform_home");
        echo "\">Recettes</a>
                    </li>
                     <li>
                        <a class=\"page-scroll\" href=\"";
        // line 59
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("esiea_platform_faq");
        echo "\">FAQ</a>
                    </li>

                    <li>
                        <a class=\"page-scroll\" href=\"";
        // line 63
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("esiea_platform_home");
        echo "\"

                        href=\"#contact\"

                        >Contact</a>
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
        
        $__internal_8fb8e2c1791297cd132ceb34e85bdeb4b10016799859419b0b9dd226f5485df5->leave($__internal_8fb8e2c1791297cd132ceb34e85bdeb4b10016799859419b0b9dd226f5485df5_prof);

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
        return array (  100 => 63,  93 => 59,  87 => 56,  81 => 53,  73 => 48,  68 => 46,  22 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# app/Resources/views/header.html.twig #}
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
            

                <h2>ESIE_<font color=\"#598bdb\">EATS</font></h2>

               
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
                     <span class=\"page-scroll\">Publier</span> une recette
                                    </a></li>
                   
                    <li>
                        <a class=\"page-scroll\" href=\"{{ path('esiea_platform_home') }}\">À propos</a>
                    </li>
                    <li>
                        <a class=\"page-scroll\" href=\"{{ path('esiea_platform_home') }}\">Recettes</a>
                    </li>
                     <li>
                        <a class=\"page-scroll\" href=\"{{ path('esiea_platform_faq') }}\">FAQ</a>
                    </li>

                    <li>
                        <a class=\"page-scroll\" href=\"{{ path('esiea_platform_home') }}\"

                        href=\"#contact\"

                        >Contact</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

</body>

</html>
", "ESIEAPlatformBundle:Advert:header.html.twig", "C:\\wamp64\\www\\Symfony\\src\\ESIEA\\PlatformBundle/Resources/views/Advert/header.html.twig");
    }
}
