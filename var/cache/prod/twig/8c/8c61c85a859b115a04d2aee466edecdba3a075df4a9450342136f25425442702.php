<?php

/* ESIEAPlatformBundle:Advert:email.txt.twig */
class __TwigTemplate_cdda9ed4cd9fcf9c09fbb02077a503a64c91f25a2f7ab221cb4c73e6755364ee extends Twig_Template
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
Bonjour ";
        // line 3
        echo (isset($context["pseudo"]) ? $context["pseudo"] : null);
        echo ",

Toute l'équipe du site se joint à moi pour vous souhaiter
la bienvenue sur notre site !

Revenez nous voir souvent !";
    }

    public function getTemplateName()
    {
        return "ESIEAPlatformBundle:Advert:email.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 3,  19 => 2,);
    }

    public function getSource()
    {
        return "";
    }
}
