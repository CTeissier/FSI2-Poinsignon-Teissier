<?php

/* ESIEAPlatformBundle::layout.html.twig */
class __TwigTemplate_c12bbd32821a1fd34d0bbe00a85dbc8469aaca78131c79a75fe29f74eec50fc5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("::layout.html.twig", "ESIEAPlatformBundle::layout.html.twig", 3);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'esieaplatform_body' => array($this, 'block_esieaplatform_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9054933768f99420953d4207b47d62bf3482b5aeb7772dd6970d51e01f81ae48 = $this->env->getExtension("native_profiler");
        $__internal_9054933768f99420953d4207b47d62bf3482b5aeb7772dd6970d51e01f81ae48->enter($__internal_9054933768f99420953d4207b47d62bf3482b5aeb7772dd6970d51e01f81ae48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ESIEAPlatformBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9054933768f99420953d4207b47d62bf3482b5aeb7772dd6970d51e01f81ae48->leave($__internal_9054933768f99420953d4207b47d62bf3482b5aeb7772dd6970d51e01f81ae48_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_17c86f722c429f2e43e9af8e7dcbbf5e0bed25bfecc2f1e0927ffeb048f7dde9 = $this->env->getExtension("native_profiler");
        $__internal_17c86f722c429f2e43e9af8e7dcbbf5e0bed25bfecc2f1e0927ffeb048f7dde9->enter($__internal_17c86f722c429f2e43e9af8e7dcbbf5e0bed25bfecc2f1e0927ffeb048f7dde9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "  Annonces - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_17c86f722c429f2e43e9af8e7dcbbf5e0bed25bfecc2f1e0927ffeb048f7dde9->leave($__internal_17c86f722c429f2e43e9af8e7dcbbf5e0bed25bfecc2f1e0927ffeb048f7dde9_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_198c1d59fc67ee444a7fd8a41111bb556ee69b6c0b569e83db17856c448aed97 = $this->env->getExtension("native_profiler");
        $__internal_198c1d59fc67ee444a7fd8a41111bb556ee69b6c0b569e83db17856c448aed97->enter($__internal_198c1d59fc67ee444a7fd8a41111bb556ee69b6c0b569e83db17856c448aed97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "
  ";
        // line 12
        echo "  <h1>Annonces</h1>

  <hr>

  ";
        // line 17
        echo "  ";
        $this->displayBlock('esieaplatform_body', $context, $blocks);
        // line 19
        echo "
";
        
        $__internal_198c1d59fc67ee444a7fd8a41111bb556ee69b6c0b569e83db17856c448aed97->leave($__internal_198c1d59fc67ee444a7fd8a41111bb556ee69b6c0b569e83db17856c448aed97_prof);

    }

    // line 17
    public function block_esieaplatform_body($context, array $blocks = array())
    {
        $__internal_423f18a25dd15f4e6f46c7a57fe5398e261c63543b415014d7a59fab79ef2109 = $this->env->getExtension("native_profiler");
        $__internal_423f18a25dd15f4e6f46c7a57fe5398e261c63543b415014d7a59fab79ef2109->enter($__internal_423f18a25dd15f4e6f46c7a57fe5398e261c63543b415014d7a59fab79ef2109_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "esieaplatform_body"));

        // line 18
        echo "  ";
        
        $__internal_423f18a25dd15f4e6f46c7a57fe5398e261c63543b415014d7a59fab79ef2109->leave($__internal_423f18a25dd15f4e6f46c7a57fe5398e261c63543b415014d7a59fab79ef2109_prof);

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
        return array (  84 => 18,  78 => 17,  70 => 19,  67 => 17,  61 => 12,  58 => 10,  52 => 9,  42 => 6,  36 => 5,  11 => 3,);
    }

    public function getSource()
    {
        return "{# src/ESIEA/PlatformBundle/Resources/views/layout.html.twig #}

{% extends \"::layout.html.twig\" %}

{% block title %}
  Annonces - {{ parent() }}
{% endblock %}

{% block body %}

  {# On définit un sous-titre commun à toutes les pages du bundle, par exemple #}
  <h1>Annonces</h1>

  <hr>

  {# On définit un nouveau bloc, que les vues du bundle pourront remplir #}
  {% block esieaplatform_body %}
  {% endblock %}

{% endblock %}";
    }
}
