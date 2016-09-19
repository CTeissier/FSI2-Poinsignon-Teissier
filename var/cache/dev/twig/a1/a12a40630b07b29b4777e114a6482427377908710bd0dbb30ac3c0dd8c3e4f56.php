<?php

/* @Twig/Exception/error.xml.twig */
class __TwigTemplate_190f22727736c511ae06c20ed407c3fc3d4c51355ec6718946ae86d98b915b42 extends Twig_Template
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
        $__internal_0a4a1c4daf4c70003cfa24aa7d0dac58d7258f5a1bc49b8c08d5f9427800434c = $this->env->getExtension("native_profiler");
        $__internal_0a4a1c4daf4c70003cfa24aa7d0dac58d7258f5a1bc49b8c08d5f9427800434c->enter($__internal_0a4a1c4daf4c70003cfa24aa7d0dac58d7258f5a1bc49b8c08d5f9427800434c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.xml.twig"));

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
        
        $__internal_0a4a1c4daf4c70003cfa24aa7d0dac58d7258f5a1bc49b8c08d5f9427800434c->leave($__internal_0a4a1c4daf4c70003cfa24aa7d0dac58d7258f5a1bc49b8c08d5f9427800434c_prof);

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
}
/* <?xml version="1.0" encoding="{{ _charset }}" ?>*/
/* */
/* <error code="{{ status_code }}" message="{{ status_text }}" />*/
/* */
