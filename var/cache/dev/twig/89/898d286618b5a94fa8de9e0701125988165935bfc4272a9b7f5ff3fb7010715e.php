<?php

/* ESIEAPlatformBundle::layout.html.twig */
class __TwigTemplate_7d5bc214821cd73a077faa5d7a7b90cd811000d6f5e301e55bba471b62f5c8e7 extends Twig_Template
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
        $__internal_b38e9c1d96605c63619bce3347f5e5d899461c0b33102b8db78a09244f76b266 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b38e9c1d96605c63619bce3347f5e5d899461c0b33102b8db78a09244f76b266->enter($__internal_b38e9c1d96605c63619bce3347f5e5d899461c0b33102b8db78a09244f76b266_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ESIEAPlatformBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b38e9c1d96605c63619bce3347f5e5d899461c0b33102b8db78a09244f76b266->leave($__internal_b38e9c1d96605c63619bce3347f5e5d899461c0b33102b8db78a09244f76b266_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_0f442f92a3508468837b7a2a9354df3b3a639f6f17d78a5aab28df1c6954de40 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f442f92a3508468837b7a2a9354df3b3a639f6f17d78a5aab28df1c6954de40->enter($__internal_0f442f92a3508468837b7a2a9354df3b3a639f6f17d78a5aab28df1c6954de40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "  Annonces - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_0f442f92a3508468837b7a2a9354df3b3a639f6f17d78a5aab28df1c6954de40->leave($__internal_0f442f92a3508468837b7a2a9354df3b3a639f6f17d78a5aab28df1c6954de40_prof);

    }

    // line 11
    public function block_esieaplatform_body($context, array $blocks = array())
    {
        $__internal_dd765ec65855cddaa860a7314829a2fef2e9465f400ea583ce4e06798a439e5e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd765ec65855cddaa860a7314829a2fef2e9465f400ea583ce4e06798a439e5e->enter($__internal_dd765ec65855cddaa860a7314829a2fef2e9465f400ea583ce4e06798a439e5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "esieaplatform_body"));

        // line 12
        echo "<html>
   <body>
   \t

   \t
   </body>
 </html>
 ";
        
        $__internal_dd765ec65855cddaa860a7314829a2fef2e9465f400ea583ce4e06798a439e5e->leave($__internal_dd765ec65855cddaa860a7314829a2fef2e9465f400ea583ce4e06798a439e5e_prof);

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
   <body>
   \t

   \t
   </body>
 </html>
 {% endblock %}

";
    }
}
