<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_6b8fef70a748c65a04f96cecc5d5e46940bfcccd4c4a125f7f5a85e60016fbb4 extends Twig_Template
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
        $__internal_5e15363ab71a4c64d59cb98f6345005ea561d45059eb0ec0feeaff346e796497 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e15363ab71a4c64d59cb98f6345005ea561d45059eb0ec0feeaff346e796497->enter($__internal_5e15363ab71a4c64d59cb98f6345005ea561d45059eb0ec0feeaff346e796497_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

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
        
        $__internal_5e15363ab71a4c64d59cb98f6345005ea561d45059eb0ec0feeaff346e796497->leave($__internal_5e15363ab71a4c64d59cb98f6345005ea561d45059eb0ec0feeaff346e796497_prof);

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
