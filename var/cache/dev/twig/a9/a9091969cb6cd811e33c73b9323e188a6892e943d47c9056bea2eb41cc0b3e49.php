<?php

/* ::base.html.twig */
class __TwigTemplate_948356f0d1829c4d3e116250a6535438f65482c08ae07524d862937528262fd9 extends Twig_Template
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
        $__internal_e2a7ba3d63f96a91a78b11aeafe58d06d6efad6b876c7a17551561a73c07d572 = $this->env->getExtension("native_profiler");
        $__internal_e2a7ba3d63f96a91a78b11aeafe58d06d6efad6b876c7a17551561a73c07d572->enter($__internal_e2a7ba3d63f96a91a78b11aeafe58d06d6efad6b876c7a17551561a73c07d572_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_e2a7ba3d63f96a91a78b11aeafe58d06d6efad6b876c7a17551561a73c07d572->leave($__internal_e2a7ba3d63f96a91a78b11aeafe58d06d6efad6b876c7a17551561a73c07d572_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_457d9232e41e73c563b482625c095da5405ee5ab00f85391e6f875f89f8234de = $this->env->getExtension("native_profiler");
        $__internal_457d9232e41e73c563b482625c095da5405ee5ab00f85391e6f875f89f8234de->enter($__internal_457d9232e41e73c563b482625c095da5405ee5ab00f85391e6f875f89f8234de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_457d9232e41e73c563b482625c095da5405ee5ab00f85391e6f875f89f8234de->leave($__internal_457d9232e41e73c563b482625c095da5405ee5ab00f85391e6f875f89f8234de_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_83f6718f8563107663daa1ba56b1d67efa930e10410a3eb93f21a33d14d804aa = $this->env->getExtension("native_profiler");
        $__internal_83f6718f8563107663daa1ba56b1d67efa930e10410a3eb93f21a33d14d804aa->enter($__internal_83f6718f8563107663daa1ba56b1d67efa930e10410a3eb93f21a33d14d804aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_83f6718f8563107663daa1ba56b1d67efa930e10410a3eb93f21a33d14d804aa->leave($__internal_83f6718f8563107663daa1ba56b1d67efa930e10410a3eb93f21a33d14d804aa_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_01ed322ae4d9a2d1f1c4bfa8f16180cf83a079c970a555b475600fed1601d783 = $this->env->getExtension("native_profiler");
        $__internal_01ed322ae4d9a2d1f1c4bfa8f16180cf83a079c970a555b475600fed1601d783->enter($__internal_01ed322ae4d9a2d1f1c4bfa8f16180cf83a079c970a555b475600fed1601d783_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_01ed322ae4d9a2d1f1c4bfa8f16180cf83a079c970a555b475600fed1601d783->leave($__internal_01ed322ae4d9a2d1f1c4bfa8f16180cf83a079c970a555b475600fed1601d783_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_802ff7c9cd74f4dd23b36d56099defbd1649ae838e2be2d9f1534af07e081512 = $this->env->getExtension("native_profiler");
        $__internal_802ff7c9cd74f4dd23b36d56099defbd1649ae838e2be2d9f1534af07e081512->enter($__internal_802ff7c9cd74f4dd23b36d56099defbd1649ae838e2be2d9f1534af07e081512_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_802ff7c9cd74f4dd23b36d56099defbd1649ae838e2be2d9f1534af07e081512->leave($__internal_802ff7c9cd74f4dd23b36d56099defbd1649ae838e2be2d9f1534af07e081512_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
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
