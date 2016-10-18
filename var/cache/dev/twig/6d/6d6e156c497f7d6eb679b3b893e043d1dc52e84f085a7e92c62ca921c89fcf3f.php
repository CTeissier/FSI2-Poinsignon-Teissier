<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_625cddaee1e281f95e6026c3adb0b75f8c6418c5d40c86a7f4e1c0890d9f7058 extends Twig_Template
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
        $__internal_9c05122c232d15bfabef1304eb86218359e002c731d46667c9b5f10170cc5bd3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c05122c232d15bfabef1304eb86218359e002c731d46667c9b5f10170cc5bd3->enter($__internal_9c05122c232d15bfabef1304eb86218359e002c731d46667c9b5f10170cc5bd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

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
        
        $__internal_9c05122c232d15bfabef1304eb86218359e002c731d46667c9b5f10170cc5bd3->leave($__internal_9c05122c232d15bfabef1304eb86218359e002c731d46667c9b5f10170cc5bd3_prof);

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
