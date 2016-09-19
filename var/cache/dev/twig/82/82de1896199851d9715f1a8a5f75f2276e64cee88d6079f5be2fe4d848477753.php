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
        $__internal_4124de45a852df792550d6592041e01db99f3b35f817354d44eeee08b0ca4e7b = $this->env->getExtension("native_profiler");
        $__internal_4124de45a852df792550d6592041e01db99f3b35f817354d44eeee08b0ca4e7b->enter($__internal_4124de45a852df792550d6592041e01db99f3b35f817354d44eeee08b0ca4e7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_4124de45a852df792550d6592041e01db99f3b35f817354d44eeee08b0ca4e7b->leave($__internal_4124de45a852df792550d6592041e01db99f3b35f817354d44eeee08b0ca4e7b_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_f2bad7ec18efde4c100a4ba8ba697e909ca503aa36701234ccacbdf432ee1db9 = $this->env->getExtension("native_profiler");
        $__internal_f2bad7ec18efde4c100a4ba8ba697e909ca503aa36701234ccacbdf432ee1db9->enter($__internal_f2bad7ec18efde4c100a4ba8ba697e909ca503aa36701234ccacbdf432ee1db9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_f2bad7ec18efde4c100a4ba8ba697e909ca503aa36701234ccacbdf432ee1db9->leave($__internal_f2bad7ec18efde4c100a4ba8ba697e909ca503aa36701234ccacbdf432ee1db9_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_2781d7d1d9e228505efb176c93f9c48ce39aec8db95ec19bca3cbb5533239322 = $this->env->getExtension("native_profiler");
        $__internal_2781d7d1d9e228505efb176c93f9c48ce39aec8db95ec19bca3cbb5533239322->enter($__internal_2781d7d1d9e228505efb176c93f9c48ce39aec8db95ec19bca3cbb5533239322_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_2781d7d1d9e228505efb176c93f9c48ce39aec8db95ec19bca3cbb5533239322->leave($__internal_2781d7d1d9e228505efb176c93f9c48ce39aec8db95ec19bca3cbb5533239322_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_b29a0295eca3fcb95057ac15cd5b20871b77e1cd688d67bc0b16792b3ee77877 = $this->env->getExtension("native_profiler");
        $__internal_b29a0295eca3fcb95057ac15cd5b20871b77e1cd688d67bc0b16792b3ee77877->enter($__internal_b29a0295eca3fcb95057ac15cd5b20871b77e1cd688d67bc0b16792b3ee77877_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_b29a0295eca3fcb95057ac15cd5b20871b77e1cd688d67bc0b16792b3ee77877->leave($__internal_b29a0295eca3fcb95057ac15cd5b20871b77e1cd688d67bc0b16792b3ee77877_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_834dc689efd687ccfc24168f1d7a27eecb1b6ad69ca9193d6a8f2379270d0b09 = $this->env->getExtension("native_profiler");
        $__internal_834dc689efd687ccfc24168f1d7a27eecb1b6ad69ca9193d6a8f2379270d0b09->enter($__internal_834dc689efd687ccfc24168f1d7a27eecb1b6ad69ca9193d6a8f2379270d0b09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_834dc689efd687ccfc24168f1d7a27eecb1b6ad69ca9193d6a8f2379270d0b09->leave($__internal_834dc689efd687ccfc24168f1d7a27eecb1b6ad69ca9193d6a8f2379270d0b09_prof);

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
