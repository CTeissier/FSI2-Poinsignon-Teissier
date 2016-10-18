<?php

/* @ESIEACore/layout.html.twig */
class __TwigTemplate_bee63edb64b36b1ebe6ecbcad147ac3a59b141cf2aec7f7180af9ecb4d409790 extends Twig_Template
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
        // line 57
        echo "      </div>
    </div>

    <hr>

    <footer>
      <!-- Contact Section -->
    <section id=\"contact\" class=\"container content-section text-center\">
        <div class=\"row\">
            <div class=\"col-lg-8 col-lg-offset-2\">
                <h2>Contactez-nous</h2>
                <p>Feel free to email us to provide some feedback on our templates, give us suggestions for new templates and themes, or to just say hello!</p>
                <p><a href=\"daniel.poinsignon@gmail.com\">daniel.poinsignon@gmail.com</a>
                </p>
                <ul class=\"list-inline banner-social-buttons\">
                    <li>
                        <a href=\"https:\" class=\"btn btn-default btn-lg\"><i class=\"fa fa-twitter fa-fw\"></i> <span class=\"network-name\">LinkedIn</span></a>
                    </li>
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
      <p>Daniel POINSIGNON & Cannelle TEISSIER © ";
        // line 85
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo " pour Monsieur Garnier-Castellane.</p>
    </footer>
  </div>

  ";
        // line 89
        $this->displayBlock('javascripts', $context, $blocks);
        // line 96
        echo "
  </body>
</html>";
    }

    // line 9
    public function block_title($context, array $blocks = array())
    {
        echo "ESIEA Plateforme";
    }

    // line 20
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 21
        echo "      ";
        // line 22
        echo "      <link rel=\"stylesheet\" href=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css\">
      <link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css?family=Roboto\" >
  


    ";
        // line 27
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "c91f9fa_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_c91f9fa_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/c91f9fa_demo_1.css");
            // line 30
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\" type=\"text/css\" />
    ";
        } else {
            // asset "c91f9fa"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_c91f9fa") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/c91f9fa.css");
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\" type=\"text/css\" />
    ";
        }
        unset($context["asset_url"]);
        // line 32
        echo "



    ";
    }

    // line 55
    public function block_body($context, array $blocks = array())
    {
        // line 56
        echo "        ";
    }

    // line 89
    public function block_javascripts($context, array $blocks = array())
    {
        // line 90
        echo "    ";
        // line 91
        echo "    <script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js\"></script>
    <script src=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js\"></script>
    <script src=\"";
        // line 93
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/esieaplatform/js/demo.js"), "html", null, true);
        echo "\"></script>
   
  ";
    }

    public function getTemplateName()
    {
        return "@ESIEACore/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  187 => 93,  183 => 91,  181 => 90,  178 => 89,  174 => 56,  171 => 55,  163 => 32,  149 => 30,  145 => 27,  138 => 22,  136 => 21,  133 => 20,  127 => 9,  121 => 96,  119 => 89,  112 => 85,  82 => 57,  80 => 55,  74 => 52,  67 => 48,  63 => 47,  51 => 37,  49 => 20,  43 => 17,  32 => 9,  23 => 2,);
    }

    public function getSource()
    {
        return "";
    }
}
