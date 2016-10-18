<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_2231ba01bdf36b25f87493e4435c9590ffd97a35133b03fa5731f3d3c15ae29c extends Twig_Template
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
        $__internal_c49a4ddae72c9409f1250c6cdb6a98a91459273e5744f5916c39bf562b171a0d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c49a4ddae72c9409f1250c6cdb6a98a91459273e5744f5916c39bf562b171a0d->enter($__internal_c49a4ddae72c9409f1250c6cdb6a98a91459273e5744f5916c39bf562b171a0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_c49a4ddae72c9409f1250c6cdb6a98a91459273e5744f5916c39bf562b171a0d->leave($__internal_c49a4ddae72c9409f1250c6cdb6a98a91459273e5744f5916c39bf562b171a0d_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
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
