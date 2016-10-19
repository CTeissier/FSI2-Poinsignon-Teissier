<?php

/* ESIEAPlatformBundle::layout.html.twig */
class __TwigTemplate_40d3e626064990ec616279a56dc75327fca52e97a4af0e587cbe48620b9b2a4c extends Twig_Template
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
        $__internal_ca3ed58d1d8d94d13d22bef97c7412b8c55af2bf02562de9c7a425378db991bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca3ed58d1d8d94d13d22bef97c7412b8c55af2bf02562de9c7a425378db991bf->enter($__internal_ca3ed58d1d8d94d13d22bef97c7412b8c55af2bf02562de9c7a425378db991bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ESIEAPlatformBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ca3ed58d1d8d94d13d22bef97c7412b8c55af2bf02562de9c7a425378db991bf->leave($__internal_ca3ed58d1d8d94d13d22bef97c7412b8c55af2bf02562de9c7a425378db991bf_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_01600f29066a8a2788a4d644cfc1e842cba794e36030b8deb7b35462773fbce7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_01600f29066a8a2788a4d644cfc1e842cba794e36030b8deb7b35462773fbce7->enter($__internal_01600f29066a8a2788a4d644cfc1e842cba794e36030b8deb7b35462773fbce7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "  Annonces - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_01600f29066a8a2788a4d644cfc1e842cba794e36030b8deb7b35462773fbce7->leave($__internal_01600f29066a8a2788a4d644cfc1e842cba794e36030b8deb7b35462773fbce7_prof);

    }

    // line 11
    public function block_esieaplatform_body($context, array $blocks = array())
    {
        $__internal_007829b6b1aefe73f6d5a1fb3ee1e3b86eac228128081366150a7ff5a3fcdb73 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_007829b6b1aefe73f6d5a1fb3ee1e3b86eac228128081366150a7ff5a3fcdb73->enter($__internal_007829b6b1aefe73f6d5a1fb3ee1e3b86eac228128081366150a7ff5a3fcdb73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "esieaplatform_body"));

        // line 12
        echo "<html>
   <body></body>
 </html>
 ";
        
        $__internal_007829b6b1aefe73f6d5a1fb3ee1e3b86eac228128081366150a7ff5a3fcdb73->leave($__internal_007829b6b1aefe73f6d5a1fb3ee1e3b86eac228128081366150a7ff5a3fcdb73_prof);

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

    public function getSource()
    {
        return "{# src/ESIEA/PlatformBundle/Resources/views/layout.html.twig #}

{% extends \"ESIEACoreBundle::layout.html.twig\" %}

{% block title %}
  Annonces - {{ parent() }}
{% endblock %}



 {% block esieaplatform_body %}
<html>
   <body></body>
 </html>
 {% endblock %}

";
    }
}
