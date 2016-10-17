<?php

/* ESIEAPlatformBundle:Advert:menu.html.twig */
class __TwigTemplate_b9c7c5311513e04be544629b8c025fbbf0eada9ad61fb9dc349caec4d852dabd extends Twig_Template
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
        $__internal_0c18b4e82720efb6e9282fc2f5c6073ded2f3dc531d318f945682649ebb0150c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c18b4e82720efb6e9282fc2f5c6073ded2f3dc531d318f945682649ebb0150c->enter($__internal_0c18b4e82720efb6e9282fc2f5c6073ded2f3dc531d318f945682649ebb0150c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ESIEAPlatformBundle:Advert:menu.html.twig"));

        // line 2
        echo "
";
        // line 5
        echo "
<ul class=\"nav nav-pills nav-stacked\">
  ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listAdverts"]) ? $context["listAdverts"] : $this->getContext($context, "listAdverts")));
        foreach ($context['_seq'] as $context["_key"] => $context["advert"]) {
            // line 8
            echo "    <li>
      <a href=\"";
            // line 9
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("esiea_platform_view", array("id" => $this->getAttribute($context["advert"], "id", array()))), "html", null, true);
            echo "\">
        ";
            // line 10
            echo twig_escape_filter($this->env, $this->getAttribute($context["advert"], "title", array()), "html", null, true);
            echo "
      </a>
    </li>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['advert'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "</ul>";
        
        $__internal_0c18b4e82720efb6e9282fc2f5c6073ded2f3dc531d318f945682649ebb0150c->leave($__internal_0c18b4e82720efb6e9282fc2f5c6073ded2f3dc531d318f945682649ebb0150c_prof);

    }

    public function getTemplateName()
    {
        return "ESIEAPlatformBundle:Advert:menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 14,  40 => 10,  36 => 9,  33 => 8,  29 => 7,  25 => 5,  22 => 2,);
    }

    public function getSource()
    {
        return "{# src/ESIEA/PlatformBundle/Resources/views/Advert/menu.html.twig #}

{# Ce template n'hérite de personne,
   tout comme le template inclus avec {{ include() }}. #}

<ul class=\"nav nav-pills nav-stacked\">
  {% for advert in listAdverts %}
    <li>
      <a href=\"{{ path('esiea_platform_view', {'id': advert.id}) }}\">
        {{ advert.title }}
      </a>
    </li>
  {% endfor %}
</ul>";
    }
}
