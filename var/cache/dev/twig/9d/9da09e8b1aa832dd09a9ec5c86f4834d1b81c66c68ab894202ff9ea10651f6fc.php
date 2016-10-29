<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_aae39e08f3effad1321150bb8e9a92a4bc729304ab02bde62d7e23c1c2252bdb extends Twig_Template
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
        $__internal_aa4fd1fd13aebaf247a8c2d5c9350f003635ab2832139476f57f1524e1c4bda0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa4fd1fd13aebaf247a8c2d5c9350f003635ab2832139476f57f1524e1c4bda0->enter($__internal_aa4fd1fd13aebaf247a8c2d5c9350f003635ab2832139476f57f1524e1c4bda0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_aa4fd1fd13aebaf247a8c2d5c9350f003635ab2832139476f57f1524e1c4bda0->leave($__internal_aa4fd1fd13aebaf247a8c2d5c9350f003635ab2832139476f57f1524e1c4bda0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
    }
}
