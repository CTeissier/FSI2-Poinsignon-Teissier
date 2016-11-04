<?php

/* ESIEAPlatformBundle::layout.html.twig */
class __TwigTemplate_e783123f78cd20732eea98209bc479692dc6eff0f769cd18a2fa1312965fbd52 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("ESIEACoreBundle::layout.html.twig", "ESIEAPlatformBundle::layout.html.twig", 3);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'esieaplatform_body' => array($this, 'block_esieaplatform_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "ESIEACoreBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_64b3e8290e9bcfc6b04b00b8279559932c85b4394850b1126fbfbbf51241a248 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_64b3e8290e9bcfc6b04b00b8279559932c85b4394850b1126fbfbbf51241a248->enter($__internal_64b3e8290e9bcfc6b04b00b8279559932c85b4394850b1126fbfbbf51241a248_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ESIEAPlatformBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_64b3e8290e9bcfc6b04b00b8279559932c85b4394850b1126fbfbbf51241a248->leave($__internal_64b3e8290e9bcfc6b04b00b8279559932c85b4394850b1126fbfbbf51241a248_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_bee6077acb3d03006a2347940efaece259199e42b53f5120629751dfeb99dbc5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bee6077acb3d03006a2347940efaece259199e42b53f5120629751dfeb99dbc5->enter($__internal_bee6077acb3d03006a2347940efaece259199e42b53f5120629751dfeb99dbc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ESIEAPlatformBundle::layout.html.twig"));

        // line 6
        echo "  Annonces - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_bee6077acb3d03006a2347940efaece259199e42b53f5120629751dfeb99dbc5->leave($__internal_bee6077acb3d03006a2347940efaece259199e42b53f5120629751dfeb99dbc5_prof);

    }

    // line 11
    public function block_esieaplatform_body($context, array $blocks = array())
    {
        $__internal_0182d44e4b7bcc210ed0c0bf5fb01488e4dd6fcb795fbdb765529c4184e66664 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0182d44e4b7bcc210ed0c0bf5fb01488e4dd6fcb795fbdb765529c4184e66664->enter($__internal_0182d44e4b7bcc210ed0c0bf5fb01488e4dd6fcb795fbdb765529c4184e66664_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ESIEAPlatformBundle::layout.html.twig"));

        // line 12
        echo "<html>
   <body>
   \t

   \t
   </body>
 </html>
 ";
        
        $__internal_0182d44e4b7bcc210ed0c0bf5fb01488e4dd6fcb795fbdb765529c4184e66664->leave($__internal_0182d44e4b7bcc210ed0c0bf5fb01488e4dd6fcb795fbdb765529c4184e66664_prof);

    }

    public function getTemplateName()
    {
        return "ESIEAPlatformBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 12,  51 => 11,  41 => 6,  35 => 5,  11 => 3,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# src/ESIEA/PlatformBundle/Resources/views/layout.html.twig #}

{% extends \"ESIEACoreBundle::layout.html.twig\" %}

{% block title %}
  Annonces - {{ parent() }}
{% endblock %}



 {% block esieaplatform_body %}
<html>
   <body>
   \t

   \t
   </body>
 </html>
 {% endblock %}

", "ESIEAPlatformBundle::layout.html.twig", "C:\\wamp64\\www\\Symfony\\src\\ESIEA\\PlatformBundle/Resources/views/layout.html.twig");
    }
}
