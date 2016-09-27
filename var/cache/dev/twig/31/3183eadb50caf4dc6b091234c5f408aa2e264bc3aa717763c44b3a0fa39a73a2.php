<?php

/* @WebProfiler/Profiler/ajax_layout.html.twig */
class __TwigTemplate_392c090d727a130d0eed350f770faa22cc7c25e28df37468a13b7d4b6944227d extends Twig_Template
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
        $__internal_6857ec3b18ec0621be3abf0b91513ac95b2c3dffaf31116a5ffd816a198059db = $this->env->getExtension("native_profiler");
        $__internal_6857ec3b18ec0621be3abf0b91513ac95b2c3dffaf31116a5ffd816a198059db->enter($__internal_6857ec3b18ec0621be3abf0b91513ac95b2c3dffaf31116a5ffd816a198059db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_6857ec3b18ec0621be3abf0b91513ac95b2c3dffaf31116a5ffd816a198059db->leave($__internal_6857ec3b18ec0621be3abf0b91513ac95b2c3dffaf31116a5ffd816a198059db_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_bcbc07062ab743dbb927d5b03ebc6670e3df063a109755a4a075532fe360b21c = $this->env->getExtension("native_profiler");
        $__internal_bcbc07062ab743dbb927d5b03ebc6670e3df063a109755a4a075532fe360b21c->enter($__internal_bcbc07062ab743dbb927d5b03ebc6670e3df063a109755a4a075532fe360b21c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_bcbc07062ab743dbb927d5b03ebc6670e3df063a109755a4a075532fe360b21c->leave($__internal_bcbc07062ab743dbb927d5b03ebc6670e3df063a109755a4a075532fe360b21c_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }
}
/* {% block panel '' %}*/
/* */
