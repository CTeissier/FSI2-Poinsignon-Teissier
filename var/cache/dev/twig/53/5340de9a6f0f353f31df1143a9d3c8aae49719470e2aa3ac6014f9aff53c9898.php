<?php

/* ESIEAPlatformBundle:Advert:index.html.twig */
class __TwigTemplate_51ecd44e5bd7f5436a293acbfaeace1768cd6b5cd0039170761d7e1d2607dfe6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("ESIEAPlatformBundle::layout.html.twig", "ESIEAPlatformBundle:Advert:index.html.twig", 2);
        $this->blocks = array(
            'esieaplatform_body' => array($this, 'block_esieaplatform_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "ESIEAPlatformBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_52a308f34484442f900edfff0dabec8b28b6d1849a390b1d636da41c73e1125a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_52a308f34484442f900edfff0dabec8b28b6d1849a390b1d636da41c73e1125a->enter($__internal_52a308f34484442f900edfff0dabec8b28b6d1849a390b1d636da41c73e1125a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ESIEAPlatformBundle:Advert:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_52a308f34484442f900edfff0dabec8b28b6d1849a390b1d636da41c73e1125a->leave($__internal_52a308f34484442f900edfff0dabec8b28b6d1849a390b1d636da41c73e1125a_prof);

    }

    // line 5
    public function block_esieaplatform_body($context, array $blocks = array())
    {
        $__internal_2c0d9708ebdd7a630c51054083898c09df621a99690a003f0ec4cadc831a76cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c0d9708ebdd7a630c51054083898c09df621a99690a003f0ec4cadc831a76cd->enter($__internal_2c0d9708ebdd7a630c51054083898c09df621a99690a003f0ec4cadc831a76cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "esieaplatform_body"));

        // line 6
        echo "

";
        // line 8
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "c91f9fa_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_c91f9fa_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/css/c91f9fa_demo_1.css");
            // line 10
            echo "<link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css?family=Roboto\"/>
<link rel=\"stylesheet\" href=\"";
            // line 11
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/css\" />
";
        } else {
            // asset "c91f9fa"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_c91f9fa") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/css/c91f9fa.css");
            // line 10
            echo "<link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css?family=Roboto\"/>
<link rel=\"stylesheet\" href=\"";
            // line 11
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/css\" />
";
        }
        unset($context["asset_url"]);
        // line 13
        echo "

<section id=\"about\" class=\"container content-section text-center\">
   <div class=\"row\">
      <div class=\"col-lg-8 col-lg-offset-2\">
         <h2>Dernières recettes</h2>
         <ul class=\"intro-text\">
            ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listAdverts"]) ? $context["listAdverts"] : $this->getContext($context, "listAdverts")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["advert"]) {
            // line 21
            echo "            <li>
               <a href=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("esiea_platform_view", array("id" => $this->getAttribute($context["advert"], "id", array()))), "html", null, true);
            echo "\">
               ";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["advert"], "title", array()), "html", null, true);
            echo "
               </a>
               par ";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["advert"], "author", array()), "html", null, true);
            echo ",
               le ";
            // line 26
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["advert"], "date", array()), "d/m/Y"), "html", null, true);
            echo "
            </li>
            ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 29
            echo "            <li>Pas (encore !) d'annonces</li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['advert'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "         </ul>
         <!-- Pagination -->
         <ul class=\"pagination\">
            ";
        // line 34
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["nbPages"]) ? $context["nbPages"] : $this->getContext($context, "nbPages"))));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 35
            echo "            <li";
            if (($context["p"] == (isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")))) {
                echo " class=\"active\"";
            }
            echo ">
            <a href=\"";
            // line 36
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("esiea_platform_home", array("page" => $context["p"])), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["p"], "html", null, true);
            echo "</a>
            </li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "         </ul>
      </div>
   </div>
</section>
";
        
        $__internal_2c0d9708ebdd7a630c51054083898c09df621a99690a003f0ec4cadc831a76cd->leave($__internal_2c0d9708ebdd7a630c51054083898c09df621a99690a003f0ec4cadc831a76cd_prof);

    }

    public function getTemplateName()
    {
        return "ESIEAPlatformBundle:Advert:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  139 => 39,  128 => 36,  121 => 35,  117 => 34,  112 => 31,  105 => 29,  97 => 26,  93 => 25,  88 => 23,  84 => 22,  81 => 21,  76 => 20,  67 => 13,  61 => 11,  58 => 10,  51 => 11,  48 => 10,  44 => 8,  40 => 6,  34 => 5,  11 => 2,);
    }

    public function getSource()
    {
        return "{# src/ESIEA/PlatformBundle/Resources/views/Advert/index.html.twig #}
{% extends \"ESIEAPlatformBundle::layout.html.twig\" %}


{% block esieaplatform_body %}


{% stylesheets filter=\"cssrewrite, ?scssphp\"
'bundles/esieaplatform/css/demo.css'%}
<link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css?family=Roboto\"/>
<link rel=\"stylesheet\" href=\"{{ asset_url }}\" type=\"text/css\" />
{% endstylesheets %}


<section id=\"about\" class=\"container content-section text-center\">
   <div class=\"row\">
      <div class=\"col-lg-8 col-lg-offset-2\">
         <h2>Dernières recettes</h2>
         <ul class=\"intro-text\">
            {% for advert in listAdverts %}
            <li>
               <a href=\"{{ path('esiea_platform_view', {'id': advert.id}) }}\">
               {{ advert.title }}
               </a>
               par {{ advert.author }},
               le {{ advert.date|date('d/m/Y') }}
            </li>
            {% else %}
            <li>Pas (encore !) d'annonces</li>
            {% endfor %}
         </ul>
         <!-- Pagination -->
         <ul class=\"pagination\">
            {% for p in range(1, nbPages) %}
            <li{% if p == page %} class=\"active\"{% endif %}>
            <a href=\"{{ path('esiea_platform_home', {'page': p}) }}\">{{ p }}</a>
            </li>
            {% endfor %}
         </ul>
      </div>
   </div>
</section>
{% endblock %}";
    }
}
