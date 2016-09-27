<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_4b095fc650a67d2b05db5a0785d9640b995497b9d7b7dcbc96c909faeccc54ab extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
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
        $__internal_e802300e29234013cbe4f44cf2f254d3c237116c4e0094caa20715d14edb392b = $this->env->getExtension("native_profiler");
        $__internal_e802300e29234013cbe4f44cf2f254d3c237116c4e0094caa20715d14edb392b->enter($__internal_e802300e29234013cbe4f44cf2f254d3c237116c4e0094caa20715d14edb392b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e802300e29234013cbe4f44cf2f254d3c237116c4e0094caa20715d14edb392b->leave($__internal_e802300e29234013cbe4f44cf2f254d3c237116c4e0094caa20715d14edb392b_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_e58a2c5336c328bbb3f7e7d21f8828dc56d0d3a2e9344bd8d041d9a0a9d4184c = $this->env->getExtension("native_profiler");
        $__internal_e58a2c5336c328bbb3f7e7d21f8828dc56d0d3a2e9344bd8d041d9a0a9d4184c->enter($__internal_e58a2c5336c328bbb3f7e7d21f8828dc56d0d3a2e9344bd8d041d9a0a9d4184c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_e58a2c5336c328bbb3f7e7d21f8828dc56d0d3a2e9344bd8d041d9a0a9d4184c->leave($__internal_e58a2c5336c328bbb3f7e7d21f8828dc56d0d3a2e9344bd8d041d9a0a9d4184c_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_84d3ebcd4b95aec96113fa68f33cc1c7bc4c29c2579abe088dabe05cbd956c8e = $this->env->getExtension("native_profiler");
        $__internal_84d3ebcd4b95aec96113fa68f33cc1c7bc4c29c2579abe088dabe05cbd956c8e->enter($__internal_84d3ebcd4b95aec96113fa68f33cc1c7bc4c29c2579abe088dabe05cbd956c8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_84d3ebcd4b95aec96113fa68f33cc1c7bc4c29c2579abe088dabe05cbd956c8e->leave($__internal_84d3ebcd4b95aec96113fa68f33cc1c7bc4c29c2579abe088dabe05cbd956c8e_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_4d0fd3db33e85964dd0d67126cbddbf5179249f8d37656d33a21875ef0976d1e = $this->env->getExtension("native_profiler");
        $__internal_4d0fd3db33e85964dd0d67126cbddbf5179249f8d37656d33a21875ef0976d1e->enter($__internal_4d0fd3db33e85964dd0d67126cbddbf5179249f8d37656d33a21875ef0976d1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_4d0fd3db33e85964dd0d67126cbddbf5179249f8d37656d33a21875ef0976d1e->leave($__internal_4d0fd3db33e85964dd0d67126cbddbf5179249f8d37656d33a21875ef0976d1e_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
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
