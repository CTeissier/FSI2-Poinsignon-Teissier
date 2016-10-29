<?php

/* @ESIEAPlatform/layout.html.twig */
class __TwigTemplate_16852c57c27826d884860834a30decac81916b9201876c7b55465b85aee5d973 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("ESIEACoreBundle::layout.html.twig", "@ESIEAPlatform/layout.html.twig", 3);
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
        $__internal_244230308d4e6842bb4df273dec56cef57a4f6948f096e2eeaa3bcb9fd5df2cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_244230308d4e6842bb4df273dec56cef57a4f6948f096e2eeaa3bcb9fd5df2cd->enter($__internal_244230308d4e6842bb4df273dec56cef57a4f6948f096e2eeaa3bcb9fd5df2cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@ESIEAPlatform/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_244230308d4e6842bb4df273dec56cef57a4f6948f096e2eeaa3bcb9fd5df2cd->leave($__internal_244230308d4e6842bb4df273dec56cef57a4f6948f096e2eeaa3bcb9fd5df2cd_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_ef18eb5e3264fa474d4c55af830fe6900317a6583f36f35bff6a4c091cbd7c36 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef18eb5e3264fa474d4c55af830fe6900317a6583f36f35bff6a4c091cbd7c36->enter($__internal_ef18eb5e3264fa474d4c55af830fe6900317a6583f36f35bff6a4c091cbd7c36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "  Annonces - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_ef18eb5e3264fa474d4c55af830fe6900317a6583f36f35bff6a4c091cbd7c36->leave($__internal_ef18eb5e3264fa474d4c55af830fe6900317a6583f36f35bff6a4c091cbd7c36_prof);

    }

    // line 11
    public function block_esieaplatform_body($context, array $blocks = array())
    {
        $__internal_b986b8eda252b7e1e295cc7a2e00a20d43e6508ae536e6dd8e2e2b0bcd99b165 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b986b8eda252b7e1e295cc7a2e00a20d43e6508ae536e6dd8e2e2b0bcd99b165->enter($__internal_b986b8eda252b7e1e295cc7a2e00a20d43e6508ae536e6dd8e2e2b0bcd99b165_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "esieaplatform_body"));

        // line 12
        echo "<html>
   <body>
   \t

   \t
   </body>
 </html>
 ";
        
        $__internal_b986b8eda252b7e1e295cc7a2e00a20d43e6508ae536e6dd8e2e2b0bcd99b165->leave($__internal_b986b8eda252b7e1e295cc7a2e00a20d43e6508ae536e6dd8e2e2b0bcd99b165_prof);

    }

    public function getTemplateName()
    {
        return "@ESIEAPlatform/layout.html.twig";
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
   <body>
   \t

   \t
   </body>
 </html>
 {% endblock %}

";
    }
}
