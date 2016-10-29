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
        $__internal_44f004e137200fe37ca0e07ebc66ea055407a63ca7165b22b1c52039f8cd0f47 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_44f004e137200fe37ca0e07ebc66ea055407a63ca7165b22b1c52039f8cd0f47->enter($__internal_44f004e137200fe37ca0e07ebc66ea055407a63ca7165b22b1c52039f8cd0f47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_44f004e137200fe37ca0e07ebc66ea055407a63ca7165b22b1c52039f8cd0f47->leave($__internal_44f004e137200fe37ca0e07ebc66ea055407a63ca7165b22b1c52039f8cd0f47_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_95a08e6f235037e1fef377671ffeb5f8957c3a102e91024545400c6e51308479 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_95a08e6f235037e1fef377671ffeb5f8957c3a102e91024545400c6e51308479->enter($__internal_95a08e6f235037e1fef377671ffeb5f8957c3a102e91024545400c6e51308479_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_95a08e6f235037e1fef377671ffeb5f8957c3a102e91024545400c6e51308479->leave($__internal_95a08e6f235037e1fef377671ffeb5f8957c3a102e91024545400c6e51308479_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_8827f1396c698cfff7d19d0834931af4877675b20ee3523de80c65c30d437a6a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8827f1396c698cfff7d19d0834931af4877675b20ee3523de80c65c30d437a6a->enter($__internal_8827f1396c698cfff7d19d0834931af4877675b20ee3523de80c65c30d437a6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_8827f1396c698cfff7d19d0834931af4877675b20ee3523de80c65c30d437a6a->leave($__internal_8827f1396c698cfff7d19d0834931af4877675b20ee3523de80c65c30d437a6a_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_8fef7e627f41750596af4d8404268c256ad199650112036c510a6d74d6368223 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8fef7e627f41750596af4d8404268c256ad199650112036c510a6d74d6368223->enter($__internal_8fef7e627f41750596af4d8404268c256ad199650112036c510a6d74d6368223_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_8fef7e627f41750596af4d8404268c256ad199650112036c510a6d74d6368223->leave($__internal_8fef7e627f41750596af4d8404268c256ad199650112036c510a6d74d6368223_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_e2a1ed9a3581beedeeb6637a25c7df75f2dedfa32e176d6ddfaeb6f2c4c846e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e2a1ed9a3581beedeeb6637a25c7df75f2dedfa32e176d6ddfaeb6f2c4c846e5->enter($__internal_e2a1ed9a3581beedeeb6637a25c7df75f2dedfa32e176d6ddfaeb6f2c4c846e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_e2a1ed9a3581beedeeb6637a25c7df75f2dedfa32e176d6ddfaeb6f2c4c846e5->leave($__internal_e2a1ed9a3581beedeeb6637a25c7df75f2dedfa32e176d6ddfaeb6f2c4c846e5_prof);

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
