<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_958d01c8c1957df1eda783b5a34583ff4683365e86b766cf044d1a7f23de2412 extends Twig_Template
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
        $__internal_26cc6705990295074d8be046ddb5c7346f1a2a7cc3e8e29e7a2ca9ca6c57dbd1 = $this->env->getExtension("native_profiler");
        $__internal_26cc6705990295074d8be046ddb5c7346f1a2a7cc3e8e29e7a2ca9ca6c57dbd1->enter($__internal_26cc6705990295074d8be046ddb5c7346f1a2a7cc3e8e29e7a2ca9ca6c57dbd1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_26cc6705990295074d8be046ddb5c7346f1a2a7cc3e8e29e7a2ca9ca6c57dbd1->leave($__internal_26cc6705990295074d8be046ddb5c7346f1a2a7cc3e8e29e7a2ca9ca6c57dbd1_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_af6a4a27ed635bee460e60e19041ac68a28b21521b8affef9c99070adbae183e = $this->env->getExtension("native_profiler");
        $__internal_af6a4a27ed635bee460e60e19041ac68a28b21521b8affef9c99070adbae183e->enter($__internal_af6a4a27ed635bee460e60e19041ac68a28b21521b8affef9c99070adbae183e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_af6a4a27ed635bee460e60e19041ac68a28b21521b8affef9c99070adbae183e->leave($__internal_af6a4a27ed635bee460e60e19041ac68a28b21521b8affef9c99070adbae183e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_9d41140cd12183ac55da41e19218f1f4f99fee9f172d23bccc9029a9737d6d48 = $this->env->getExtension("native_profiler");
        $__internal_9d41140cd12183ac55da41e19218f1f4f99fee9f172d23bccc9029a9737d6d48->enter($__internal_9d41140cd12183ac55da41e19218f1f4f99fee9f172d23bccc9029a9737d6d48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_9d41140cd12183ac55da41e19218f1f4f99fee9f172d23bccc9029a9737d6d48->leave($__internal_9d41140cd12183ac55da41e19218f1f4f99fee9f172d23bccc9029a9737d6d48_prof);

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
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block title 'Redirection Intercepted' %}*/
/* */
/* {% block body %}*/
/*     <div class="sf-reset">*/
/*         <div class="block-exception">*/
/*             <h1>This request redirects to <a href="{{ location }}">{{ location }}</a>.</h1>*/
/* */
/*             <p>*/
/*                 <small>*/
/*                     The redirect was intercepted by the web debug toolbar to help debugging.*/
/*                     For more information, see the "intercept-redirects" option of the Profiler.*/
/*                 </small>*/
/*             </p>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
