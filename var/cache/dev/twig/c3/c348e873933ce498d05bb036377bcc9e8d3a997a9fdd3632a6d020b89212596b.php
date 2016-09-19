<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_9c475cc89af0eb03d196b1669288ce6ec51ccff06a1c2e598d0ebeb51dd20b11 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
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
        $__internal_0603c7a1ee7a07ae455a9c25518f47af01fa377b6aab9ae2bb6d32244721cf79 = $this->env->getExtension("native_profiler");
        $__internal_0603c7a1ee7a07ae455a9c25518f47af01fa377b6aab9ae2bb6d32244721cf79->enter($__internal_0603c7a1ee7a07ae455a9c25518f47af01fa377b6aab9ae2bb6d32244721cf79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0603c7a1ee7a07ae455a9c25518f47af01fa377b6aab9ae2bb6d32244721cf79->leave($__internal_0603c7a1ee7a07ae455a9c25518f47af01fa377b6aab9ae2bb6d32244721cf79_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_ad961a9af20fe36f49406a54cf2d927912fb46a759c555794b8c46ff6906835e = $this->env->getExtension("native_profiler");
        $__internal_ad961a9af20fe36f49406a54cf2d927912fb46a759c555794b8c46ff6906835e->enter($__internal_ad961a9af20fe36f49406a54cf2d927912fb46a759c555794b8c46ff6906835e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_ad961a9af20fe36f49406a54cf2d927912fb46a759c555794b8c46ff6906835e->leave($__internal_ad961a9af20fe36f49406a54cf2d927912fb46a759c555794b8c46ff6906835e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_251deb528ce2d875f123675a8f63e8d028c09cd8a8ef9232d82a9d38ddac002e = $this->env->getExtension("native_profiler");
        $__internal_251deb528ce2d875f123675a8f63e8d028c09cd8a8ef9232d82a9d38ddac002e->enter($__internal_251deb528ce2d875f123675a8f63e8d028c09cd8a8ef9232d82a9d38ddac002e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_251deb528ce2d875f123675a8f63e8d028c09cd8a8ef9232d82a9d38ddac002e->leave($__internal_251deb528ce2d875f123675a8f63e8d028c09cd8a8ef9232d82a9d38ddac002e_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
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
