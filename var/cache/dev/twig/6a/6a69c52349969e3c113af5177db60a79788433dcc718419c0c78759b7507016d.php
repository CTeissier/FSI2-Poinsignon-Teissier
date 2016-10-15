<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_39a3de65cd92cfb7bc053338641cebefd4cafc068d3f4931b2abe5641a7e2707 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_17927f98800b0565b01c88d6bd5b84364e649b05813b6ed3523213655fe33d09 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_17927f98800b0565b01c88d6bd5b84364e649b05813b6ed3523213655fe33d09->enter($__internal_17927f98800b0565b01c88d6bd5b84364e649b05813b6ed3523213655fe33d09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_17927f98800b0565b01c88d6bd5b84364e649b05813b6ed3523213655fe33d09->leave($__internal_17927f98800b0565b01c88d6bd5b84364e649b05813b6ed3523213655fe33d09_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_6422f752b7ee4c29588ab4524d149beaa8748e4a7cb93a4467bcbe67aadd7608 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6422f752b7ee4c29588ab4524d149beaa8748e4a7cb93a4467bcbe67aadd7608->enter($__internal_6422f752b7ee4c29588ab4524d149beaa8748e4a7cb93a4467bcbe67aadd7608_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_6422f752b7ee4c29588ab4524d149beaa8748e4a7cb93a4467bcbe67aadd7608->leave($__internal_6422f752b7ee4c29588ab4524d149beaa8748e4a7cb93a4467bcbe67aadd7608_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_c8b7f3d417692b3939510b26c913a7d4b4190d80148bc1ecdd76455d04eb3c25 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c8b7f3d417692b3939510b26c913a7d4b4190d80148bc1ecdd76455d04eb3c25->enter($__internal_c8b7f3d417692b3939510b26c913a7d4b4190d80148bc1ecdd76455d04eb3c25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_c8b7f3d417692b3939510b26c913a7d4b4190d80148bc1ecdd76455d04eb3c25->leave($__internal_c8b7f3d417692b3939510b26c913a7d4b4190d80148bc1ecdd76455d04eb3c25_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_e524210d30550241b0c827deee4be34951f6cd291a20de4457f63c796e69933f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e524210d30550241b0c827deee4be34951f6cd291a20de4457f63c796e69933f->enter($__internal_e524210d30550241b0c827deee4be34951f6cd291a20de4457f63c796e69933f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_e524210d30550241b0c827deee4be34951f6cd291a20de4457f63c796e69933f->leave($__internal_e524210d30550241b0c827deee4be34951f6cd291a20de4457f63c796e69933f_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
";
    }
}
