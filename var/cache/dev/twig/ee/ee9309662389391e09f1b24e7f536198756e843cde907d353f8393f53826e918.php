<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_284bd827da9c513af99c533fd74355d8f30ccde9c3426960d4e583711c545edf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@WebProfiler/Profiler/toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d07532dc5fda92f1538cc1782c5fedf4dc21b71df2efc9c99162eea263e51273 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d07532dc5fda92f1538cc1782c5fedf4dc21b71df2efc9c99162eea263e51273->enter($__internal_d07532dc5fda92f1538cc1782c5fedf4dc21b71df2efc9c99162eea263e51273_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d07532dc5fda92f1538cc1782c5fedf4dc21b71df2efc9c99162eea263e51273->leave($__internal_d07532dc5fda92f1538cc1782c5fedf4dc21b71df2efc9c99162eea263e51273_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_d7c696fb5cfdf20a0e6d84d674bbe8ea2bd99a8673a73b942c0815c338e5ec75 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d7c696fb5cfdf20a0e6d84d674bbe8ea2bd99a8673a73b942c0815c338e5ec75->enter($__internal_d7c696fb5cfdf20a0e6d84d674bbe8ea2bd99a8673a73b942c0815c338e5ec75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_d7c696fb5cfdf20a0e6d84d674bbe8ea2bd99a8673a73b942c0815c338e5ec75->leave($__internal_d7c696fb5cfdf20a0e6d84d674bbe8ea2bd99a8673a73b942c0815c338e5ec75_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_609313cd93b44ebce2ecbd33f304525097cbae974b0732c8d6735aaf84dfb96f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_609313cd93b44ebce2ecbd33f304525097cbae974b0732c8d6735aaf84dfb96f->enter($__internal_609313cd93b44ebce2ecbd33f304525097cbae974b0732c8d6735aaf84dfb96f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_609313cd93b44ebce2ecbd33f304525097cbae974b0732c8d6735aaf84dfb96f->leave($__internal_609313cd93b44ebce2ecbd33f304525097cbae974b0732c8d6735aaf84dfb96f_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
";
    }
}
