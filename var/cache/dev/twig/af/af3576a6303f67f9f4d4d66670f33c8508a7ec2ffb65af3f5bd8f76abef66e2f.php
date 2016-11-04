<?php

/* ESIEAPlatformBundle:Advert:add.html.twig */
class __TwigTemplate_6f8a1e637c9f079e5cbee6af701a8065011ad8b75ed3662fe1b01d9908863bd8 extends Twig_Template
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
        $__internal_4cc45cb6bf0e69c4a49b14f484709d0aeb162c966b3d5f554fae5b73d9bd478d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4cc45cb6bf0e69c4a49b14f484709d0aeb162c966b3d5f554fae5b73d9bd478d->enter($__internal_4cc45cb6bf0e69c4a49b14f484709d0aeb162c966b3d5f554fae5b73d9bd478d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ESIEAPlatformBundle:Advert:add.html.twig"));

        // line 2
        echo "

<head>
       <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">


      <title>";
        // line 10
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
 
     
      ";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("ESIEAPlatformBundle:Site:header"));
        echo "
     


     ";
        // line 17
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 27
        echo "   </head>
  

";
        // line 30
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_4cc45cb6bf0e69c4a49b14f484709d0aeb162c966b3d5f554fae5b73d9bd478d->leave($__internal_4cc45cb6bf0e69c4a49b14f484709d0aeb162c966b3d5f554fae5b73d9bd478d_prof);

    }

    // line 10
    public function block_title($context, array $blocks = array())
    {
        $__internal_4282f6ab2617986f48c747ae7ef164158c3a33efe4fcbbe1aa7d3b6ed5532797 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4282f6ab2617986f48c747ae7ef164158c3a33efe4fcbbe1aa7d3b6ed5532797->enter($__internal_4282f6ab2617986f48c747ae7ef164158c3a33efe4fcbbe1aa7d3b6ed5532797_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ESIEAPlatformBundle:Advert:add.html.twig"));

        echo "ESIEA Plateforme";
        
        $__internal_4282f6ab2617986f48c747ae7ef164158c3a33efe4fcbbe1aa7d3b6ed5532797->leave($__internal_4282f6ab2617986f48c747ae7ef164158c3a33efe4fcbbe1aa7d3b6ed5532797_prof);

    }

    // line 17
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_386dfd58e5887ebdececdf5695bc13a589f0f0d9575e6f9118344a821166e78a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_386dfd58e5887ebdececdf5695bc13a589f0f0d9575e6f9118344a821166e78a->enter($__internal_386dfd58e5887ebdececdf5695bc13a589f0f0d9575e6f9118344a821166e78a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ESIEAPlatformBundle:Advert:add.html.twig"));

        // line 18
        echo "     ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "c91f9fa_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_c91f9fa_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/css/c91f9fa_demo_1.css");
            // line 21
            echo "      <link rel=\"stylesheet\" href=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css\">
      <link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css?family=Open+Sans\" >
      <link href=\"http://fonts.googleapis.com/css?family=Open+Sans\" rel=\"stylesheet\" type=\"text/css\">
      <link rel=\"stylesheet\" href=\"";
            // line 24
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/css\" />
      ";
        } else {
            // asset "c91f9fa"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_c91f9fa") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/css/c91f9fa.css");
            // line 21
            echo "      <link rel=\"stylesheet\" href=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css\">
      <link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css?family=Open+Sans\" >
      <link href=\"http://fonts.googleapis.com/css?family=Open+Sans\" rel=\"stylesheet\" type=\"text/css\">
      <link rel=\"stylesheet\" href=\"";
            // line 24
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/css\" />
      ";
        }
        unset($context["asset_url"]);
        // line 26
        echo "      ";
        
        $__internal_386dfd58e5887ebdececdf5695bc13a589f0f0d9575e6f9118344a821166e78a->leave($__internal_386dfd58e5887ebdececdf5695bc13a589f0f0d9575e6f9118344a821166e78a_prof);

    }

    // line 30
    public function block_body($context, array $blocks = array())
    {
        $__internal_a860ce6275356f4b1394b84e5d8c2e5daa4daf11ba89b16a356b9d68d6fadaad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a860ce6275356f4b1394b84e5d8c2e5daa4daf11ba89b16a356b9d68d6fadaad->enter($__internal_a860ce6275356f4b1394b84e5d8c2e5daa4daf11ba89b16a356b9d68d6fadaad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ESIEAPlatformBundle:Advert:add.html.twig"));

        // line 31
        echo "<!-- Formulaire d'ajout -->


<section id=\"add\" class=\"container content-section text-center\" >

<h3>Ajouter une recette</h3>   
 ";
        // line 37
        echo twig_include($this->env, $context, "ESIEAPlatformBundle:Advert:form.html.twig");
        echo "

  

</section>
\t
   ";
        // line 43
        $this->displayBlock('javascripts', $context, $blocks);
        // line 48
        echo " 

";
        
        $__internal_a860ce6275356f4b1394b84e5d8c2e5daa4daf11ba89b16a356b9d68d6fadaad->leave($__internal_a860ce6275356f4b1394b84e5d8c2e5daa4daf11ba89b16a356b9d68d6fadaad_prof);

    }

    // line 43
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_1af313105838849cdb1b0f6487fe378e1fe7b318f91011eb527ca2df3bf4a214 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1af313105838849cdb1b0f6487fe378e1fe7b318f91011eb527ca2df3bf4a214->enter($__internal_1af313105838849cdb1b0f6487fe378e1fe7b318f91011eb527ca2df3bf4a214_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ESIEAPlatformBundle:Advert:add.html.twig"));

        // line 45
        echo "<script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js\"></script>
<script src=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js\"></script>
<script src=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/esieaplatform/js/demo.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_1af313105838849cdb1b0f6487fe378e1fe7b318f91011eb527ca2df3bf4a214->leave($__internal_1af313105838849cdb1b0f6487fe378e1fe7b318f91011eb527ca2df3bf4a214_prof);

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
        return array (  160 => 47,  156 => 45,  150 => 43,  141 => 48,  139 => 43,  130 => 37,  122 => 31,  116 => 30,  109 => 26,  103 => 24,  98 => 21,  91 => 24,  86 => 21,  81 => 18,  75 => 17,  63 => 10,  56 => 30,  51 => 27,  49 => 17,  42 => 13,  36 => 10,  26 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# src/ESIEA/PlatformBundle/Resources/views/Advert/add.html.twig #}


<head>
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
  

{% block body %}
<!-- Formulaire d'ajout -->


<section id=\"add\" class=\"container content-section text-center\" >

<h3>Ajouter une recette</h3>   
 {{ include(\"ESIEAPlatformBundle:Advert:form.html.twig\") }}

  

</section>
\t
   {% block javascripts %}
{# Ajoutez ces lignes JavaScript si vous comptez vous servir des fonctionnalités du bootstrap Twitter #}
<script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js\"></script>
<script src=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js\"></script>
<script src=\"{{ asset('bundles/esieaplatform/js/demo.js') }}\"></script>
{% endblock %} 

{% endblock %}", "ESIEAPlatformBundle:Advert:add.html.twig", "C:\\wamp64\\www\\Symfony\\src\\ESIEA\\PlatformBundle/Resources/views/Advert/add.html.twig");
    }
}
