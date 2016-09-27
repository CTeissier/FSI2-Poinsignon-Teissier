<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_bd3a90158ee19709bbfa011a9bdb7a1fe433e526f7c54301d9ba8baf56bf4144 extends Twig_Template
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
        $__internal_3e137d2f6c6ec5a7b73805766abe0f481633f6e0b8eb254599bcb612bfe7eb55 = $this->env->getExtension("native_profiler");
        $__internal_3e137d2f6c6ec5a7b73805766abe0f481633f6e0b8eb254599bcb612bfe7eb55->enter($__internal_3e137d2f6c6ec5a7b73805766abe0f481633f6e0b8eb254599bcb612bfe7eb55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3e137d2f6c6ec5a7b73805766abe0f481633f6e0b8eb254599bcb612bfe7eb55->leave($__internal_3e137d2f6c6ec5a7b73805766abe0f481633f6e0b8eb254599bcb612bfe7eb55_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_ce4932407bdc996d87f65a0e542c6285c62ffc9e2a97937b632d604475d85b08 = $this->env->getExtension("native_profiler");
        $__internal_ce4932407bdc996d87f65a0e542c6285c62ffc9e2a97937b632d604475d85b08->enter($__internal_ce4932407bdc996d87f65a0e542c6285c62ffc9e2a97937b632d604475d85b08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_ce4932407bdc996d87f65a0e542c6285c62ffc9e2a97937b632d604475d85b08->leave($__internal_ce4932407bdc996d87f65a0e542c6285c62ffc9e2a97937b632d604475d85b08_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_5c4aa0955e89dc6916b82f54f7cc6db508a209c314322c72ee59590bbf76de9b = $this->env->getExtension("native_profiler");
        $__internal_5c4aa0955e89dc6916b82f54f7cc6db508a209c314322c72ee59590bbf76de9b->enter($__internal_5c4aa0955e89dc6916b82f54f7cc6db508a209c314322c72ee59590bbf76de9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_5c4aa0955e89dc6916b82f54f7cc6db508a209c314322c72ee59590bbf76de9b->leave($__internal_5c4aa0955e89dc6916b82f54f7cc6db508a209c314322c72ee59590bbf76de9b_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_f035dbd75399dbb9b9cf2d2431cc08d7cb19e5c2e20c721cd9b520ecfdc440f8 = $this->env->getExtension("native_profiler");
        $__internal_f035dbd75399dbb9b9cf2d2431cc08d7cb19e5c2e20c721cd9b520ecfdc440f8->enter($__internal_f035dbd75399dbb9b9cf2d2431cc08d7cb19e5c2e20c721cd9b520ecfdc440f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_f035dbd75399dbb9b9cf2d2431cc08d7cb19e5c2e20c721cd9b520ecfdc440f8->leave($__internal_f035dbd75399dbb9b9cf2d2431cc08d7cb19e5c2e20c721cd9b520ecfdc440f8_prof);

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
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
