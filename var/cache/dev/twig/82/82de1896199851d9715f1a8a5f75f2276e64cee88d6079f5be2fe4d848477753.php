<?php

/* base.html.twig */
class __TwigTemplate_3bb10c5c8d7ca62370dc0cc75e7faf99a4fcef24114dcc3801887c1818276af7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_864976b755494f57d68fc5400874f08e43b07883e5d2e3b4c743bd7d36370dec = $this->env->getExtension("native_profiler");
        $__internal_864976b755494f57d68fc5400874f08e43b07883e5d2e3b4c743bd7d36370dec->enter($__internal_864976b755494f57d68fc5400874f08e43b07883e5d2e3b4c743bd7d36370dec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_864976b755494f57d68fc5400874f08e43b07883e5d2e3b4c743bd7d36370dec->leave($__internal_864976b755494f57d68fc5400874f08e43b07883e5d2e3b4c743bd7d36370dec_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_26bc8979a19e3cd58438cb4e4ca1de0a0e7f20f871fa3e172eb35b8660b62f55 = $this->env->getExtension("native_profiler");
        $__internal_26bc8979a19e3cd58438cb4e4ca1de0a0e7f20f871fa3e172eb35b8660b62f55->enter($__internal_26bc8979a19e3cd58438cb4e4ca1de0a0e7f20f871fa3e172eb35b8660b62f55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_26bc8979a19e3cd58438cb4e4ca1de0a0e7f20f871fa3e172eb35b8660b62f55->leave($__internal_26bc8979a19e3cd58438cb4e4ca1de0a0e7f20f871fa3e172eb35b8660b62f55_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_61a855a346c0add241c0e6d32667d60332bc0de5e31cedf279621889b7d2df2d = $this->env->getExtension("native_profiler");
        $__internal_61a855a346c0add241c0e6d32667d60332bc0de5e31cedf279621889b7d2df2d->enter($__internal_61a855a346c0add241c0e6d32667d60332bc0de5e31cedf279621889b7d2df2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_61a855a346c0add241c0e6d32667d60332bc0de5e31cedf279621889b7d2df2d->leave($__internal_61a855a346c0add241c0e6d32667d60332bc0de5e31cedf279621889b7d2df2d_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_3904f4e54f322de8a3d0078b1b1057455461bed0b4074316ffb7f3c3aa5e0169 = $this->env->getExtension("native_profiler");
        $__internal_3904f4e54f322de8a3d0078b1b1057455461bed0b4074316ffb7f3c3aa5e0169->enter($__internal_3904f4e54f322de8a3d0078b1b1057455461bed0b4074316ffb7f3c3aa5e0169_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_3904f4e54f322de8a3d0078b1b1057455461bed0b4074316ffb7f3c3aa5e0169->leave($__internal_3904f4e54f322de8a3d0078b1b1057455461bed0b4074316ffb7f3c3aa5e0169_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_c37937eeaad4dd9d951c83e96e006a5039cdc2d212bbf2c1f1af13b3defaf859 = $this->env->getExtension("native_profiler");
        $__internal_c37937eeaad4dd9d951c83e96e006a5039cdc2d212bbf2c1f1af13b3defaf859->enter($__internal_c37937eeaad4dd9d951c83e96e006a5039cdc2d212bbf2c1f1af13b3defaf859_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_c37937eeaad4dd9d951c83e96e006a5039cdc2d212bbf2c1f1af13b3defaf859->leave($__internal_c37937eeaad4dd9d951c83e96e006a5039cdc2d212bbf2c1f1af13b3defaf859_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
