<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_f5f937d84d53df21a97742d031491ac33863b1b39ffacbc11de319eb5d7e7985 extends Twig_Template
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
        $__internal_0cd33156243d05c0698e23fcf8a260450e09e42ca7d3259ca5ab5cffcaa50d0e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0cd33156243d05c0698e23fcf8a260450e09e42ca7d3259ca5ab5cffcaa50d0e->enter($__internal_0cd33156243d05c0698e23fcf8a260450e09e42ca7d3259ca5ab5cffcaa50d0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_0cd33156243d05c0698e23fcf8a260450e09e42ca7d3259ca5ab5cffcaa50d0e->leave($__internal_0cd33156243d05c0698e23fcf8a260450e09e42ca7d3259ca5ab5cffcaa50d0e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
    }
}
