<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_c095a9322207ec170351209e7889fd338f7899a485c18481412efe90c76ca3f3 extends Twig_Template
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
        $__internal_8348b12bb8fdb7d74881b6a3b1b2193ab82e0e9ba6f1f368b732e9a21f7b1f95 = $this->env->getExtension("native_profiler");
        $__internal_8348b12bb8fdb7d74881b6a3b1b2193ab82e0e9ba6f1f368b732e9a21f7b1f95->enter($__internal_8348b12bb8fdb7d74881b6a3b1b2193ab82e0e9ba6f1f368b732e9a21f7b1f95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

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
        
        $__internal_8348b12bb8fdb7d74881b6a3b1b2193ab82e0e9ba6f1f368b732e9a21f7b1f95->leave($__internal_8348b12bb8fdb7d74881b6a3b1b2193ab82e0e9ba6f1f368b732e9a21f7b1f95_prof);

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
}
/* Oops! An Error Occurred*/
/* =======================*/
/* */
/* The server returned a "{{ status_code }} {{ status_text }}".*/
/* */
/* Something is broken. Please let us know what you were doing when this error occurred.*/
/* We will fix it as soon as possible. Sorry for any inconvenience caused.*/
/* */
