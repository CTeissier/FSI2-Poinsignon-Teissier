<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_c61ebd60298fea4e60f15b31a62e0181aa11fe22f7a89988723e7362f8de5946 extends Twig_Template
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
        $__internal_40654497974d6e8e39d7affe16a342011e29016f6afb15ee1b07ee6f0614130d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_40654497974d6e8e39d7affe16a342011e29016f6afb15ee1b07ee6f0614130d->enter($__internal_40654497974d6e8e39d7affe16a342011e29016f6afb15ee1b07ee6f0614130d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

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
        
        $__internal_40654497974d6e8e39d7affe16a342011e29016f6afb15ee1b07ee6f0614130d->leave($__internal_40654497974d6e8e39d7affe16a342011e29016f6afb15ee1b07ee6f0614130d_prof);

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
