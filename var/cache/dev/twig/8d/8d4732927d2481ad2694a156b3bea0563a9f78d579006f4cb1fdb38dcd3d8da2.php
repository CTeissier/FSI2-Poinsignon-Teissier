<?php

/* ESIEAPlatformBundle:Advert:delivery.html.twig */
class __TwigTemplate_01ab8ca02605bc87a74c16c4a2a67e765fab96b6d41e4c17836395d06fe6766e extends Twig_Template
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
        $__internal_9dc1a9c308b8e4b20b586d707de85243356d6b0677bc8af871b9d5c0c383b1a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9dc1a9c308b8e4b20b586d707de85243356d6b0677bc8af871b9d5c0c383b1a5->enter($__internal_9dc1a9c308b8e4b20b586d707de85243356d6b0677bc8af871b9d5c0c383b1a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ESIEAPlatformBundle:Advert:delivery.html.twig"));

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
        
        $__internal_9dc1a9c308b8e4b20b586d707de85243356d6b0677bc8af871b9d5c0c383b1a5->leave($__internal_9dc1a9c308b8e4b20b586d707de85243356d6b0677bc8af871b9d5c0c383b1a5_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_b59d55e9e504069d4bbc19ba61c18d47b1189551183ddc78f268d2ccf24d2d32 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b59d55e9e504069d4bbc19ba61c18d47b1189551183ddc78f268d2ccf24d2d32->enter($__internal_b59d55e9e504069d4bbc19ba61c18d47b1189551183ddc78f268d2ccf24d2d32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "ESIEA Plateforme";
        
        $__internal_b59d55e9e504069d4bbc19ba61c18d47b1189551183ddc78f268d2ccf24d2d32->leave($__internal_b59d55e9e504069d4bbc19ba61c18d47b1189551183ddc78f268d2ccf24d2d32_prof);

    }

    // line 14
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_99bd1c8d9d0b5763ce5faf2645928c7c806385e64f6ac897dfa48588f032e00a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_99bd1c8d9d0b5763ce5faf2645928c7c806385e64f6ac897dfa48588f032e00a->enter($__internal_99bd1c8d9d0b5763ce5faf2645928c7c806385e64f6ac897dfa48588f032e00a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 15
        echo "     ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "c91f9fa_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_c91f9fa_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/css/c91f9fa_demo_1.css");
            // line 19
            echo "      <link rel=\"stylesheet\" href=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css\">
      <link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css?family=Open+Sans\" >
      <link href=\"http://fonts.googleapis.com/css?family=Open+Sans\" rel=\"stylesheet\" type=\"text/css\">
      <link rel=\"stylesheet\" href=\"";
            // line 22
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/css\" />
      ";
        } else {
            // asset "c91f9fa"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_c91f9fa") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/css/c91f9fa.css");
            // line 19
            echo "      <link rel=\"stylesheet\" href=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css\">
      <link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css?family=Open+Sans\" >
      <link href=\"http://fonts.googleapis.com/css?family=Open+Sans\" rel=\"stylesheet\" type=\"text/css\">
      <link rel=\"stylesheet\" href=\"";
            // line 22
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/css\" />
      ";
        }
        unset($context["asset_url"]);
        // line 24
        echo "      ";
        
        $__internal_99bd1c8d9d0b5763ce5faf2645928c7c806385e64f6ac897dfa48588f032e00a->leave($__internal_99bd1c8d9d0b5763ce5faf2645928c7c806385e64f6ac897dfa48588f032e00a_prof);

    }

    // line 129
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_7970a47ecc2eba298e81d38a5d1edd42930d399b861134e85e033d1ace1ff979 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7970a47ecc2eba298e81d38a5d1edd42930d399b861134e85e033d1ace1ff979->enter($__internal_7970a47ecc2eba298e81d38a5d1edd42930d399b861134e85e033d1ace1ff979_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 130
        echo "   <script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js\"></script>
   <script src=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js\"></script>
   <script src=\"";
        // line 132
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/esieaplatform/js/demo.js"), "html", null, true);
        echo "\"></script>
   ";
        
        $__internal_7970a47ecc2eba298e81d38a5d1edd42930d399b861134e85e033d1ace1ff979->leave($__internal_7970a47ecc2eba298e81d38a5d1edd42930d399b861134e85e033d1ace1ff979_prof);

    }

    public function getTemplateName()
    {
        return "ESIEAPlatformBundle:Advert:delivery.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  246 => 132,  242 => 130,  236 => 129,  229 => 24,  223 => 22,  218 => 19,  211 => 22,  206 => 19,  201 => 15,  195 => 14,  183 => 7,  162 => 134,  160 => 129,  142 => 114,  133 => 108,  48 => 25,  46 => 14,  39 => 10,  33 => 7,  25 => 1,);
    }

    public function getSource()
    {
        return "<head>
       <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">


      <title>{% block title %}ESIEA Plateforme{% endblock %}</title>
 
     
      {{ render(controller('ESIEAPlatformBundle:Site:header')) }}
     


     {% block stylesheets %}
     {% stylesheets filter=\"cssrewrite, ?scssphp\"
      'bundles/esieaplatform/css/demo.css'
      
      %}
      <link rel=\"stylesheet\" href=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css\">
      <link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css?family=Open+Sans\" >
      <link href=\"http://fonts.googleapis.com/css?family=Open+Sans\" rel=\"stylesheet\" type=\"text/css\">
      <link rel=\"stylesheet\" href=\"{{ asset_url }}\" type=\"text/css\" />
      {% endstylesheets %}
      {% endblock %}
   </head>









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
                                <a href=\"{{ path('esiea_platform_home') }}\"><input type=\"submit\" class=\"btn btn-danger\" value=\"Retour\" /></a>
                            </div>

                                

                            <div class=\"col-md-6 col-sm-6 col-xs-6 pad-adjust\">
                                <a href=\"{{ path('esiea_platform_payment') }}\"><input type=\"submit\" class=\"btn btn-warning btn-block\" value=\"Information de paiement\" /></a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
                 
    </div>
</div>
</section>




 {% block javascripts %}
   <script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js\"></script>
   <script src=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js\"></script>
   <script src=\"{{ asset('bundles/esieaplatform/js/demo.js') }}\"></script>
   {% endblock %}







<section id=\"add\" class=\"container content-section text-center\" >
<div class=\"container\">
    <div class=\"row\">
      
        </div>
    </div>
</div>
</section>";
    }
}
