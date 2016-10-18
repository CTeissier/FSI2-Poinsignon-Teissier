<?php

/* base.html.twig */
class __TwigTemplate_0483e5bd3f75a24c3610fb5d8f4c469ae915a3efcd71ad10607bc3d7da44460b extends Twig_Template
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
        $__internal_cc742a97ec39b0172b0e46a9c931e43b05501925e91ac5e50b83f1cdc0cdafd7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc742a97ec39b0172b0e46a9c931e43b05501925e91ac5e50b83f1cdc0cdafd7->enter($__internal_cc742a97ec39b0172b0e46a9c931e43b05501925e91ac5e50b83f1cdc0cdafd7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_cc742a97ec39b0172b0e46a9c931e43b05501925e91ac5e50b83f1cdc0cdafd7->leave($__internal_cc742a97ec39b0172b0e46a9c931e43b05501925e91ac5e50b83f1cdc0cdafd7_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_9fff58114562b5eabafcc214490340a6d5ceb97d5b2d30611b05c990a8ffd4ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9fff58114562b5eabafcc214490340a6d5ceb97d5b2d30611b05c990a8ffd4ac->enter($__internal_9fff58114562b5eabafcc214490340a6d5ceb97d5b2d30611b05c990a8ffd4ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_9fff58114562b5eabafcc214490340a6d5ceb97d5b2d30611b05c990a8ffd4ac->leave($__internal_9fff58114562b5eabafcc214490340a6d5ceb97d5b2d30611b05c990a8ffd4ac_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_7a5dd0dd763fb59bc76e173f94190ef4bb2a3827f2ab019f727cd65456f8434e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a5dd0dd763fb59bc76e173f94190ef4bb2a3827f2ab019f727cd65456f8434e->enter($__internal_7a5dd0dd763fb59bc76e173f94190ef4bb2a3827f2ab019f727cd65456f8434e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_7a5dd0dd763fb59bc76e173f94190ef4bb2a3827f2ab019f727cd65456f8434e->leave($__internal_7a5dd0dd763fb59bc76e173f94190ef4bb2a3827f2ab019f727cd65456f8434e_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_ada68bec22685ac9b37aec06b946aab07e883e8864819b012a816f72c62119f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ada68bec22685ac9b37aec06b946aab07e883e8864819b012a816f72c62119f1->enter($__internal_ada68bec22685ac9b37aec06b946aab07e883e8864819b012a816f72c62119f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_ada68bec22685ac9b37aec06b946aab07e883e8864819b012a816f72c62119f1->leave($__internal_ada68bec22685ac9b37aec06b946aab07e883e8864819b012a816f72c62119f1_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_b09d4a820d36bf528e68c7697230d1d280ab7e9c1b2ee71dff41fb68e06b182f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b09d4a820d36bf528e68c7697230d1d280ab7e9c1b2ee71dff41fb68e06b182f->enter($__internal_b09d4a820d36bf528e68c7697230d1d280ab7e9c1b2ee71dff41fb68e06b182f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_b09d4a820d36bf528e68c7697230d1d280ab7e9c1b2ee71dff41fb68e06b182f->leave($__internal_b09d4a820d36bf528e68c7697230d1d280ab7e9c1b2ee71dff41fb68e06b182f_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }

    public function getSource()
    {
        return "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
";
    }
}
