<?php

/* @ESIEAPlatform/Advert/delivery.html.twig */
class __TwigTemplate_b9c11ddee89a932960719078d95165bc0d292eec5ab256f215a914485d998ba6 extends Twig_Template
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









<section id=\"delivery\" class=\"container content-section text-center\" >
<div class=\"container\">
    
    <div class=\"row\">
   
            <div class=\"credit-card-div\">
                <div class=\"panel panel-default\">
                    <div class=\"panel-heading\">

                        <div class=\"row\">
                            <div class=\"col-md-12 col-sm-12 col-xs-12\">
                                

                               <form class=\"form-horizontal\">
            <fieldset>
                <!-- Address form -->
                <div class=\"col-md-12 col-sm-12 col-xs-12\">
         
                <h2>Coordonnées de livraison</h2>
         
                <!-- full-name input-->
                <div class=\"control-group\">
                    <label class=\"control-label\">Nom complet</label>
                    <div class=\"controls\">
                        <input id=\"full-name\" name=\"full-name\" type=\"text\" placeholder=\"NOM Prénom\"
                        class=\"input-xlarge\">
                        <p class=\"help-block\"></p>
                    </div>
                </div>
                <!-- address-line1 input-->
                <div class=\"control-group\">
                    <label class=\"control-label\">Adresse 1</label>
                    <div class=\"controls\">
                        <input id=\"address-line1\" name=\"address-line1\" type=\"text\" placeholder=\"Votre adresse\"
                        class=\"input-xlarge\">
                        
                    </div>
                </div>
                <!-- address-line2 input-->
                <div class=\"control-group\">
                    <label class=\"control-label\">Adresse 2</label>
                    <div class=\"controls\">
                        <input id=\"address-line2\" name=\"address-line2\" type=\"text\" placeholder=\"Appartement, Étage\"
                        class=\"input-xlarge\">
                        </div>
                </div>
                <!-- city input-->
                <div class=\"control-group\">
                    <label class=\"control-label\">Ville</label>
                    <div class=\"controls\">
                        <input id=\"city\" name=\"city\" type=\"text\" placeholder=\"Votre ville\" class=\"input-xlarge\">
                        <p class=\"help-block\"></p>
                    </div>
                </div>
                
                <!-- postal-code input-->
                <div class=\"control-group\">
                    <label class=\"control-label\">Code postal</label>
                    <div class=\"controls\">
                        <input id=\"postal-code\" name=\"postal-code\" type=\"text\" placeholder=\"ZIP\"
                        class=\"input-xlarge\">
                        <p class=\"help-block\"></p>
                    </div>
                </div>
                <!-- country select -->
                
            </fieldset>
        </form>
                                
                            </div>
                        </div>
                        <div class=\"row \">
                            <div class=\"col-md-6 col-sm-6 col-xs-6 pad-adjust\">
                                <a href=\"";
        // line 108
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("esiea_platform_home");
        echo "\"><input type=\"submit\" class=\"btn btn-danger\" value=\"Retour\" /></a>
                            </div>

                                

                            <div class=\"col-md-6 col-sm-6 col-xs-6 pad-adjust\">
                                <a href=\"";
        // line 114
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("esiea_platform_payment");
        echo "\"><input type=\"submit\" class=\"btn btn-warning btn-block\" value=\"Information de paiement\" /></a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
                 
    </div>
</div>
</section>




 ";
        // line 129
        $this->displayBlock('javascripts', $context, $blocks);
        // line 134
        echo "






<section id=\"add\" class=\"container content-section text-center\" >
<div class=\"container\">
    <div class=\"row\">
      
        </div>
    </div>
</div>
</section>";
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

    // line 129
    public function block_javascripts($context, array $blocks = array())
    {
        // line 130
        echo "   <script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js\"></script>
   <script src=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js\"></script>
   <script src=\"";
        // line 132
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/esieaplatform/js/demo.js"), "html", null, true);
        echo "\"></script>
   ";
    }

    public function getTemplateName()
    {
        return "@ESIEAPlatform/Advert/delivery.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  225 => 132,  221 => 130,  218 => 129,  214 => 24,  208 => 22,  203 => 19,  196 => 22,  191 => 19,  186 => 15,  183 => 14,  177 => 7,  159 => 134,  157 => 129,  139 => 114,  130 => 108,  45 => 25,  43 => 14,  36 => 10,  30 => 7,  22 => 1,);
    }

    public function getSource()
    {
        return "";
    }
}
