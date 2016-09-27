<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_99f21d976f4d79490db7928124d109d397c7ec2958d6c789cbb5f9448fccaf0e extends Twig_Template
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
        $__internal_7a9bcd746352c096b6315293f26312ce178425f79f4465b9883b03a9db6e3011 = $this->env->getExtension("native_profiler");
        $__internal_7a9bcd746352c096b6315293f26312ce178425f79f4465b9883b03a9db6e3011->enter($__internal_7a9bcd746352c096b6315293f26312ce178425f79f4465b9883b03a9db6e3011_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

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
        
        $__internal_7a9bcd746352c096b6315293f26312ce178425f79f4465b9883b03a9db6e3011->leave($__internal_7a9bcd746352c096b6315293f26312ce178425f79f4465b9883b03a9db6e3011_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
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
