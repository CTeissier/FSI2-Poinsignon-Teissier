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
        $__internal_d1d4d11a8391bcf5257d28e8bed24016b8cc113ce2f1364dba82daa02a073879 = $this->env->getExtension("native_profiler");
        $__internal_d1d4d11a8391bcf5257d28e8bed24016b8cc113ce2f1364dba82daa02a073879->enter($__internal_d1d4d11a8391bcf5257d28e8bed24016b8cc113ce2f1364dba82daa02a073879_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d1d4d11a8391bcf5257d28e8bed24016b8cc113ce2f1364dba82daa02a073879->leave($__internal_d1d4d11a8391bcf5257d28e8bed24016b8cc113ce2f1364dba82daa02a073879_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_b5c1fdd485af34df41466ed0157eda532558b46f1023b2cd57f4168e9d674d9c = $this->env->getExtension("native_profiler");
        $__internal_b5c1fdd485af34df41466ed0157eda532558b46f1023b2cd57f4168e9d674d9c->enter($__internal_b5c1fdd485af34df41466ed0157eda532558b46f1023b2cd57f4168e9d674d9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_b5c1fdd485af34df41466ed0157eda532558b46f1023b2cd57f4168e9d674d9c->leave($__internal_b5c1fdd485af34df41466ed0157eda532558b46f1023b2cd57f4168e9d674d9c_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_a3ec2f76f3fa600927955f14755bf5f386997e57c1abdad6a527f452aafa2f96 = $this->env->getExtension("native_profiler");
        $__internal_a3ec2f76f3fa600927955f14755bf5f386997e57c1abdad6a527f452aafa2f96->enter($__internal_a3ec2f76f3fa600927955f14755bf5f386997e57c1abdad6a527f452aafa2f96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_a3ec2f76f3fa600927955f14755bf5f386997e57c1abdad6a527f452aafa2f96->leave($__internal_a3ec2f76f3fa600927955f14755bf5f386997e57c1abdad6a527f452aafa2f96_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_d474d8aad21ca3cdd6059508e93cadb3e5f525a06ac133429129f101ddc924e0 = $this->env->getExtension("native_profiler");
        $__internal_d474d8aad21ca3cdd6059508e93cadb3e5f525a06ac133429129f101ddc924e0->enter($__internal_d474d8aad21ca3cdd6059508e93cadb3e5f525a06ac133429129f101ddc924e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_d474d8aad21ca3cdd6059508e93cadb3e5f525a06ac133429129f101ddc924e0->leave($__internal_d474d8aad21ca3cdd6059508e93cadb3e5f525a06ac133429129f101ddc924e0_prof);

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
