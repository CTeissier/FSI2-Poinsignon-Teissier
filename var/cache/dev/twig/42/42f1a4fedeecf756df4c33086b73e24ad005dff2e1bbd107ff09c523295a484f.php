<?php

/* @Twig/Exception/error.xml.twig */
class __TwigTemplate_46d81f05b87719b2729e25df352a1b87b724c17e57d90ed6f1311d2b33ec5abe extends Twig_Template
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
        $__internal_1fc520005c4d14039dcbd2840e4f0496adcd2393bad86a79c4ec88c581b6b4bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1fc520005c4d14039dcbd2840e4f0496adcd2393bad86a79c4ec88c581b6b4bf->enter($__internal_1fc520005c4d14039dcbd2840e4f0496adcd2393bad86a79c4ec88c581b6b4bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_1fc520005c4d14039dcbd2840e4f0496adcd2393bad86a79c4ec88c581b6b4bf->leave($__internal_1fc520005c4d14039dcbd2840e4f0496adcd2393bad86a79c4ec88c581b6b4bf_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 3,  22 => 1,);
    }

    public function getSource()
    {
        return "<?xml version=\"1.0\" encoding=\"{{ _charset }}\" ?>

<error code=\"{{ status_code }}\" message=\"{{ status_text }}\" />
";
    }
}
