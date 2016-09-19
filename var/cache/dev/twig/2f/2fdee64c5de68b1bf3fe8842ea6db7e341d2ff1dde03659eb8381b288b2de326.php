<?php

/* ESIEAPlatformBundle:Advert:index.html.twig */
class __TwigTemplate_eeb10081da31207f0dae5d449099890934646848b572a1776c95d0ea70b6b5d3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_25afb817620b2e0080a3d814a538066abbb850cfed302fb5e3d33ee386513dcb = $this->env->getExtension("native_profiler");
        $__internal_25afb817620b2e0080a3d814a538066abbb850cfed302fb5e3d33ee386513dcb->enter($__internal_25afb817620b2e0080a3d814a538066abbb850cfed302fb5e3d33ee386513dcb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ESIEAPlatformBundle:Advert:index.html.twig"));

        // line 2
        echo "

<!DOCTYPE html>

<html>

  <head>

    <title>Bienvenue sur ma première page avec OpenClassrooms !</title>

  </head>

  <body>

    <h1>Hello World ";
        // line 16
        echo twig_escape_filter($this->env, (isset($context["nom"]) ? $context["nom"] : $this->getContext($context, "nom")), "html", null, true);
        echo " !</h1>


    <p>

      Le Hello World est un grand classique en programmation.

      Il signifie énormément, car cela veut dire que vous avez

      réussi à exécuter le programme pour accomplir une tâche simple :

      afficher ce hello world !

    </p>

  </body>

</html>";
        
        $__internal_25afb817620b2e0080a3d814a538066abbb850cfed302fb5e3d33ee386513dcb->leave($__internal_25afb817620b2e0080a3d814a538066abbb850cfed302fb5e3d33ee386513dcb_prof);

    }

    public function getTemplateName()
    {
        return "ESIEAPlatformBundle:Advert:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 16,  22 => 2,);
    }
}
/* {# src/OC/PlatformBundle/Resources/views/Advert/index.html.twig #}*/
/* */
/* */
/* <!DOCTYPE html>*/
/* */
/* <html>*/
/* */
/*   <head>*/
/* */
/*     <title>Bienvenue sur ma première page avec OpenClassrooms !</title>*/
/* */
/*   </head>*/
/* */
/*   <body>*/
/* */
/*     <h1>Hello World {{ nom }} !</h1>*/
/* */
/* */
/*     <p>*/
/* */
/*       Le Hello World est un grand classique en programmation.*/
/* */
/*       Il signifie énormément, car cela veut dire que vous avez*/
/* */
/*       réussi à exécuter le programme pour accomplir une tâche simple :*/
/* */
/*       afficher ce hello world !*/
/* */
/*     </p>*/
/* */
/*   </body>*/
/* */
/* </html>*/
