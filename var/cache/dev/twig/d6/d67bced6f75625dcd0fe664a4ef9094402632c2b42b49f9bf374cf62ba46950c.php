<?php

/* ESIEAPlatformBundle:Advert:form.html.twig */
class __TwigTemplate_62006dd66529bd3a63d83e1695862bab2d4bc234cd9e8f0b416b75fa6b48a6d9 extends Twig_Template
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
        $__internal_c99ddf31a9f1024f12dd0d2de0ae6c066049f0a799257a7b81cae7a1f7bc4c0c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c99ddf31a9f1024f12dd0d2de0ae6c066049f0a799257a7b81cae7a1f7bc4c0c->enter($__internal_c99ddf31a9f1024f12dd0d2de0ae6c066049f0a799257a7b81cae7a1f7bc4c0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ESIEAPlatformBundle:Advert:form.html.twig"));

        // line 2
        echo "<html>

<h3>Formulaire d'annonce</h3>
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
        // line 14
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "c91f9fa_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_c91f9fa_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/css/c91f9fa_demo_1.css");
            // line 16
            echo "   <link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css?family=Roboto\"/>
   <link rel=\"stylesheet\" href=\"";
            // line 17
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/css\" />
   ";
        } else {
            // asset "c91f9fa"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_c91f9fa") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/css/c91f9fa.css");
            // line 16
            echo "   <link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css?family=Roboto\"/>
   <link rel=\"stylesheet\" href=\"";
            // line 17
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/css\" />
   ";
        }
        unset($context["asset_url"]);
        // line 19
        echo "</head>


<body id=\"page-top\" data-spy=\"scroll\" data-target=\".navbar-fixed-top\">
   <div class=\"well\" >
      <section id=\"add\" class=\"container content-section text-center\">
         ";
        // line 25
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("class" => "form-horizontal")));
        echo "
         ";
        // line 27
        echo "         ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
         ";
        // line 29
        echo "         ";
        if ($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "date", array(), "any", true, true)) {
            // line 30
            echo "         ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date", array()), 'row');
            echo "
         ";
        }
        // line 32
        echo "         ";
        // line 33
        echo "         <div class=\"form-group\">
            ";
        // line 35
        echo "            ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "title", array()), 'label', array("label_attr" => array("class" => "col-sm-2 control-label"), "label" => "Titre de l'annonce"));
        echo "
            ";
        // line 37
        echo "            ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "title", array()), 'errors');
        echo "
            <div class=\"col-sm-10\">
               ";
        // line 40
        echo "               ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "title", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
            </div>
         </div>
         ";
        // line 44
        echo "         <div class=\"form-group\"  >
            ";
        // line 45
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "content", array()), 'label', array("label_attr" => array("class" => "col-sm-2 control-label"), "label" => "Contenu de l'annonce"));
        echo "
            ";
        // line 46
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "title", array()), 'errors');
        echo "
            <div class=\"col-sm-10\">
               ";
        // line 48
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "content", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
            </div>
         </div>
         ";
        // line 51
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "author", array()), 'row');
        echo "
         ";
        // line 52
        if ($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "published", array(), "any", true, true)) {
            // line 53
            echo "         ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "published", array()), 'row');
            echo "
         ";
        }
        // line 55
        echo "         ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "image", array()), 'row');
        echo "
         ";
        // line 57
        echo "         ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "save", array()), 'widget', array("attr" => array("class" => "btn btn-primary")));
        echo "
         ";
        // line 61
        echo "         ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
         ";
        // line 65
        echo "         ";
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
      </section>
   </div>
</body>
</html>";
        
        $__internal_c99ddf31a9f1024f12dd0d2de0ae6c066049f0a799257a7b81cae7a1f7bc4c0c->leave($__internal_c99ddf31a9f1024f12dd0d2de0ae6c066049f0a799257a7b81cae7a1f7bc4c0c_prof);

    }

    public function getTemplateName()
    {
        return "ESIEAPlatformBundle:Advert:form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  153 => 65,  148 => 61,  143 => 57,  138 => 55,  132 => 53,  130 => 52,  126 => 51,  120 => 48,  115 => 46,  111 => 45,  108 => 44,  101 => 40,  95 => 37,  90 => 35,  87 => 33,  85 => 32,  79 => 30,  76 => 29,  71 => 27,  67 => 25,  59 => 19,  53 => 17,  50 => 16,  43 => 17,  40 => 16,  36 => 14,  22 => 2,);
    }

    public function getSource()
    {
        return "{# src/ESIEA/PlatformBundle/Resources/views/Advert/form.html.twig #}
<html>

<h3>Formulaire d'annonce</h3>
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
   <div class=\"well\" >
      <section id=\"add\" class=\"container content-section text-center\">
         {{ form_start(form, {'attr': {'class': 'form-horizontal'}}) }}
         {# Les erreurs générales du formulaire. #}
         {{ form_errors(form) }}
         {# Génération du label + error + widget pour un champ. #}
         {% if form.date is defined %}
         {{ form_row(form.date) }}
         {% endif %}
         {# Génération manuelle et éclatée : #}
         <div class=\"form-group\">
            {# Génération du label. #}
            {{ form_label(form.title, \"Titre de l'annonce\", {'label_attr': {'class': 'col-sm-2 control-label'}}) }}
            {# Affichage des erreurs pour ce champ précis. #}
            {{ form_errors(form.title) }}
            <div class=\"col-sm-10\">
               {# Génération de l'input. #}
               {{ form_widget(form.title, {'attr': {'class': 'form-control'}}) }}
            </div>
         </div>
         {# Idem pour un autre champ. #}
         <div class=\"form-group\"  >
            {{ form_label(form.content, \"Contenu de l'annonce\", {'label_attr': {'class': 'col-sm-2 control-label'}}) }}
            {{ form_errors(form.title) }}
            <div class=\"col-sm-10\">
               {{ form_widget(form.content, {'attr': {'class': 'form-control'}}) }}
            </div>
         </div>
         {{ form_row(form.author) }}
         {% if form.published is defined %}
         {{ form_row(form.published) }}
         {% endif %}
         {{ form_row(form.image) }}
         {# Pour le bouton, pas de label ni d'erreur, on affiche juste le widget #}
         {{ form_widget(form.save, {'attr': {'class': 'btn btn-primary'}}) }}
         {# Génération automatique des champs pas encore écrits.
         Dans cet exemple, ce serait le champ CSRF (géré automatiquement par Symfony !)
         et tous les champs cachés (type « hidden »). #}
         {{ form_rest(form) }}
         {# Fermeture de la balise 
         <form>
         du formulaire HTML #}
         {{ form_end(form) }}
      </section>
   </div>
</body>
</html>";
    }
}
