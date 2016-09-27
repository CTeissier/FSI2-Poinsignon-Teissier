<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_7b4839fc343b17a23c497a59eb45b83cb6a2adba9c8008cda5abc78ef80320b9 extends Twig_Template
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
        $__internal_f58a93aa17848fe684fed579e364dab67e56fb321124a28549448d5ca94a6b80 = $this->env->getExtension("native_profiler");
        $__internal_f58a93aa17848fe684fed579e364dab67e56fb321124a28549448d5ca94a6b80->enter($__internal_f58a93aa17848fe684fed579e364dab67e56fb321124a28549448d5ca94a6b80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_f58a93aa17848fe684fed579e364dab67e56fb321124a28549448d5ca94a6b80->leave($__internal_f58a93aa17848fe684fed579e364dab67e56fb321124a28549448d5ca94a6b80_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_dbf2ee2270bed7036bfe707c83c2eea219d5d5785d9a0e0c4198f238e3610e48 = $this->env->getExtension("native_profiler");
        $__internal_dbf2ee2270bed7036bfe707c83c2eea219d5d5785d9a0e0c4198f238e3610e48->enter($__internal_dbf2ee2270bed7036bfe707c83c2eea219d5d5785d9a0e0c4198f238e3610e48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_dbf2ee2270bed7036bfe707c83c2eea219d5d5785d9a0e0c4198f238e3610e48->leave($__internal_dbf2ee2270bed7036bfe707c83c2eea219d5d5785d9a0e0c4198f238e3610e48_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }
}
/* {% block panel '' %}*/
/* */
