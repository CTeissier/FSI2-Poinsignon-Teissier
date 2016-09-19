<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_dc93d801650f426857fe54b6bc08403b7d41fe8c9736121e5f51e092da2cb65e extends Twig_Template
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
        $__internal_46deae148e6adb92997f7095c7effadb71543cd152cb114e9fc343757582cd1f = $this->env->getExtension("native_profiler");
        $__internal_46deae148e6adb92997f7095c7effadb71543cd152cb114e9fc343757582cd1f->enter($__internal_46deae148e6adb92997f7095c7effadb71543cd152cb114e9fc343757582cd1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_46deae148e6adb92997f7095c7effadb71543cd152cb114e9fc343757582cd1f->leave($__internal_46deae148e6adb92997f7095c7effadb71543cd152cb114e9fc343757582cd1f_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}*/
/* *//* */
/* */
