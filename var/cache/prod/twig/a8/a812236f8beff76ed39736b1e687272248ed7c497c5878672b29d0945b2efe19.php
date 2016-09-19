<?php

/* @ESIEAPlatform/Advert/index.html.twig */
class __TwigTemplate_213f788ffcd0671af2f2e94ad12d7573efed049f47efd651650137498cb248c0 extends Twig_Template
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
        echo twig_escape_filter($this->env, (isset($context["nom"]) ? $context["nom"] : null), "html", null, true);
        echo " !</h1>


    <p>

      Le Hello World est un grand classique en programmation.

      Il signifie énormément, car cela veut dire que vous avez

      réussi à exécuter le programme pour accomplir une tâche simple :

      afficher ce hello world !

    </p>

  </body>

</html>";
    }

    public function getTemplateName()
    {
        return "@ESIEAPlatform/Advert/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 16,  19 => 2,);
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
