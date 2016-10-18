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
            'body' => array($this, 'block_body'),
            'esieaplatform_body' => array($this, 'block_esieaplatform_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "ESIEACoreBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3cc90ba3b4d5bd812d86a21793555a35eecdf779a46e15d910dc1463dc9571b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3cc90ba3b4d5bd812d86a21793555a35eecdf779a46e15d910dc1463dc9571b5->enter($__internal_3cc90ba3b4d5bd812d86a21793555a35eecdf779a46e15d910dc1463dc9571b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ESIEAPlatformBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3cc90ba3b4d5bd812d86a21793555a35eecdf779a46e15d910dc1463dc9571b5->leave($__internal_3cc90ba3b4d5bd812d86a21793555a35eecdf779a46e15d910dc1463dc9571b5_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_7bc11dd5f7841451f02ac6cfa3e98fac4dbce8cb1d2bc888b9d6dcc168b39f09 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7bc11dd5f7841451f02ac6cfa3e98fac4dbce8cb1d2bc888b9d6dcc168b39f09->enter($__internal_7bc11dd5f7841451f02ac6cfa3e98fac4dbce8cb1d2bc888b9d6dcc168b39f09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "  Annonces - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_7bc11dd5f7841451f02ac6cfa3e98fac4dbce8cb1d2bc888b9d6dcc168b39f09->leave($__internal_7bc11dd5f7841451f02ac6cfa3e98fac4dbce8cb1d2bc888b9d6dcc168b39f09_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_e7cee6f616de6ff500714bf18b042cc95330f68ff066e958309175979a363d40 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e7cee6f616de6ff500714bf18b042cc95330f68ff066e958309175979a363d40->enter($__internal_e7cee6f616de6ff500714bf18b042cc95330f68ff066e958309175979a363d40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "
  ";
        // line 12
        echo "
  ";
        // line 14
        echo "  ";
        $this->displayBlock('esieaplatform_body', $context, $blocks);
        // line 16
        echo "
";
        
        $__internal_e7cee6f616de6ff500714bf18b042cc95330f68ff066e958309175979a363d40->leave($__internal_e7cee6f616de6ff500714bf18b042cc95330f68ff066e958309175979a363d40_prof);

    }

    // line 14
    public function block_esieaplatform_body($context, array $blocks = array())
    {
        $__internal_6f677f73dc1ee57329694708062c74a68819b7539312e8247a5e2673a79f34d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f677f73dc1ee57329694708062c74a68819b7539312e8247a5e2673a79f34d5->enter($__internal_6f677f73dc1ee57329694708062c74a68819b7539312e8247a5e2673a79f34d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "esieaplatform_body"));

        // line 15
        echo "  ";
        
        $__internal_6f677f73dc1ee57329694708062c74a68819b7539312e8247a5e2673a79f34d5->leave($__internal_6f677f73dc1ee57329694708062c74a68819b7539312e8247a5e2673a79f34d5_prof);

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
        return array (  81 => 15,  75 => 14,  67 => 16,  64 => 14,  61 => 12,  58 => 10,  52 => 9,  42 => 6,  36 => 5,  11 => 3,);
    }

    public function getSource()
    {
        return "{# src/ESIEA/PlatformBundle/Resources/views/layout.html.twig #}

{% extends \"ESIEACoreBundle::layout.html.twig\" %}

{% block title %}
  Annonces - {{ parent() }}
{% endblock %}

{% block body %}

  {# On définit un sous-titre commun à toutes les pages du bundle, par exemple #}

  {# On définit un nouveau bloc, que les vues du bundle pourront remplir #}
  {% block esieaplatform_body %}
  {% endblock %}

{% endblock %}";
    }
}
