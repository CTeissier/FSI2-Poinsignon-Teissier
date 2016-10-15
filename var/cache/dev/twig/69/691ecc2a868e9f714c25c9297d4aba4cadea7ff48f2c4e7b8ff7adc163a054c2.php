<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_478c0480d76d569b10fecfd150f2f7bbae5c4969f049c3f4fca4498a8e4e103e extends Twig_Template
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
        $__internal_7cd71391a81e8f01994af8ad1f2aa941e860fc2e86053caaa34e10d7cb3cff59 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7cd71391a81e8f01994af8ad1f2aa941e860fc2e86053caaa34e10d7cb3cff59->enter($__internal_7cd71391a81e8f01994af8ad1f2aa941e860fc2e86053caaa34e10d7cb3cff59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

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
        
        $__internal_7cd71391a81e8f01994af8ad1f2aa941e860fc2e86053caaa34e10d7cb3cff59->leave($__internal_7cd71391a81e8f01994af8ad1f2aa941e860fc2e86053caaa34e10d7cb3cff59_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
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
