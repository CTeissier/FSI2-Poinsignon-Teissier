<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_5bff37c7d9718ac1cc0adf2a009e3a1ca87afd43bae6181e4f19479318e2c597 extends Twig_Template
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
        $__internal_fc29e82d829af6043a8f29f0044748fb996b7affc961e1c95b42e4ecade42fee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc29e82d829af6043a8f29f0044748fb996b7affc961e1c95b42e4ecade42fee->enter($__internal_fc29e82d829af6043a8f29f0044748fb996b7affc961e1c95b42e4ecade42fee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fc29e82d829af6043a8f29f0044748fb996b7affc961e1c95b42e4ecade42fee->leave($__internal_fc29e82d829af6043a8f29f0044748fb996b7affc961e1c95b42e4ecade42fee_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_e84833cc20a61f14cb83dcb39e3f3da67d93bad9d1eaea32c8629df0f0238b58 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e84833cc20a61f14cb83dcb39e3f3da67d93bad9d1eaea32c8629df0f0238b58->enter($__internal_e84833cc20a61f14cb83dcb39e3f3da67d93bad9d1eaea32c8629df0f0238b58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/router.html.twig"));

        
        $__internal_e84833cc20a61f14cb83dcb39e3f3da67d93bad9d1eaea32c8629df0f0238b58->leave($__internal_e84833cc20a61f14cb83dcb39e3f3da67d93bad9d1eaea32c8629df0f0238b58_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_dbd7ee21a2ad8f3ca1a280b6fb6b898e71a9d9e9f4bb76c45901da21a02870ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dbd7ee21a2ad8f3ca1a280b6fb6b898e71a9d9e9f4bb76c45901da21a02870ed->enter($__internal_dbd7ee21a2ad8f3ca1a280b6fb6b898e71a9d9e9f4bb76c45901da21a02870ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/router.html.twig"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_dbd7ee21a2ad8f3ca1a280b6fb6b898e71a9d9e9f4bb76c45901da21a02870ed->leave($__internal_dbd7ee21a2ad8f3ca1a280b6fb6b898e71a9d9e9f4bb76c45901da21a02870ed_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_77ebbf887506259c3b7a721d7947aff9c9abeaac9bbba149e47b906dfe538b5b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_77ebbf887506259c3b7a721d7947aff9c9abeaac9bbba149e47b906dfe538b5b->enter($__internal_77ebbf887506259c3b7a721d7947aff9c9abeaac9bbba149e47b906dfe538b5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/router.html.twig"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_77ebbf887506259c3b7a721d7947aff9c9abeaac9bbba149e47b906dfe538b5b->leave($__internal_77ebbf887506259c3b7a721d7947aff9c9abeaac9bbba149e47b906dfe538b5b_prof);

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

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

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
", "@WebProfiler/Collector/router.html.twig", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
