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
        $__internal_a935350ebe9fac371612c81c98405723f23ca904c6bc5695852ce26b56f0bb6f = $this->env->getExtension("native_profiler");
        $__internal_a935350ebe9fac371612c81c98405723f23ca904c6bc5695852ce26b56f0bb6f->enter($__internal_a935350ebe9fac371612c81c98405723f23ca904c6bc5695852ce26b56f0bb6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a935350ebe9fac371612c81c98405723f23ca904c6bc5695852ce26b56f0bb6f->leave($__internal_a935350ebe9fac371612c81c98405723f23ca904c6bc5695852ce26b56f0bb6f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_c9afea0a069424972dd5f6e245e1a4a1647f0884a91e9a4b4fcfef9cbdf69c37 = $this->env->getExtension("native_profiler");
        $__internal_c9afea0a069424972dd5f6e245e1a4a1647f0884a91e9a4b4fcfef9cbdf69c37->enter($__internal_c9afea0a069424972dd5f6e245e1a4a1647f0884a91e9a4b4fcfef9cbdf69c37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_c9afea0a069424972dd5f6e245e1a4a1647f0884a91e9a4b4fcfef9cbdf69c37->leave($__internal_c9afea0a069424972dd5f6e245e1a4a1647f0884a91e9a4b4fcfef9cbdf69c37_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_39b253f8703badd1b3813449d9a66a67898ab48d95db37aaa511001a9fbdf5d3 = $this->env->getExtension("native_profiler");
        $__internal_39b253f8703badd1b3813449d9a66a67898ab48d95db37aaa511001a9fbdf5d3->enter($__internal_39b253f8703badd1b3813449d9a66a67898ab48d95db37aaa511001a9fbdf5d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_39b253f8703badd1b3813449d9a66a67898ab48d95db37aaa511001a9fbdf5d3->leave($__internal_39b253f8703badd1b3813449d9a66a67898ab48d95db37aaa511001a9fbdf5d3_prof);

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
