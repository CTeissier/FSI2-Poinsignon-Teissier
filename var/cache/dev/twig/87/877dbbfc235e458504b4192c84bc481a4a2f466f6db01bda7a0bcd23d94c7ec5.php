<?php

/* @ESIEAPlatform/Advert/payment.html.twig */
class __TwigTemplate_0dd28aaf893571805262b3260f94e6d35b090be3a367729280d3418aff5b8218 extends Twig_Template
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
        $__internal_feb398d5e3406c5cf2876fb5c457afebcbb913e5d405c6b054ed055488c99370 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_feb398d5e3406c5cf2876fb5c457afebcbb913e5d405c6b054ed055488c99370->enter($__internal_feb398d5e3406c5cf2876fb5c457afebcbb913e5d405c6b054ed055488c99370_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@ESIEAPlatform/Advert/payment.html.twig"));

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
        
        $__internal_feb398d5e3406c5cf2876fb5c457afebcbb913e5d405c6b054ed055488c99370->leave($__internal_feb398d5e3406c5cf2876fb5c457afebcbb913e5d405c6b054ed055488c99370_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_6cb3710b1d7e62fa21c78258e6fdde007a84c23048e9321e47136c744eaabf1a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6cb3710b1d7e62fa21c78258e6fdde007a84c23048e9321e47136c744eaabf1a->enter($__internal_6cb3710b1d7e62fa21c78258e6fdde007a84c23048e9321e47136c744eaabf1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "ESIEA Plateforme";
        
        $__internal_6cb3710b1d7e62fa21c78258e6fdde007a84c23048e9321e47136c744eaabf1a->leave($__internal_6cb3710b1d7e62fa21c78258e6fdde007a84c23048e9321e47136c744eaabf1a_prof);

    }

    // line 14
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_88bdca35d51ffeb3e01bd1c0e2c6a98b85bf4eadc23487d196b0c3884e4dcfb7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_88bdca35d51ffeb3e01bd1c0e2c6a98b85bf4eadc23487d196b0c3884e4dcfb7->enter($__internal_88bdca35d51ffeb3e01bd1c0e2c6a98b85bf4eadc23487d196b0c3884e4dcfb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_88bdca35d51ffeb3e01bd1c0e2c6a98b85bf4eadc23487d196b0c3884e4dcfb7->leave($__internal_88bdca35d51ffeb3e01bd1c0e2c6a98b85bf4eadc23487d196b0c3884e4dcfb7_prof);

    }

    // line 115
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_e5dc725aa4b99aa53bd7b9e0ff547f437750bf213ebbd999e7927271aab418df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e5dc725aa4b99aa53bd7b9e0ff547f437750bf213ebbd999e7927271aab418df->enter($__internal_e5dc725aa4b99aa53bd7b9e0ff547f437750bf213ebbd999e7927271aab418df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 116
        echo "   <script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js\"></script>
   <script src=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js\"></script>
   <script src=\"";
        // line 118
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/esieaplatform/js/demo.js"), "html", null, true);
        echo "\"></script>
   ";
        
        $__internal_e5dc725aa4b99aa53bd7b9e0ff547f437750bf213ebbd999e7927271aab418df->leave($__internal_e5dc725aa4b99aa53bd7b9e0ff547f437750bf213ebbd999e7927271aab418df_prof);

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
        return array (  219 => 118,  215 => 116,  209 => 115,  202 => 24,  196 => 22,  191 => 19,  184 => 22,  179 => 19,  174 => 15,  168 => 14,  156 => 7,  149 => 115,  131 => 100,  121 => 93,  111 => 86,  48 => 25,  46 => 14,  39 => 10,  33 => 7,  25 => 1,);
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
                                        <input type=\"checkbox\" checked class=\"text-muted\">Sauvegarder mes informations de paiement. <a href=\"{{ path('esiea_platform_faq') }}\">En savoir plus</a>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class=\"row \">
                            <div class=\"col-md-6 col-sm-6 col-xs-6 pad-adjust\">
                                <a href=\"{{ path('esiea_platform_delivery' ) }}\"><input type=\"submit\" class=\"btn btn-danger\" value=\"Retour\" /></a>
                            </div>


                               

                            <div class=\"col-md-6 col-sm-6 col-xs-6 pad-adjust\">
                                <a href=\"{{ path('esiea_platform_home') }}\"><input type=\"submit\" onsubmit=\"return verifForm(this)\"\" class=\"btn btn-warning btn-block\" value=\"Confirmer ma livraison\" /></a>
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
   {% endblock %}";
    }
}
