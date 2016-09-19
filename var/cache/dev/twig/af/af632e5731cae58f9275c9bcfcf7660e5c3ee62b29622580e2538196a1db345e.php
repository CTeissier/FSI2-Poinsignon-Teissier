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
        $__internal_cd527ed0df9e9c487c22d062c362bc3775d455b82e54c2bee0335c2f201db815 = $this->env->getExtension("native_profiler");
        $__internal_cd527ed0df9e9c487c22d062c362bc3775d455b82e54c2bee0335c2f201db815->enter($__internal_cd527ed0df9e9c487c22d062c362bc3775d455b82e54c2bee0335c2f201db815_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cd527ed0df9e9c487c22d062c362bc3775d455b82e54c2bee0335c2f201db815->leave($__internal_cd527ed0df9e9c487c22d062c362bc3775d455b82e54c2bee0335c2f201db815_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_a616b0e633700501558a67449a5bf261f059d4ef60cc61f15e681eac2216e040 = $this->env->getExtension("native_profiler");
        $__internal_a616b0e633700501558a67449a5bf261f059d4ef60cc61f15e681eac2216e040->enter($__internal_a616b0e633700501558a67449a5bf261f059d4ef60cc61f15e681eac2216e040_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_a616b0e633700501558a67449a5bf261f059d4ef60cc61f15e681eac2216e040->leave($__internal_a616b0e633700501558a67449a5bf261f059d4ef60cc61f15e681eac2216e040_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_bd7e8c046f3e4b7e8ea777bdd3a6aaa16f2afedccdc5c340cf66aeb1ea3db4e4 = $this->env->getExtension("native_profiler");
        $__internal_bd7e8c046f3e4b7e8ea777bdd3a6aaa16f2afedccdc5c340cf66aeb1ea3db4e4->enter($__internal_bd7e8c046f3e4b7e8ea777bdd3a6aaa16f2afedccdc5c340cf66aeb1ea3db4e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_bd7e8c046f3e4b7e8ea777bdd3a6aaa16f2afedccdc5c340cf66aeb1ea3db4e4->leave($__internal_bd7e8c046f3e4b7e8ea777bdd3a6aaa16f2afedccdc5c340cf66aeb1ea3db4e4_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_50957c28589352f6093d05007a5c87862803b3f0441a2ebf5ffda90f18b5a984 = $this->env->getExtension("native_profiler");
        $__internal_50957c28589352f6093d05007a5c87862803b3f0441a2ebf5ffda90f18b5a984->enter($__internal_50957c28589352f6093d05007a5c87862803b3f0441a2ebf5ffda90f18b5a984_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_50957c28589352f6093d05007a5c87862803b3f0441a2ebf5ffda90f18b5a984->leave($__internal_50957c28589352f6093d05007a5c87862803b3f0441a2ebf5ffda90f18b5a984_prof);

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
