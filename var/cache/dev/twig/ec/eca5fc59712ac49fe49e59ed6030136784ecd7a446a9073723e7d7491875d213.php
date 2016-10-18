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
        $__internal_b465b314bab0a72a1d8aa27380f9099d95c5b19156880a35e8967576411fa938 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b465b314bab0a72a1d8aa27380f9099d95c5b19156880a35e8967576411fa938->enter($__internal_b465b314bab0a72a1d8aa27380f9099d95c5b19156880a35e8967576411fa938_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_b465b314bab0a72a1d8aa27380f9099d95c5b19156880a35e8967576411fa938->leave($__internal_b465b314bab0a72a1d8aa27380f9099d95c5b19156880a35e8967576411fa938_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_b3a4e402e46eb12b08894a62f0e9e4c848f9d48a9b5188baad7bd6d56f54ab98 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b3a4e402e46eb12b08894a62f0e9e4c848f9d48a9b5188baad7bd6d56f54ab98->enter($__internal_b3a4e402e46eb12b08894a62f0e9e4c848f9d48a9b5188baad7bd6d56f54ab98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_b3a4e402e46eb12b08894a62f0e9e4c848f9d48a9b5188baad7bd6d56f54ab98->leave($__internal_b3a4e402e46eb12b08894a62f0e9e4c848f9d48a9b5188baad7bd6d56f54ab98_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_4f8e00154bd9b8cc3467d7a7fb3e8545ce6c4ecc6a8d8e0ede18127c7a91946f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f8e00154bd9b8cc3467d7a7fb3e8545ce6c4ecc6a8d8e0ede18127c7a91946f->enter($__internal_4f8e00154bd9b8cc3467d7a7fb3e8545ce6c4ecc6a8d8e0ede18127c7a91946f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_4f8e00154bd9b8cc3467d7a7fb3e8545ce6c4ecc6a8d8e0ede18127c7a91946f->leave($__internal_4f8e00154bd9b8cc3467d7a7fb3e8545ce6c4ecc6a8d8e0ede18127c7a91946f_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_e0be6c406c21cf1f5327312adc4f930792fba894156c4d01f7f19f3e60ce2f03 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e0be6c406c21cf1f5327312adc4f930792fba894156c4d01f7f19f3e60ce2f03->enter($__internal_e0be6c406c21cf1f5327312adc4f930792fba894156c4d01f7f19f3e60ce2f03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_e0be6c406c21cf1f5327312adc4f930792fba894156c4d01f7f19f3e60ce2f03->leave($__internal_e0be6c406c21cf1f5327312adc4f930792fba894156c4d01f7f19f3e60ce2f03_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_970df97c331ac19dcb2ec21f982cce44ec1c9dfeaba4512e29f0a5e4a6ebddbc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_970df97c331ac19dcb2ec21f982cce44ec1c9dfeaba4512e29f0a5e4a6ebddbc->enter($__internal_970df97c331ac19dcb2ec21f982cce44ec1c9dfeaba4512e29f0a5e4a6ebddbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_970df97c331ac19dcb2ec21f982cce44ec1c9dfeaba4512e29f0a5e4a6ebddbc->leave($__internal_970df97c331ac19dcb2ec21f982cce44ec1c9dfeaba4512e29f0a5e4a6ebddbc_prof);

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
