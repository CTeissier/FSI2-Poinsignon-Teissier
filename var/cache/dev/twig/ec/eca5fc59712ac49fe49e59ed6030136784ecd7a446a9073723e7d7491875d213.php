<?php

/* ::base.html.twig */
class __TwigTemplate_2f62fbf5ad047d32bbbb2528a2ff1d97fb35b48d15286fde2afa774173004f60 extends Twig_Template
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
        $__internal_d7924f2b261400f7de7d5a40ad41b51c74b0a2bc8d13414da4ba02a258abab58 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d7924f2b261400f7de7d5a40ad41b51c74b0a2bc8d13414da4ba02a258abab58->enter($__internal_d7924f2b261400f7de7d5a40ad41b51c74b0a2bc8d13414da4ba02a258abab58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_d7924f2b261400f7de7d5a40ad41b51c74b0a2bc8d13414da4ba02a258abab58->leave($__internal_d7924f2b261400f7de7d5a40ad41b51c74b0a2bc8d13414da4ba02a258abab58_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_6031c0e3865e4a00db30ddfc43d115b06bc1b182711e43db757c310d81844ce7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6031c0e3865e4a00db30ddfc43d115b06bc1b182711e43db757c310d81844ce7->enter($__internal_6031c0e3865e4a00db30ddfc43d115b06bc1b182711e43db757c310d81844ce7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_6031c0e3865e4a00db30ddfc43d115b06bc1b182711e43db757c310d81844ce7->leave($__internal_6031c0e3865e4a00db30ddfc43d115b06bc1b182711e43db757c310d81844ce7_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_d4cfb920d8f60da631d0415799b257a95b446ceee0919a66d67734e532b2fea3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d4cfb920d8f60da631d0415799b257a95b446ceee0919a66d67734e532b2fea3->enter($__internal_d4cfb920d8f60da631d0415799b257a95b446ceee0919a66d67734e532b2fea3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_d4cfb920d8f60da631d0415799b257a95b446ceee0919a66d67734e532b2fea3->leave($__internal_d4cfb920d8f60da631d0415799b257a95b446ceee0919a66d67734e532b2fea3_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_adec298299bfea1421a87b6c37c2d26200e46ee2bef04d4302b0a2ee2ed078ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_adec298299bfea1421a87b6c37c2d26200e46ee2bef04d4302b0a2ee2ed078ef->enter($__internal_adec298299bfea1421a87b6c37c2d26200e46ee2bef04d4302b0a2ee2ed078ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_adec298299bfea1421a87b6c37c2d26200e46ee2bef04d4302b0a2ee2ed078ef->leave($__internal_adec298299bfea1421a87b6c37c2d26200e46ee2bef04d4302b0a2ee2ed078ef_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_4290eecd74c594f69283ae3fe1a3005331a5a43c76aa664b1503a6e0b2d70361 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4290eecd74c594f69283ae3fe1a3005331a5a43c76aa664b1503a6e0b2d70361->enter($__internal_4290eecd74c594f69283ae3fe1a3005331a5a43c76aa664b1503a6e0b2d70361_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_4290eecd74c594f69283ae3fe1a3005331a5a43c76aa664b1503a6e0b2d70361->leave($__internal_4290eecd74c594f69283ae3fe1a3005331a5a43c76aa664b1503a6e0b2d70361_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
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
