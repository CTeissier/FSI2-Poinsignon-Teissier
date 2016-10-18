<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_ea8d1dfe082a35f250c40b9d6c9cedc7cffd7baedce6e797eda8a58e9ea273a2 extends Twig_Template
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
        $__internal_723d921ab6fb524767beccfb717dc3a97c0650e5e74a7e21916cfdd226937a1d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_723d921ab6fb524767beccfb717dc3a97c0650e5e74a7e21916cfdd226937a1d->enter($__internal_723d921ab6fb524767beccfb717dc3a97c0650e5e74a7e21916cfdd226937a1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_723d921ab6fb524767beccfb717dc3a97c0650e5e74a7e21916cfdd226937a1d->leave($__internal_723d921ab6fb524767beccfb717dc3a97c0650e5e74a7e21916cfdd226937a1d_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }

    public function getSource()
    {
        return "/*
{{ status_code }} {{ status_text }}

*/
";
    }
}
