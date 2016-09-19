<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_01f5a493a0304342ddd6fa5a974f8fc4b78e54c06b2854ff71f8e6613c867477 extends Twig_Template
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
        $__internal_8da7834c4c9369b98666b782cb126e89dc0fdee1f89ddddb13faa770481e52b4 = $this->env->getExtension("native_profiler");
        $__internal_8da7834c4c9369b98666b782cb126e89dc0fdee1f89ddddb13faa770481e52b4->enter($__internal_8da7834c4c9369b98666b782cb126e89dc0fdee1f89ddddb13faa770481e52b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_8da7834c4c9369b98666b782cb126e89dc0fdee1f89ddddb13faa770481e52b4->leave($__internal_8da7834c4c9369b98666b782cb126e89dc0fdee1f89ddddb13faa770481e52b4_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
