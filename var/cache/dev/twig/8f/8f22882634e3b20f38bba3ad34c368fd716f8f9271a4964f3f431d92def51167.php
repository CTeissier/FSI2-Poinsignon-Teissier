<?php

/* @ESIEAPlatform/Advert/index.html.twig */
class __TwigTemplate_3ed60b0ff9b7f80293f4cf2594c5278b942d4dc25565add025f57fa285ec352c extends Twig_Template
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
        $__internal_32384eddf32a7ffed4255205cea9351f3d20473fbdf901dbb8f3e525185fb3d7 = $this->env->getExtension("native_profiler");
        $__internal_32384eddf32a7ffed4255205cea9351f3d20473fbdf901dbb8f3e525185fb3d7->enter($__internal_32384eddf32a7ffed4255205cea9351f3d20473fbdf901dbb8f3e525185fb3d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@ESIEAPlatform/Advert/index.html.twig"));

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
        
        $__internal_32384eddf32a7ffed4255205cea9351f3d20473fbdf901dbb8f3e525185fb3d7->leave($__internal_32384eddf32a7ffed4255205cea9351f3d20473fbdf901dbb8f3e525185fb3d7_prof);

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
