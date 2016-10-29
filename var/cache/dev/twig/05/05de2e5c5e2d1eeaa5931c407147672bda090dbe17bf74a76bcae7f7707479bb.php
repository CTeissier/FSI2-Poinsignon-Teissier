<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_b788c9df7e8dce2e3221805f2a1404a6cd8db45014a36b34bdce37df60e33ddd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7a753b5ce354ee405b7f185882a8f6062f62e81a944d5a93ed75a268a8c7438d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a753b5ce354ee405b7f185882a8f6062f62e81a944d5a93ed75a268a8c7438d->enter($__internal_7a753b5ce354ee405b7f185882a8f6062f62e81a944d5a93ed75a268a8c7438d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_7a753b5ce354ee405b7f185882a8f6062f62e81a944d5a93ed75a268a8c7438d->leave($__internal_7a753b5ce354ee405b7f185882a8f6062f62e81a944d5a93ed75a268a8c7438d_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_c8b7635c52ae8c9a38e1320132ad8271e68befc4116e114a60edd99e664b27c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c8b7635c52ae8c9a38e1320132ad8271e68befc4116e114a60edd99e664b27c8->enter($__internal_c8b7635c52ae8c9a38e1320132ad8271e68befc4116e114a60edd99e664b27c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_c8b7635c52ae8c9a38e1320132ad8271e68befc4116e114a60edd99e664b27c8->leave($__internal_c8b7635c52ae8c9a38e1320132ad8271e68befc4116e114a60edd99e664b27c8_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    public function getSource()
    {
        return "{% block panel '' %}
";
    }
}
