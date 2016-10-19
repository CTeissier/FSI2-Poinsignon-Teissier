<?php

/* ESIEAPlatformBundle:Advert:add.html.twig */
class __TwigTemplate_4f85ab68c1ec969ca666eb18ee44730a32cd6548ddbd1498fa0cb772e0f4f2c4 extends Twig_Template
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
        $__internal_0e712407e6354379c730c329cceea68f9bf8be58ab8b46918f50bc682291a3de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e712407e6354379c730c329cceea68f9bf8be58ab8b46918f50bc682291a3de->enter($__internal_0e712407e6354379c730c329cceea68f9bf8be58ab8b46918f50bc682291a3de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ESIEAPlatformBundle:Advert:add.html.twig"));

        // line 2
        echo "
   <head>
       <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">


      <title>";
        // line 11
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
 
     
      ";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("ESIEAPlatformBundle:Site:header"));
        echo "
     


     ";
        // line 18
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 29
        echo "   </head>

";
        // line 31
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_0e712407e6354379c730c329cceea68f9bf8be58ab8b46918f50bc682291a3de->leave($__internal_0e712407e6354379c730c329cceea68f9bf8be58ab8b46918f50bc682291a3de_prof);

    }

    // line 11
    public function block_title($context, array $blocks = array())
    {
        $__internal_b5a5cb3649f2f10e5301f3b562f9ee904ee99da24e2b217e6d3c1af7ea3adddb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b5a5cb3649f2f10e5301f3b562f9ee904ee99da24e2b217e6d3c1af7ea3adddb->enter($__internal_b5a5cb3649f2f10e5301f3b562f9ee904ee99da24e2b217e6d3c1af7ea3adddb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "ESIEA Plateforme";
        
        $__internal_b5a5cb3649f2f10e5301f3b562f9ee904ee99da24e2b217e6d3c1af7ea3adddb->leave($__internal_b5a5cb3649f2f10e5301f3b562f9ee904ee99da24e2b217e6d3c1af7ea3adddb_prof);

    }

    // line 18
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_b5dc7b785d64f7d72f4dd082c2ff52543571c7da9a25423d634349497ce8102a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b5dc7b785d64f7d72f4dd082c2ff52543571c7da9a25423d634349497ce8102a->enter($__internal_b5dc7b785d64f7d72f4dd082c2ff52543571c7da9a25423d634349497ce8102a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 19
        echo "      ";
        // line 20
        echo "      <link rel=\"stylesheet\" href=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css\">
      <link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css?family=Roboto\" >
      ";
        // line 22
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "c91f9fa_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_c91f9fa_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/css/c91f9fa_demo_1.css");
            // line 25
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
        // line 28
        echo "      ";
        
        $__internal_b5dc7b785d64f7d72f4dd082c2ff52543571c7da9a25423d634349497ce8102a->leave($__internal_b5dc7b785d64f7d72f4dd082c2ff52543571c7da9a25423d634349497ce8102a_prof);

    }

    // line 31
    public function block_body($context, array $blocks = array())
    {
        $__internal_35dab376bf363de5663390798fef21cd719b38e521a6479b565f1a8f180a95ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_35dab376bf363de5663390798fef21cd719b38e521a6479b565f1a8f180a95ee->enter($__internal_35dab376bf363de5663390798fef21cd719b38e521a6479b565f1a8f180a95ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 32
        echo "<section id=\"add\" class=\"container content-section text-center\" bgcolor=\"#FF0000\">
   <h2>Ajouter une annonce</h2>
   


";
        // line 37
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "c91f9fa_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_c91f9fa_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/css/c91f9fa_demo_1.css");
            // line 39
            echo "
        <link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css?family=Roboto\"/>
        <link rel=\"stylesheet\" href=\"";
            // line 41
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/css\" />
        <link rel=\"stylesheet\" href=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css\">

";
        } else {
            // asset "c91f9fa"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_c91f9fa") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/css/c91f9fa.css");
            // line 39
            echo "
        <link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css?family=Roboto\"/>
        <link rel=\"stylesheet\" href=\"";
            // line 41
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/css\" />
        <link rel=\"stylesheet\" href=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css\">

";
        }
        unset($context["asset_url"]);
        // line 45
        echo "



   <div class=\"well\" >
      ";
        // line 50
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("class" => "form-horizontal")));
        echo "
      ";
        // line 52
        echo "      ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
      ";
        // line 54
        echo "      ";
        if ($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "date", array(), "any", true, true)) {
            // line 55
            echo "      ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date", array()), 'row');
            echo "
      ";
        }
        // line 57
        echo "      ";
        // line 58
        echo "      <div class=\"form-group\">
         ";
        // line 60
        echo "         ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "title", array()), 'label', array("label_attr" => array("class" => "col-sm-2 control-label"), "label" => "Titre de l'annonce"));
        echo "
         ";
        // line 62
        echo "         ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "title", array()), 'errors');
        echo "
         <div class=\"col-sm-10\">
            ";
        // line 65
        echo "            ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "title", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
         </div>
      </div>
      ";
        // line 69
        echo "      <div class=\"form-group\"  >
         ";
        // line 70
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "content", array()), 'label', array("label_attr" => array("class" => "col-sm-2 control-label"), "label" => "Contenu de l'annonce"));
        echo "
         ";
        // line 71
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "title", array()), 'errors');
        echo "
         <div class=\"col-sm-10\">
            ";
        // line 73
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "content", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
         </div>
      </div>
      ";
        // line 76
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "author", array()), 'row');
        echo "
      ";
        // line 77
        if ($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "published", array(), "any", true, true)) {
            // line 78
            echo "      ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "published", array()), 'row');
            echo "
      ";
        }
        // line 80
        echo "      ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "image", array()), 'row');
        echo "
      ";
        // line 82
        echo "      ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "save", array()), 'widget', array("attr" => array("class" => "btn btn-primary")));
        echo "
      ";
        // line 86
        echo "      ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
      ";
        // line 90
        echo "      ";
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
   </div>
   <p>
      Attention : cette annonce sera ajoutée directement
      sur la page d'accueil après validation du formulaire.
   </p>
