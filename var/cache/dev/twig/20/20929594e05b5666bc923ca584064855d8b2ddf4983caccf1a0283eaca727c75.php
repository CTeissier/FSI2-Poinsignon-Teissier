<?php

/* base.html.twig */
class __TwigTemplate_51c8588c581d7411d7e4a6233f50fc7573992f3512d283bc89a3cbb864a70f24 extends Twig_Template
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
        $__internal_5a95bf0525f9ebb90131d5a56bdb5667a47d97f29c8d4758ae05391755fa6aa8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a95bf0525f9ebb90131d5a56bdb5667a47d97f29c8d4758ae05391755fa6aa8->enter($__internal_5a95bf0525f9ebb90131d5a56bdb5667a47d97f29c8d4758ae05391755fa6aa8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_5a95bf0525f9ebb90131d5a56bdb5667a47d97f29c8d4758ae05391755fa6aa8->leave($__internal_5a95bf0525f9ebb90131d5a56bdb5667a47d97f29c8d4758ae05391755fa6aa8_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_e97e4b21a782a79c203cd1f0e313f11ac054ff32255db4026e0711a66ae00230 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e97e4b21a782a79c203cd1f0e313f11ac054ff32255db4026e0711a66ae00230->enter($__internal_e97e4b21a782a79c203cd1f0e313f11ac054ff32255db4026e0711a66ae00230_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_e97e4b21a782a79c203cd1f0e313f11ac054ff32255db4026e0711a66ae00230->leave($__internal_e97e4b21a782a79c203cd1f0e313f11ac054ff32255db4026e0711a66ae00230_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_b348a5a0af55a254f40ea224b0f2e3e4f9d6f0b69b444072c0710d4d364b454e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b348a5a0af55a254f40ea224b0f2e3e4f9d6f0b69b444072c0710d4d364b454e->enter($__internal_b348a5a0af55a254f40ea224b0f2e3e4f9d6f0b69b444072c0710d4d364b454e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_b348a5a0af55a254f40ea224b0f2e3e4f9d6f0b69b444072c0710d4d364b454e->leave($__internal_b348a5a0af55a254f40ea224b0f2e3e4f9d6f0b69b444072c0710d4d364b454e_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_9e17515e0ce3a72cdd52354ca625d8170a369c369127aad97b313939a9541911 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e17515e0ce3a72cdd52354ca625d8170a369c369127aad97b313939a9541911->enter($__internal_9e17515e0ce3a72cdd52354ca625d8170a369c369127aad97b313939a9541911_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_9e17515e0ce3a72cdd52354ca625d8170a369c369127aad97b313939a9541911->leave($__internal_9e17515e0ce3a72cdd52354ca625d8170a369c369127aad97b313939a9541911_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_2cb564a7481db2f988d97a9d6e17af9499da0291aa87f74ed2513dd7ca56b805 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2cb564a7481db2f988d97a9d6e17af9499da0291aa87f74ed2513dd7ca56b805->enter($__internal_2cb564a7481db2f988d97a9d6e17af9499da0291aa87f74ed2513dd7ca56b805_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_2cb564a7481db2f988d97a9d6e17af9499da0291aa87f74ed2513dd7ca56b805->leave($__internal_2cb564a7481db2f988d97a9d6e17af9499da0291aa87f74ed2513dd7ca56b805_prof);

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
