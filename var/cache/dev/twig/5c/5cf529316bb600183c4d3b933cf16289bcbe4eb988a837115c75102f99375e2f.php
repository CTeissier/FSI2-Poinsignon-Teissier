<?php

/* ESIEAPlatformBundle:Advert:index.html.twig */
class __TwigTemplate_2f9c10e76dad2aefedeb7fb470fe62a4ab5883cc7d800cc6cb0b1a4a1cf0162e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 4
        $this->parent = $this->loadTemplate("ESIEAPlatformBundle::layout.html.twig", "ESIEAPlatformBundle:Advert:index.html.twig", 4);
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
        $__internal_314570f261a8ff72b5690601c90fe0a4023957f9239d42099061c4c84b6c1e4b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_314570f261a8ff72b5690601c90fe0a4023957f9239d42099061c4c84b6c1e4b->enter($__internal_314570f261a8ff72b5690601c90fe0a4023957f9239d42099061c4c84b6c1e4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ESIEAPlatformBundle:Advert:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_314570f261a8ff72b5690601c90fe0a4023957f9239d42099061c4c84b6c1e4b->leave($__internal_314570f261a8ff72b5690601c90fe0a4023957f9239d42099061c4c84b6c1e4b_prof);

    }

    // line 7
    public function block_esieaplatform_body($context, array $blocks = array())
    {
        $__internal_62781a4ab85ccecdfcc59caa4330a3d81b24cc59e544a06aaf6e647c0c4e7788 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_62781a4ab85ccecdfcc59caa4330a3d81b24cc59e544a06aaf6e647c0c4e7788->enter($__internal_62781a4ab85ccecdfcc59caa4330a3d81b24cc59e544a06aaf6e647c0c4e7788_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ESIEAPlatformBundle:Advert:index.html.twig"));

        // line 8
        echo "<!-- Le menu et pagination -->

";
        // line 10
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "c91f9fa_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_c91f9fa_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/css/c91f9fa_demo_1.css");
            // line 12
            echo "<link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css?family=Roboto\"/>
<link rel=\"stylesheet\" href=\"";
            // line 13
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/css\" />
";
        } else {
            // asset "c91f9fa"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_c91f9fa") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/css/c91f9fa.css");
            // line 12
            echo "<link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css?family=Roboto\"/>
<link rel=\"stylesheet\" href=\"";
            // line 13
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/css\" />
";
        }
        unset($context["asset_url"]);
        // line 15
        echo "

<section id=\"about\" class=\"container content-section text-center\">
   <div class=\"row\">
      <div class=\"col-lg-8 col-lg-offset-2\">
         <h2>Dernières recettes</h2>
         <ul class=\"intro-text\">
            ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listAdverts"]) ? $context["listAdverts"] : $this->getContext($context, "listAdverts")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["advert"]) {
            // line 23
            echo "            <li>
               <a href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("esiea_platform_view", array("id" => $this->getAttribute($context["advert"], "id", array()))), "html", null, true);
            echo "\">
               ";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["advert"], "title", array()), "html", null, true);
            echo "
               </a>
               par ";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["advert"], "author", array()), "html", null, true);
            echo ",
               le ";
            // line 28
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["advert"], "date", array()), "d/m/Y"), "html", null, true);
            echo "
            </li>
            ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 31
            echo "            <li>Pas (encore !) d'annonces</li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['advert'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "         </ul>
         <!-- Pagination -->
         <ul class=\"pagination\">
            ";
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["nbPages"]) ? $context["nbPages"] : $this->getContext($context, "nbPages"))));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 37
            echo "            <li";
            if (($context["p"] == (isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")))) {
                echo " class=\"active\"";
            }
            echo ">
            <a href=\"";
            // line 38
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
        // line 41
        echo "         </ul>
      </div>
   </div>
</section>
";
        
        $__internal_62781a4ab85ccecdfcc59caa4330a3d81b24cc59e544a06aaf6e647c0c4e7788->leave($__internal_62781a4ab85ccecdfcc59caa4330a3d81b24cc59e544a06aaf6e647c0c4e7788_prof);

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
        return array (  139 => 41,  128 => 38,  121 => 37,  117 => 36,  112 => 33,  105 => 31,  97 => 28,  93 => 27,  88 => 25,  84 => 24,  81 => 23,  76 => 22,  67 => 15,  61 => 13,  58 => 12,  51 => 13,  48 => 12,  44 => 10,  40 => 8,  34 => 7,  11 => 4,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# src/ESIEA/PlatformBundle/Resources/views/Advert/index.html.twig #}


{% extends \"ESIEAPlatformBundle::layout.html.twig\" %}


{% block esieaplatform_body %}
<!-- Le menu et pagination -->

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
{% endblock %}", "ESIEAPlatformBundle:Advert:index.html.twig", "C:\\wamp64\\www\\Symfony\\src\\ESIEA\\PlatformBundle/Resources/views/Advert/index.html.twig");
    }
}
