<?php

/* @ESIEAPlatform/Advert/edit.html.twig */
class __TwigTemplate_f1a5c1d8fc821e26d5d3433a9fc511befab829b3f8f3a5a1852d7e9087ff35f0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'esieaplatform_body' => array($this, 'block_esieaplatform_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        echo "
<head>
    
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
  


      <title>";
        // line 11
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



            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class=\"collapse navbar-collapse navbar-right navbar-main-collapse\">
                <ul class=\"nav navbar-nav\">
                    <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
                    <li class=\"hidden\">
                        <a href=\"#page-top\"></a>
                    </li>

                    <li>
                        <a class=\"page-scroll\" href=\"";
        // line 39
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("esiea_platform_home");
        echo "\">Home</a>
                    </li>
                    <li> <a  href=\"";
        // line 41
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("esiea_platform_add");
        echo "\">
                     <span class=\"page-scroll\">Publier</span> une recette
                                    </a></li>
                   
                    <li>
                        <a class=\"page-scroll\" href=\"#about\">À propos</a>
                    </li>
                    <li>
                        <a class=\"page-scroll\" href=\"#recette\">Recettes</a>
                    </li>
                     <li>
                        <a class=\"page-scroll\" href=\"";
        // line 52
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
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
     


     ";
        // line 70
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 85
        echo "   </head>

";
        // line 87
        $this->displayBlock('esieaplatform_body', $context, $blocks);
    }

    // line 11
    public function block_title($context, array $blocks = array())
    {
        echo "ESIEA Plateforme";
    }

    // line 70
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 71
        echo "      ";
        // line 72
        echo "      <link rel=\"stylesheet\" href=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css\">
      <link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css?family=Open+Sans\" >

      <link href=\"http://fonts.googleapis.com/css?family=Open+Sans\" rel=\"stylesheet\" type=\"text/css\">


      ";
        // line 78
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "c91f9fa_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_c91f9fa_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/c91f9fa_demo_1.css");
            // line 81
            echo "      <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\" type=\"text/css\" />
      <link href=\"vendor/bootstrap/css/bootstrap.min.css\" rel=\"stylesheet\">
      ";
        } else {
            // asset "c91f9fa"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_c91f9fa") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/c91f9fa.css");
            echo "      <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\" type=\"text/css\" />
      <link href=\"vendor/bootstrap/css/bootstrap.min.css\" rel=\"stylesheet\">
      ";
        }
        unset($context["asset_url"]);
        // line 84
        echo "      ";
    }

    // line 87
    public function block_esieaplatform_body($context, array $blocks = array())
    {
        // line 88
        echo "
  


<section id=\"edit\" class=\"container content-section text-center\" >

<h3>Modifier votre recette</h3>
  ";
        // line 95
        echo twig_include($this->env, $context, "ESIEAPlatformBundle:Advert:form.html.twig");
        echo "
</section>

  <p>
    <a href=\"";
        // line 99
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("esiea_platform_view", array("id" => $this->getAttribute((isset($context["advert"]) ? $context["advert"] : null), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-default\">
      <i class=\"glyphicon glyphicon-chevron-left\"></i>
      Retour à votre recette
    </a>
  </p>

";
    }

    public function getTemplateName()
    {
        return "@ESIEAPlatform/Advert/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  176 => 99,  169 => 95,  160 => 88,  157 => 87,  153 => 84,  137 => 81,  133 => 78,  125 => 72,  123 => 71,  120 => 70,  114 => 11,  110 => 87,  106 => 85,  104 => 70,  83 => 52,  69 => 41,  64 => 39,  33 => 11,  22 => 2,);
    }

    public function getSource()
    {
        return "";
    }
}
