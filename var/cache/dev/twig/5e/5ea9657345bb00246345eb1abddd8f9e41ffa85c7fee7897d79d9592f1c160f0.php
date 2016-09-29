<?php

/* ESIEAPlatformBundle:Advert:view.html.twig */
class __TwigTemplate_d76b423ffa8d5d20b478062724dc2b6e9e783ba26d509629eb576a495ea8f538 extends Twig_Template
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
        $__internal_ed1bf67128ea5b3fddbcecc2286d897afeb902d7b0fed02c34332197f5795bbe = $this->env->getExtension("native_profiler");
        $__internal_ed1bf67128ea5b3fddbcecc2286d897afeb902d7b0fed02c34332197f5795bbe->enter($__internal_ed1bf67128ea5b3fddbcecc2286d897afeb902d7b0fed02c34332197f5795bbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ESIEAPlatformBundle:Advert:view.html.twig"));

        // line 2
        echo "

<!DOCTYPE html>

<html>

  <head>

    <title>Affichage de l'annonce ";
        // line 10
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "</title>

  </head>

  <body>

    <h1>Affichage de l'annonce n°";
        // line 16
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo " !</h1>


    <div>

      ";
        // line 22
        echo "
      ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "info"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 24
            echo "
        <p>Message flash : ";
            // line 25
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "</p>

      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "
    </div>


    <p>

      Ici nous pourrons lire l'annonce ayant comme id : ";
        // line 34
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "<br />

      Mais pour l'instant, nous ne savons pas encore le faire, cela viendra !

    </p>

  </body>

</html>";
        
        $__internal_ed1bf67128ea5b3fddbcecc2286d897afeb902d7b0fed02c34332197f5795bbe->leave($__internal_ed1bf67128ea5b3fddbcecc2286d897afeb902d7b0fed02c34332197f5795bbe_prof);

    }

    public function getTemplateName()
    {
        return "ESIEAPlatformBundle:Advert:view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 34,  68 => 28,  59 => 25,  56 => 24,  52 => 23,  49 => 22,  41 => 16,  32 => 10,  22 => 2,);
    }
}
/* {# src/OC/PlatformBundle/Resources/view/Advert/view.html.twig #}*/
/* */
/* */
/* <!DOCTYPE html>*/
/* */
/* <html>*/
/* */
/*   <head>*/
/* */
/*     <title>Affichage de l'annonce {{ id }}</title>*/
/* */
/*   </head>*/
/* */
/*   <body>*/
/* */
/*     <h1>Affichage de l'annonce n°{{ id }} !</h1>*/
/* */
/* */
/*     <div>*/
/* */
/*       {# On affiche tous les messages flash dont le nom est « info » #}*/
/* */
/*       {% for message in app.session.flashbag.get('info') %}*/
/* */
/*         <p>Message flash : {{ message }}</p>*/
/* */
/*       {% endfor %}*/
/* */
/*     </div>*/
/* */
/* */
/*     <p>*/
/* */
/*       Ici nous pourrons lire l'annonce ayant comme id : {{ id }}<br />*/
/* */
/*       Mais pour l'instant, nous ne savons pas encore le faire, cela viendra !*/
/* */
/*     </p>*/
/* */
/*   </body>*/
/* */
/* </html>*/
