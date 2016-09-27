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
        $__internal_ede74355f871f5d783bfec32da6b853aa3618133c236f119bb7a9cd7dc88d7bf = $this->env->getExtension("native_profiler");
        $__internal_ede74355f871f5d783bfec32da6b853aa3618133c236f119bb7a9cd7dc88d7bf->enter($__internal_ede74355f871f5d783bfec32da6b853aa3618133c236f119bb7a9cd7dc88d7bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ede74355f871f5d783bfec32da6b853aa3618133c236f119bb7a9cd7dc88d7bf->leave($__internal_ede74355f871f5d783bfec32da6b853aa3618133c236f119bb7a9cd7dc88d7bf_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_9a01b14f3634b8121bc0a7b78995a69d3c7f9aedd5133c59f3951a9c5e286c0a = $this->env->getExtension("native_profiler");
        $__internal_9a01b14f3634b8121bc0a7b78995a69d3c7f9aedd5133c59f3951a9c5e286c0a->enter($__internal_9a01b14f3634b8121bc0a7b78995a69d3c7f9aedd5133c59f3951a9c5e286c0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_9a01b14f3634b8121bc0a7b78995a69d3c7f9aedd5133c59f3951a9c5e286c0a->leave($__internal_9a01b14f3634b8121bc0a7b78995a69d3c7f9aedd5133c59f3951a9c5e286c0a_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_679efbf3b4d65ff750b29b2dc52ad6bd7d7ac46082f9aba9879e97a4d92bca33 = $this->env->getExtension("native_profiler");
        $__internal_679efbf3b4d65ff750b29b2dc52ad6bd7d7ac46082f9aba9879e97a4d92bca33->enter($__internal_679efbf3b4d65ff750b29b2dc52ad6bd7d7ac46082f9aba9879e97a4d92bca33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_679efbf3b4d65ff750b29b2dc52ad6bd7d7ac46082f9aba9879e97a4d92bca33->leave($__internal_679efbf3b4d65ff750b29b2dc52ad6bd7d7ac46082f9aba9879e97a4d92bca33_prof);

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
