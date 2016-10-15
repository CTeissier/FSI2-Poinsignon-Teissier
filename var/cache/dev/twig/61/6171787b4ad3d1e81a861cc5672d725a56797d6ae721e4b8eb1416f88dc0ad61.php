<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_f4038da1eb2c32f20983ba9824b47edf8c23b534322d4864697f722a7460b4e4 extends Twig_Template
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
        $__internal_d6f6def05799ef9955a04cd641dec58aa9ddef2c7e16b01be914b509b78a1f0d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d6f6def05799ef9955a04cd641dec58aa9ddef2c7e16b01be914b509b78a1f0d->enter($__internal_d6f6def05799ef9955a04cd641dec58aa9ddef2c7e16b01be914b509b78a1f0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_d6f6def05799ef9955a04cd641dec58aa9ddef2c7e16b01be914b509b78a1f0d->leave($__internal_d6f6def05799ef9955a04cd641dec58aa9ddef2c7e16b01be914b509b78a1f0d_prof);

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
