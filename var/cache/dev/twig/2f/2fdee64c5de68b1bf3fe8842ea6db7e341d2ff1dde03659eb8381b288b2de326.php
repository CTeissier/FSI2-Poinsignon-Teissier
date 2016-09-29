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
        $__internal_2bf2bebda600de401a34a3a3bb0fc9ab9add0657fd9e71f2ed0e63a42f3765ec = $this->env->getExtension("native_profiler");
        $__internal_2bf2bebda600de401a34a3a3bb0fc9ab9add0657fd9e71f2ed0e63a42f3765ec->enter($__internal_2bf2bebda600de401a34a3a3bb0fc9ab9add0657fd9e71f2ed0e63a42f3765ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ESIEAPlatformBundle:Advert:index.html.twig"));

        // line 2
        echo "
<!DOCTYPE html>
<html>
  <head>
    <title>Bienvenue sur ma première page avec OpenClassrooms !</title>
  </head>
  <body>
    <h1>Hello ";
        // line 9
        echo twig_escape_filter($this->env, (isset($context["nom"]) ? $context["nom"] : $this->getContext($context, "nom")), "html", null, true);
        echo " !</h1>

    <p>
      Le Hello World est un grand classique en programmation.
      Il signifie énormément, car cela veut dire que vous avez
      réussi à exécuter le programme pour accomplir une tâche simple :
      afficher ce hello world !
    </p>
    <p>
      Lien vers l'annonce d'id 5 : <a href=\"";
        // line 18
        echo $this->env->getExtension('routing')->getPath("esiea_platform_view", array("id" => 5));
        echo "\">ici</a>
    </p>
  </body>
</html>
";
        
        $__internal_2bf2bebda600de401a34a3a3bb0fc9ab9add0657fd9e71f2ed0e63a42f3765ec->leave($__internal_2bf2bebda600de401a34a3a3bb0fc9ab9add0657fd9e71f2ed0e63a42f3765ec_prof);

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
        return array (  43 => 18,  31 => 9,  22 => 2,);
    }
}
/* {# src/ESIEA/PlatformBundle/Resources/views/Advert/index.html.twig #}*/
/* */
/* <!DOCTYPE html>*/
/* <html>*/
/*   <head>*/
/*     <title>Bienvenue sur ma première page avec OpenClassrooms !</title>*/
/*   </head>*/
/*   <body>*/
/*     <h1>Hello {{ nom }} !</h1>*/
/* */
/*     <p>*/
/*       Le Hello World est un grand classique en programmation.*/
/*       Il signifie énormément, car cela veut dire que vous avez*/
/*       réussi à exécuter le programme pour accomplir une tâche simple :*/
/*       afficher ce hello world !*/
/*     </p>*/
/*     <p>*/
/*       Lien vers l'annonce d'id 5 : <a href="{{ path('esiea_platform_view', {'id': 5}) }}">ici</a>*/
/*     </p>*/
/*   </body>*/
/* </html>*/
/* */
