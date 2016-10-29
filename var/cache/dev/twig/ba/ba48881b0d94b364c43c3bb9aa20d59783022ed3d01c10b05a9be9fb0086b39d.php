<?php

/* @Framework/Form/repeated_row.html.php */
class __TwigTemplate_d50ca85eaeb32f97475ad56ac60b63218a4e6a1e8a7440f90cab2e7fec8518ce extends Twig_Template
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
        $__internal_d48b8d0abb4da628804da1388751cf570c31b0ca0b594dd46b5e6436b348a0b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d48b8d0abb4da628804da1388751cf570c31b0ca0b594dd46b5e6436b348a0b9->enter($__internal_d48b8d0abb4da628804da1388751cf570c31b0ca0b594dd46b5e6436b348a0b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_rows') ?>
";
        
        $__internal_d48b8d0abb4da628804da1388751cf570c31b0ca0b594dd46b5e6436b348a0b9->leave($__internal_d48b8d0abb4da628804da1388751cf570c31b0ca0b594dd46b5e6436b348a0b9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/repeated_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo \$view['form']->block(\$form, 'form_rows') ?>
";
    }
}
