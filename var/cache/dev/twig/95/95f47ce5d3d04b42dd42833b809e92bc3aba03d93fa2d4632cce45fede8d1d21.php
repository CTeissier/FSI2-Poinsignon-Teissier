<?php

/* ESIEAPlatformBundle:Advert:view.html.twig */
class __TwigTemplate_503ccb04598fc966b5581333571e28796e8b45c71c79d86fca96a5491eddfc26 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'esieaplatform_body' => array($this, 'block_esieaplatform_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bec1a3b55a4a5e4428529e69003512f4b6d4c347fad2798078afd891cdcc5e01 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bec1a3b55a4a5e4428529e69003512f4b6d4c347fad2798078afd891cdcc5e01->enter($__internal_bec1a3b55a4a5e4428529e69003512f4b6d4c347fad2798078afd891cdcc5e01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ESIEAPlatformBundle:Advert:view.html.twig"));

        // line 2
        echo "


";
        // line 5
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "c91f9fa_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_c91f9fa_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/css/c91f9fa_demo_1.css");
            // line 7
            echo "
        <link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css?family=Roboto\"/>
        <link rel=\"stylesheet\" href=\"";
            // line 9
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/css\" />
        <link rel=\"stylesheet\" href=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css\">

";
        } else {
            // asset "c91f9fa"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_c91f9fa") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/css/c91f9fa.css");
            // line 7
            echo "
        <link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css?family=Roboto\"/>
        <link rel=\"stylesheet\" href=\"";
            // line 9
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/css\" />
        <link rel=\"stylesheet\" href=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css\">

";
        }
        unset($context["asset_url"]);
        // line 13
        echo "

";
        // line 15
        $this->displayBlock('esieaplatform_body', $context, $blocks);
        
        $__internal_bec1a3b55a4a5e4428529e69003512f4b6d4c347fad2798078afd891cdcc5e01->leave($__internal_bec1a3b55a4a5e4428529e69003512f4b6d4c347fad2798078afd891cdcc5e01_prof);

    }

    public function block_esieaplatform_body($context, array $blocks = array())
    {
        $__internal_66129764f6c113d0c193856206b74809669b64b8f0f3252da43784d2af9cd5cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_66129764f6c113d0c193856206b74809669b64b8f0f3252da43784d2af9cd5cf->enter($__internal_66129764f6c113d0c193856206b74809669b64b8f0f3252da43784d2af9cd5cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "esieaplatform_body"));

        // line 16
        echo "
  <div style=\"float: left; margin-right: 1em;\">
    ";
        // line 19
        echo "    ";
        if ( !(null === $this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "image", array()))) {
            // line 20
            echo "      <img
        src=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute($this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "image", array()), "webPath", array())), "html", null, true);
            echo "\"
        alt=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "image", array()), "alt", array()), "html", null, true);
            echo "\"
        height=\"60\"
      />
    ";
        }
        // line 26
        echo "  </div>

  <h2>";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "title", array()), "html", null, true);
        echo "</h2>
  <i>Par ";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "author", array()), "html", null, true);
        echo ", le ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "date", array()), "d/m/Y"), "html", null, true);
        echo "</i>

  <div class=\"well\" style=\"width:1000px;background:black\">
    ";
        // line 32
        echo nl2br(twig_escape_filter($this->env, $this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "content", array()), "html", null, true));
        echo "
  </div>




  <p>
    <a href=\"";
        // line 39
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("esiea_platform_home");
        echo "\" class=\"btn btn-default\">
      <i class=\"glyphicon glyphicon-chevron-left\"></i>
      Retour à la liste
    </a>
    <a href=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("esiea_platform_edit", array("id" => $this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-default\">
      <i class=\"glyphicon glyphicon-edit\"></i>
      Modifier l'annonce
    </a>
    <a href=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("esiea_platform_delete", array("id" => $this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-danger\">
      <i class=\"glyphicon glyphicon-trash\"></i>
      Supprimer l'annonce
    </a>
  </p>

";
        
        $__internal_66129764f6c113d0c193856206b74809669b64b8f0f3252da43784d2af9cd5cf->leave($__internal_66129764f6c113d0c193856206b74809669b64b8f0f3252da43784d2af9cd5cf_prof);

    }

    public function getTemplateName()
    {
        return "ESIEAPlatformBundle:Advert:view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  134 => 47,  127 => 43,  120 => 39,  110 => 32,  102 => 29,  98 => 28,  94 => 26,  87 => 22,  83 => 21,  80 => 20,  77 => 19,  73 => 16,  61 => 15,  57 => 13,  49 => 9,  45 => 7,  36 => 9,  32 => 7,  28 => 5,  23 => 2,);
    }

    public function getSource()
    {
        return "{# src/ESIEA/PlatformBundle/Resources/view/Advert/view.html.twig #}



{% stylesheets filter=\"cssrewrite, ?scssphp\"
        'bundles/esieaplatform/css/demo.css'%}

        <link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css?family=Roboto\"/>
        <link rel=\"stylesheet\" href=\"{{ asset_url }}\" type=\"text/css\" />
        <link rel=\"stylesheet\" href=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css\">

{% endstylesheets %}


{% block esieaplatform_body %}

  <div style=\"float: left; margin-right: 1em;\">
    {# On vérifie qu'une image soit bien associée à l'article #}
    {% if advert.image is not null %}
      <img
        src=\"{{ asset(advert.image.webPath) }}\"
        alt=\"{{ advert.image.alt }}\"
        height=\"60\"
      />
    {% endif %}
  </div>

  <h2>{{ advert.title }}</h2>
  <i>Par {{ advert.author }}, le {{ advert.date|date('d/m/Y') }}</i>

  <div class=\"well\" style=\"width:1000px;background:black\">
    {{ advert.content | nl2br }}
  </div>




  <p>
    <a href=\"{{ path('esiea_platform_home') }}\" class=\"btn btn-default\">
      <i class=\"glyphicon glyphicon-chevron-left\"></i>
      Retour à la liste
    </a>
    <a href=\"{{ path('esiea_platform_edit', {'id': advert.id}) }}\" class=\"btn btn-default\">
      <i class=\"glyphicon glyphicon-edit\"></i>
      Modifier l'annonce
    </a>
    <a href=\"{{ path('esiea_platform_delete', {'id': advert.id}) }}\" class=\"btn btn-danger\">
      <i class=\"glyphicon glyphicon-trash\"></i>
      Supprimer l'annonce
    </a>
  </p>

{% endblock %}";
    }
}
