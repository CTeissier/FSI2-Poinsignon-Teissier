<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_5acae52be30c3e434637a9933069b2d9227745507dc8a40e26de5f1a98dadf0f extends Twig_Template
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
        $__internal_9dcac2ab87e23b7e0e8010bacd580703e3d2216121140a26e5e07d9842c4fb2a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9dcac2ab87e23b7e0e8010bacd580703e3d2216121140a26e5e07d9842c4fb2a->enter($__internal_9dcac2ab87e23b7e0e8010bacd580703e3d2216121140a26e5e07d9842c4fb2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_9dcac2ab87e23b7e0e8010bacd580703e3d2216121140a26e5e07d9842c4fb2a->leave($__internal_9dcac2ab87e23b7e0e8010bacd580703e3d2216121140a26e5e07d9842c4fb2a_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
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
