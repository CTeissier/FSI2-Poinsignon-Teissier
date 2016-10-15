<?php

/* ::base.html.twig */
class __TwigTemplate_bed49ab995279de0ec1f1617d26d9818473da7472c2089e2052f7cce1d521497 extends Twig_Template
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
        $__internal_1f1669d390620e84c963c8486e4bcdb1c5576d7c78a665cc47b37c590c518fa7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f1669d390620e84c963c8486e4bcdb1c5576d7c78a665cc47b37c590c518fa7->enter($__internal_1f1669d390620e84c963c8486e4bcdb1c5576d7c78a665cc47b37c590c518fa7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_1f1669d390620e84c963c8486e4bcdb1c5576d7c78a665cc47b37c590c518fa7->leave($__internal_1f1669d390620e84c963c8486e4bcdb1c5576d7c78a665cc47b37c590c518fa7_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_1d8893fec40b9983963e184116e12b4fb50bff20420a357e017dface863b5f26 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d8893fec40b9983963e184116e12b4fb50bff20420a357e017dface863b5f26->enter($__internal_1d8893fec40b9983963e184116e12b4fb50bff20420a357e017dface863b5f26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_1d8893fec40b9983963e184116e12b4fb50bff20420a357e017dface863b5f26->leave($__internal_1d8893fec40b9983963e184116e12b4fb50bff20420a357e017dface863b5f26_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_b3a6d322aa3ed31de41446cab1a9c0ac21e41d9fd3bdab695e615fefa268fd69 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b3a6d322aa3ed31de41446cab1a9c0ac21e41d9fd3bdab695e615fefa268fd69->enter($__internal_b3a6d322aa3ed31de41446cab1a9c0ac21e41d9fd3bdab695e615fefa268fd69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_b3a6d322aa3ed31de41446cab1a9c0ac21e41d9fd3bdab695e615fefa268fd69->leave($__internal_b3a6d322aa3ed31de41446cab1a9c0ac21e41d9fd3bdab695e615fefa268fd69_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_08b7641755645effc4d1e3bb3b4ca7e17547eb689f4963c890250a8bec988278 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_08b7641755645effc4d1e3bb3b4ca7e17547eb689f4963c890250a8bec988278->enter($__internal_08b7641755645effc4d1e3bb3b4ca7e17547eb689f4963c890250a8bec988278_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_08b7641755645effc4d1e3bb3b4ca7e17547eb689f4963c890250a8bec988278->leave($__internal_08b7641755645effc4d1e3bb3b4ca7e17547eb689f4963c890250a8bec988278_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_c71ecd6d6129b6430ba9d45bd74661a5f959b506216905a75022116e74465968 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c71ecd6d6129b6430ba9d45bd74661a5f959b506216905a75022116e74465968->enter($__internal_c71ecd6d6129b6430ba9d45bd74661a5f959b506216905a75022116e74465968_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_c71ecd6d6129b6430ba9d45bd74661a5f959b506216905a75022116e74465968->leave($__internal_c71ecd6d6129b6430ba9d45bd74661a5f959b506216905a75022116e74465968_prof);

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
