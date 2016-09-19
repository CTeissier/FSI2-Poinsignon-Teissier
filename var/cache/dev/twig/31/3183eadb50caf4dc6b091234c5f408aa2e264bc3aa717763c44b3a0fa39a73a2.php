<?php

/* @WebProfiler/Profiler/ajax_layout.html.twig */
class __TwigTemplate_392c090d727a130d0eed350f770faa22cc7c25e28df37468a13b7d4b6944227d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0927e9462aff92f790e204c18a6c8d2a219933e82fe6ba8975142a73002efe89 = $this->env->getExtension("native_profiler");
        $__internal_0927e9462aff92f790e204c18a6c8d2a219933e82fe6ba8975142a73002efe89->enter($__internal_0927e9462aff92f790e204c18a6c8d2a219933e82fe6ba8975142a73002efe89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_0927e9462aff92f790e204c18a6c8d2a219933e82fe6ba8975142a73002efe89->leave($__internal_0927e9462aff92f790e204c18a6c8d2a219933e82fe6ba8975142a73002efe89_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_9d43ca768ef2bf254952ca9081a875f500ff8abb2dec55f8845d55773bad8432 = $this->env->getExtension("native_profiler");
        $__internal_9d43ca768ef2bf254952ca9081a875f500ff8abb2dec55f8845d55773bad8432->enter($__internal_9d43ca768ef2bf254952ca9081a875f500ff8abb2dec55f8845d55773bad8432_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_9d43ca768ef2bf254952ca9081a875f500ff8abb2dec55f8845d55773bad8432->leave($__internal_9d43ca768ef2bf254952ca9081a875f500ff8abb2dec55f8845d55773bad8432_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }
}
/* {% block panel '' %}*/
/* */
