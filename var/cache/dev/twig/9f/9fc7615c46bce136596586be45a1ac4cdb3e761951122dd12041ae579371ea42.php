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
        $__internal_4e0b64ee32bffa85082cb765df3a6dbfdf2da62a8c2edf58bf5346f44315dfdb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e0b64ee32bffa85082cb765df3a6dbfdf2da62a8c2edf58bf5346f44315dfdb->enter($__internal_4e0b64ee32bffa85082cb765df3a6dbfdf2da62a8c2edf58bf5346f44315dfdb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

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
        
        $__internal_4e0b64ee32bffa85082cb765df3a6dbfdf2da62a8c2edf58bf5346f44315dfdb->leave($__internal_4e0b64ee32bffa85082cb765df3a6dbfdf2da62a8c2edf58bf5346f44315dfdb_prof);

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
