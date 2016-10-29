<?php

/* @ESIEAPlatform/Advert/payment.html.twig */
class __TwigTemplate_0f0b8a1d965100a2e475e7c4eeb11d69af551ffac65baf8ed1cbcaa05a58806c extends Twig_Template
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
        // line 1
        echo "<head>
       <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">


      <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
 
     
      ";
        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("ESIEAPlatformBundle:Site:header"));
        echo "
     


     ";
        // line 14
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 25
        echo "   </head>


<section id=\"add\" class=\"container content-section text-center\" >
<div class=\"container\">
    
    <div class=\"row\">
   
            <div class=\"credit-card-div\">
                <div class=\"panel panel-default\">
                    <div class=\"panel-heading\">

                        <div class=\"row\">
                            <div class=\"col-md-12 col-sm-12 col-xs-12\">
                                <h5 class=\"text-muted\">Vos informations de paiement</h5>
                            </div>
                            <div class=\"col-md-3 col-sm-3 col-xs-3\">
                                <input type=\"text\" class=\"form-control\" placeholder=\"0000 0000 0000 0000\" />
                            </div>
                            
                        </div>
                        <div class=\"row \">
                            <div class=\"col-md-3 col-sm-3 col-xs-3\">
                                <span class=\"help-block text-muted small-font\">Mois d'expiration</span>
                                <input type=\"text\" class=\"form-control\" placeholder=\"YY/MM\" />
                            </div>
                            
                            <div class=\"col-md-3 col-sm-3 col-xs-3\">
                                <span class=\"help-block text-muted small-font\">Code carte</span>
                                <input type=\"text\" class=\"form-control\" placeholder=\"CCV\" />
                            </div>
                            
                        </div>
                        <div class=\"row \">

                            <br><div class=\"col-md-12 pad-adjust\">

                                <input type=\"text\" class=\"form-control\" placeholder=\"Nom sur le carte\" />
                            </div></br>

                            <br><div class=\"col-md-12 pad-adjust\">
                            <!-- <input type=\"text\" name=\"pseudo\" onblur=\"verifPseudo(this)\" class=\"form-control\" placeholder=\"Code promotion\" />-->



                              <form placeholder=\"Code promotion\">
                                <label for=\"promo\">Code promotion</label>
                                <input id=\"promo\" name=\"promo\" pattern=\"ESIEAPARIS\">
                                <button>Valider mon code</button>
                              </form>
                            </div></br>

      
         


                        </div>
                        <div class=\"row\">
                            <div class=\"col-md-12 pad-adjust\">
                                <div class=\"checkbox\">
                                    <label>
                                        <input type=\"checkbox\" checked class=\"text-muted\">Sauvegarder mes informations de paiement. <a href=\"";
        // line 86
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("esiea_platform_faq");
        echo "\">En savoir plus</a>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class=\"row \">
                            <div class=\"col-md-6 col-sm-6 col-xs-6 pad-adjust\">
                                <a href=\"";
        // line 93
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("esiea_platform_delivery");
        echo "\"><input type=\"submit\" class=\"btn btn-danger\" value=\"Retour\" /></a>
                            </div>


                               

                            <div class=\"col-md-6 col-sm-6 col-xs-6 pad-adjust\">
                                <a href=\"";
        // line 100
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("esiea_platform_home");
        echo "\"><input type=\"submit\" onsubmit=\"return verifForm(this)\"\" class=\"btn btn-warning btn-block\" value=\"Confirmer ma livraison\" /></a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
                 
    </div>
</div>
</section>




 ";
        // line 115
        $this->displayBlock('javascripts', $context, $blocks);
    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        echo "ESIEA Plateforme";
    }

    // line 14
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 15
        echo "     ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "c91f9fa_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_c91f9fa_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/c91f9fa_demo_1.css");
            // line 19
            echo "      <link rel=\"stylesheet\" href=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css\">
      <link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css?family=Open+Sans\" >
      <link href=\"http://fonts.googleapis.com/css?family=Open+Sans\" rel=\"stylesheet\" type=\"text/css\">
      <link rel=\"stylesheet\" href=\"";
            // line 22
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\" type=\"text/css\" />
      ";
        } else {
            // asset "c91f9fa"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_c91f9fa") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/c91f9fa.css");
            // line 19
            echo "      <link rel=\"stylesheet\" href=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css\">
      <link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css?family=Open+Sans\" >
      <link href=\"http://fonts.googleapis.com/css?family=Open+Sans\" rel=\"stylesheet\" type=\"text/css\">
      <link rel=\"stylesheet\" href=\"";
            // line 22
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\" type=\"text/css\" />
      ";
        }
        unset($context["asset_url"]);
        // line 24
        echo "      ";
    }

    // line 115
    public function block_javascripts($context, array $blocks = array())
    {
        // line 116
        echo "   <script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js\"></script>
   <script src=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js\"></script>
   <script src=\"";
        // line 118
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/esieaplatform/js/demo.js"), "html", null, true);
        echo "\"></script>
   ";
    }

    public function getTemplateName()
    {
        return "@ESIEAPlatform/Advert/payment.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  198 => 118,  194 => 116,  191 => 115,  187 => 24,  181 => 22,  176 => 19,  169 => 22,  164 => 19,  159 => 15,  156 => 14,  150 => 7,  146 => 115,  128 => 100,  118 => 93,  108 => 86,  45 => 25,  43 => 14,  36 => 10,  30 => 7,  22 => 1,);
    }

    public function getSource()
    {
        return "";
    }
}
