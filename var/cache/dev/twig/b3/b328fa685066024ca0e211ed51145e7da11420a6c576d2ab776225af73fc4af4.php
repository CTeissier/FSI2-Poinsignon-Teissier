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
        $__internal_f837e8d0b5a8420a66ec980ecfdc0aea4f086c0706fa57e5b3ef46938e98e17c = $this->env->getExtension("native_profiler");
        $__internal_f837e8d0b5a8420a66ec980ecfdc0aea4f086c0706fa57e5b3ef46938e98e17c->enter($__internal_f837e8d0b5a8420a66ec980ecfdc0aea4f086c0706fa57e5b3ef46938e98e17c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_f837e8d0b5a8420a66ec980ecfdc0aea4f086c0706fa57e5b3ef46938e98e17c->leave($__internal_f837e8d0b5a8420a66ec980ecfdc0aea4f086c0706fa57e5b3ef46938e98e17c_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_c9e3b6fa9b064048a359c0c774fd3c60b1469246e4f53049721c303ce7e1a6b3 = $this->env->getExtension("native_profiler");
        $__internal_c9e3b6fa9b064048a359c0c774fd3c60b1469246e4f53049721c303ce7e1a6b3->enter($__internal_c9e3b6fa9b064048a359c0c774fd3c60b1469246e4f53049721c303ce7e1a6b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_c9e3b6fa9b064048a359c0c774fd3c60b1469246e4f53049721c303ce7e1a6b3->leave($__internal_c9e3b6fa9b064048a359c0c774fd3c60b1469246e4f53049721c303ce7e1a6b3_prof);

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
