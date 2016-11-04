<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_bade055435afe884387e59b3de3aee0b2d92ebf9db710cb1613afd83eafc75f8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_5226de4d04d4b53a94efbf19852fd7392cc07e6e8e641e22a764f1e60b8bf825 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5226de4d04d4b53a94efbf19852fd7392cc07e6e8e641e22a764f1e60b8bf825->enter($__internal_5226de4d04d4b53a94efbf19852fd7392cc07e6e8e641e22a764f1e60b8bf825_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5226de4d04d4b53a94efbf19852fd7392cc07e6e8e641e22a764f1e60b8bf825->leave($__internal_5226de4d04d4b53a94efbf19852fd7392cc07e6e8e641e22a764f1e60b8bf825_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_bc45dec295ed5d279376b087d07b558d73c97a96ce31482993b43fe111c0d9f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc45dec295ed5d279376b087d07b558d73c97a96ce31482993b43fe111c0d9f5->enter($__internal_bc45dec295ed5d279376b087d07b558d73c97a96ce31482993b43fe111c0d9f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@Twig/Exception/exception_full.html.twig"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_bc45dec295ed5d279376b087d07b558d73c97a96ce31482993b43fe111c0d9f5->leave($__internal_bc45dec295ed5d279376b087d07b558d73c97a96ce31482993b43fe111c0d9f5_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_f78efb5906889f53ae310471dac22039b07d18ef8985c47778cedf6213717cbb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f78efb5906889f53ae310471dac22039b07d18ef8985c47778cedf6213717cbb->enter($__internal_f78efb5906889f53ae310471dac22039b07d18ef8985c47778cedf6213717cbb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@Twig/Exception/exception_full.html.twig"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_f78efb5906889f53ae310471dac22039b07d18ef8985c47778cedf6213717cbb->leave($__internal_f78efb5906889f53ae310471dac22039b07d18ef8985c47778cedf6213717cbb_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_2832b60eb97b48d067af672d6b1659d6b99e20fba2408c403802e1d362ad46f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2832b60eb97b48d067af672d6b1659d6b99e20fba2408c403802e1d362ad46f5->enter($__internal_2832b60eb97b48d067af672d6b1659d6b99e20fba2408c403802e1d362ad46f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@Twig/Exception/exception_full.html.twig"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_2832b60eb97b48d067af672d6b1659d6b99e20fba2408c403802e1d362ad46f5->leave($__internal_2832b60eb97b48d067af672d6b1659d6b99e20fba2408c403802e1d362ad46f5_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception_full.html.twig");
    }
}
