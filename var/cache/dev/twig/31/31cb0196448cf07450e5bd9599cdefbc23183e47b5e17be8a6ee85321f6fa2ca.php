<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_086461ec85e62be370b3b49498d4f7973853946219c024ce06c82e95b222b0f1 extends Twig_Template
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
        $__internal_023ba102e05ee9069f82d457a863af91425507a4c21c756e02475f05b08801bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_023ba102e05ee9069f82d457a863af91425507a4c21c756e02475f05b08801bc->enter($__internal_023ba102e05ee9069f82d457a863af91425507a4c21c756e02475f05b08801bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_023ba102e05ee9069f82d457a863af91425507a4c21c756e02475f05b08801bc->leave($__internal_023ba102e05ee9069f82d457a863af91425507a4c21c756e02475f05b08801bc_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'url')) ?>
";
    }
}
