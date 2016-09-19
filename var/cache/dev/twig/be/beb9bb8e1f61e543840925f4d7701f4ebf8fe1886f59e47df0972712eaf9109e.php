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
        $__internal_ab79c7acd72f73c098ee5252152a0a6881967fd59303cb6765b1d586d6f96b26 = $this->env->getExtension("native_profiler");
        $__internal_ab79c7acd72f73c098ee5252152a0a6881967fd59303cb6765b1d586d6f96b26->enter($__internal_ab79c7acd72f73c098ee5252152a0a6881967fd59303cb6765b1d586d6f96b26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ab79c7acd72f73c098ee5252152a0a6881967fd59303cb6765b1d586d6f96b26->leave($__internal_ab79c7acd72f73c098ee5252152a0a6881967fd59303cb6765b1d586d6f96b26_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_7649177c50de4b26d8c24f96c7aa62b481a558da8ff4d4e2a0b4f9994e9eef60 = $this->env->getExtension("native_profiler");
        $__internal_7649177c50de4b26d8c24f96c7aa62b481a558da8ff4d4e2a0b4f9994e9eef60->enter($__internal_7649177c50de4b26d8c24f96c7aa62b481a558da8ff4d4e2a0b4f9994e9eef60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_7649177c50de4b26d8c24f96c7aa62b481a558da8ff4d4e2a0b4f9994e9eef60->leave($__internal_7649177c50de4b26d8c24f96c7aa62b481a558da8ff4d4e2a0b4f9994e9eef60_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_161a70b8037ff5031dad81999fafd15cfa09919e7de74131be221d7fb666fce8 = $this->env->getExtension("native_profiler");
        $__internal_161a70b8037ff5031dad81999fafd15cfa09919e7de74131be221d7fb666fce8->enter($__internal_161a70b8037ff5031dad81999fafd15cfa09919e7de74131be221d7fb666fce8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_161a70b8037ff5031dad81999fafd15cfa09919e7de74131be221d7fb666fce8->leave($__internal_161a70b8037ff5031dad81999fafd15cfa09919e7de74131be221d7fb666fce8_prof);

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
