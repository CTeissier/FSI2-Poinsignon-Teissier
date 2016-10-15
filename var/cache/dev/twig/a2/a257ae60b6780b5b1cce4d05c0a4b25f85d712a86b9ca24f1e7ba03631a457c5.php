<?php

/* @Twig/Exception/error.txt.twig */
class __TwigTemplate_4f3c3e745a6c12b502434669a4400472660673b349ca60c4186e698f5c6a59a5 extends Twig_Template
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
        $__internal_32f374757f025ede2753555dc21cf764a50cef236808e5a2cf3148f4c49c4b8e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_32f374757f025ede2753555dc21cf764a50cef236808e5a2cf3148f4c49c4b8e->enter($__internal_32f374757f025ede2753555dc21cf764a50cef236808e5a2cf3148f4c49c4b8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code"));
        echo " ";
        echo (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_32f374757f025ede2753555dc21cf764a50cef236808e5a2cf3148f4c49c4b8e->leave($__internal_32f374757f025ede2753555dc21cf764a50cef236808e5a2cf3148f4c49c4b8e_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 4,  22 => 1,);
    }

    public function getSource()
    {
        return "Oops! An Error Occurred
=======================

The server returned a \"{{ status_code }} {{ status_text }}\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
    }
}
