<?php

/* @ESIEAPlatform/Advert/edit.html.twig */
class __TwigTemplate_2c29ab9a636652b7da2cb4d6309b54408db530eb8ff8ce3284470c2a00f89a79 extends Twig_Template
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
        $__internal_3f24eda8df7906d5114187d408534fd8397e06d5901899cd248c0ae9b26ba3cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f24eda8df7906d5114187d408534fd8397e06d5901899cd248c0ae9b26ba3cd->enter($__internal_3f24eda8df7906d5114187d408534fd8397e06d5901899cd248c0ae9b26ba3cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@ESIEAPlatform/Advert/edit.html.twig"));

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
        
        $__internal_3f24eda8df7906d5114187d408534fd8397e06d5901899cd248c0ae9b26ba3cd->leave($__internal_3f24eda8df7906d5114187d408534fd8397e06d5901899cd248c0ae9b26ba3cd_prof);

    }

    // line 11
    public function block_title($context, array $blocks = array())
    {
        $__internal_1294d4ed48cb1de06e7039fce63b98630251e2fdd3b3a4ec5d226c7fdab102bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1294d4ed48cb1de06e7039fce63b98630251e2fdd3b3a4ec5d226c7fdab102bc->enter($__internal_1294d4ed48cb1de06e7039fce63b98630251e2fdd3b3a4ec5d226c7fdab102bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "ESIEA Plateforme";
        
        $__internal_1294d4ed48cb1de06e7039fce63b98630251e2fdd3b3a4ec5d226c7fdab102bc->leave($__internal_1294d4ed48cb1de06e7039fce63b98630251e2fdd3b3a4ec5d226c7fdab102bc_prof);

    }

    // line 70
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_9254aa55bcc28d323d62ebc208067798b3b8a6999ae054498e0b067948878d55 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9254aa55bcc28d323d62ebc208067798b3b8a6999ae054498e0b067948878d55->enter($__internal_9254aa55bcc28d323d62ebc208067798b3b8a6999ae054498e0b067948878d55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_c91f9fa_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/css/c91f9fa_demo_1.css");
            // line 81
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
        // line 84
        echo "      ";
        
        $__internal_9254aa55bcc28d323d62ebc208067798b3b8a6999ae054498e0b067948878d55->leave($__internal_9254aa55bcc28d323d62ebc208067798b3b8a6999ae054498e0b067948878d55_prof);

    }

    // line 87
    public function block_esieaplatform_body($context, array $blocks = array())
    {
        $__internal_f8f82172616423d8fe4e13bc23e2827d723509943bf460553da60b4d583d3fe3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f8f82172616423d8fe4e13bc23e2827d723509943bf460553da60b4d583d3fe3->enter($__internal_f8f82172616423d8fe4e13bc23e2827d723509943bf460553da60b4d583d3fe3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "esieaplatform_body"));

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
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("esiea_platform_view", array("id" => $this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-default\">
      <i class=\"glyphicon glyphicon-chevron-left\"></i>
      Retour à votre recette
    </a>
  </p>

";
        
        $__internal_f8f82172616423d8fe4e13bc23e2827d723509943bf460553da60b4d583d3fe3->leave($__internal_f8f82172616423d8fe4e13bc23e2827d723509943bf460553da60b4d583d3fe3_prof);

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
        return array (  197 => 99,  190 => 95,  181 => 88,  175 => 87,  168 => 84,  152 => 81,  148 => 78,  140 => 72,  138 => 71,  132 => 70,  120 => 11,  113 => 87,  109 => 85,  107 => 70,  86 => 52,  72 => 41,  67 => 39,  36 => 11,  25 => 2,);
    }

    public function getSource()
    {
        return "{# src/ESIEA/PlatformBundle/Resources/views/Advert/edit.html.twig #}

<head>
    
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
  


      <title>{% block title %}ESIEA Plateforme{% endblock %}</title>
 
     
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
                        <a class=\"page-scroll\" href=\"#about\">À propos</a>
                    </li>
                    <li>
                        <a class=\"page-scroll\" href=\"#recette\">Recettes</a>
                    </li>
                     <li>
                        <a class=\"page-scroll\" href=\"{{ path('esiea_platform_faq') }}\">FAQ</a>
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
     


     {% block stylesheets %}
      {# On charge le CSS de bootstrap depuis le site directement #}
      <link rel=\"stylesheet\" href=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css\">
      <link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css?family=Open+Sans\" >

      <link href=\"http://fonts.googleapis.com/css?family=Open+Sans\" rel=\"stylesheet\" type=\"text/css\">


      {% stylesheets filter=\"cssrewrite, ?scssphp\"
      'bundles/esieaplatform/css/demo.css'
      %}
      <link rel=\"stylesheet\" href=\"{{ asset_url }}\" type=\"text/css\" />
      <link href=\"vendor/bootstrap/css/bootstrap.min.css\" rel=\"stylesheet\">
      {% endstylesheets %}
      {% endblock %}
   </head>

{% block esieaplatform_body %}

  


<section id=\"edit\" class=\"container content-section text-center\" >

<h3>Modifier votre recette</h3>
  {{ include(\"ESIEAPlatformBundle:Advert:form.html.twig\") }}
</section>

  <p>
    <a href=\"{{ path('esiea_platform_view', {'id': advert.id}) }}\" class=\"btn btn-default\">
      <i class=\"glyphicon glyphicon-chevron-left\"></i>
      Retour à votre recette
    </a>
  </p>

{% endblock %}";
    }
}