</section>

";
        // line 98
        $this->displayBlock('javascripts', $context, $blocks);
        // line 104
        echo "
";
        
        $__internal_35dab376bf363de5663390798fef21cd719b38e521a6479b565f1a8f180a95ee->leave($__internal_35dab376bf363de5663390798fef21cd719b38e521a6479b565f1a8f180a95ee_prof);

    }

    // line 98
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_7d02d6b36580a80da74950b1d3e5067151ee7986b05f97a0314ba0ddcf3d5572 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d02d6b36580a80da74950b1d3e5067151ee7986b05f97a0314ba0ddcf3d5572->enter($__internal_7d02d6b36580a80da74950b1d3e5067151ee7986b05f97a0314ba0ddcf3d5572_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 100
        echo "<script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js\"></script>
<script src=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js\"></script>
<script src=\"";
        // line 102
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/esieaplatform/js/demo.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_7d02d6b36580a80da74950b1d3e5067151ee7986b05f97a0314ba0ddcf3d5572->leave($__internal_7d02d6b36580a80da74950b1d3e5067151ee7986b05f97a0314ba0ddcf3d5572_prof);

    }

    public function getTemplateName()
    {
        return "ESIEAPlatformBundle:Advert:add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  281 => 102,  277 => 100,  271 => 98,  263 => 104,  261 => 98,  249 => 90,  244 => 86,  239 => 82,  234 => 80,  228 => 78,  226 => 77,  222 => 76,  216 => 73,  211 => 71,  207 => 70,  204 => 69,  197 => 65,  191 => 62,  186 => 60,  183 => 58,  181 => 57,  175 => 55,  172 => 54,  167 => 52,  163 => 50,  156 => 45,  148 => 41,  144 => 39,  135 => 41,  131 => 39,  127 => 37,  120 => 32,  114 => 31,  107 => 28,  91 => 25,  87 => 22,  83 => 20,  81 => 19,  75 => 18,  63 => 11,  56 => 31,  52 => 29,  50 => 18,  43 => 14,  37 => 11,  26 => 2,);
    }

    public function getSource()
    {
        return "{# src/ESIEA/PlatformBundle/Resources/views/Advert/add.html.twig #}

   <head>
       <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">


      <title>{% block title %}ESIEA Plateforme{% endblock %}</title>
 
     
      {{ render(controller('ESIEAPlatformBundle:Site:header')) }}
     


     {% block stylesheets %}
      {# On charge le CSS de bootstrap depuis le site directement #}
      <link rel=\"stylesheet\" href=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css\">
      <link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css?family=Roboto\" >
      {% stylesheets filter=\"cssrewrite, ?scssphp\"
      'bundles/esieaplatform/css/demo.css'
      %}
      <link rel=\"stylesheet\" href=\"{{ asset_url }}\" type=\"text/css\" />
      <link href=\"vendor/bootstrap/css/bootstrap.min.css\" rel=\"stylesheet\">
      {% endstylesheets %}
      {% endblock %}
   </head>

{% block body %}
<section id=\"add\" class=\"container content-section text-center\" bgcolor=\"#FF0000\">
   <h2>Ajouter une annonce</h2>
   


{% stylesheets filter=\"cssrewrite, ?scssphp\"
        'bundles/esieaplatform/css/demo.css'%}

        <link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css?family=Roboto\"/>
        <link rel=\"stylesheet\" href=\"{{ asset_url }}\" type=\"text/css\" />
        <link rel=\"stylesheet\" href=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css\">

{% endstylesheets %}




   <div class=\"well\" >
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
   </div>
   <p>
      Attention : cette annonce sera ajoutée directement
      sur la page d'accueil après validation du formulaire.
   </p>
</section>

{% block javascripts %}
{# Ajoutez ces lignes JavaScript si vous comptez vous servir des fonctionnalités du bootstrap Twitter #}
<script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js\"></script>
<script src=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js\"></script>
<script src=\"{{ asset('bundles/esieaplatform/js/demo.js') }}\"></script>
{% endblock %}

{% endblock %}";
    }
}
