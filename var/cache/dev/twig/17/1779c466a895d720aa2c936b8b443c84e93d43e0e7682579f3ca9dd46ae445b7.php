<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_0e5da28e474ccdce15b03bf340093c52ada0c62d933c8c9df7ca07210c490e72 extends Twig_Template
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
        $__internal_fd4feefb8b2711500fdee53d980815e12cf1be18857287b3919543e6d12c25e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd4feefb8b2711500fdee53d980815e12cf1be18857287b3919543e6d12c25e2->enter($__internal_fd4feefb8b2711500fdee53d980815e12cf1be18857287b3919543e6d12c25e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_fd4feefb8b2711500fdee53d980815e12cf1be18857287b3919543e6d12c25e2->leave($__internal_fd4feefb8b2711500fdee53d980815e12cf1be18857287b3919543e6d12c25e2_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "{% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}
";
    }
}
