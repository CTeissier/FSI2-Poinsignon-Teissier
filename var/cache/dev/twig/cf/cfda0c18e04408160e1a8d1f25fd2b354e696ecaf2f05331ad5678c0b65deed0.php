<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_4583052e401121b5d3c2cb58e3ea7214e54576a0bb999690d16e2c5c28aa2709 extends Twig_Template
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
        $__internal_c7c8f1c15693b4fbf57f6ac855629a305c775bb803d0b68ffa5b18330ae5103c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c7c8f1c15693b4fbf57f6ac855629a305c775bb803d0b68ffa5b18330ae5103c->enter($__internal_c7c8f1c15693b4fbf57f6ac855629a305c775bb803d0b68ffa5b18330ae5103c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_c7c8f1c15693b4fbf57f6ac855629a305c775bb803d0b68ffa5b18330ae5103c->leave($__internal_c7c8f1c15693b4fbf57f6ac855629a305c775bb803d0b68ffa5b18330ae5103c_prof);

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
