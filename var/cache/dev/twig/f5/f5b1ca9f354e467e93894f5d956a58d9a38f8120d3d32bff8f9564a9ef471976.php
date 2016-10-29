<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_b656b9c54997746a2e99b8a9ee48e4dce88009040f61a5aa00c0d17a7c14dbd2 extends Twig_Template
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
        $__internal_48f298365e9b4858fef456e89b32fb9221a1b82ea9e9636987a34d29bd108d52 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_48f298365e9b4858fef456e89b32fb9221a1b82ea9e9636987a34d29bd108d52->enter($__internal_48f298365e9b4858fef456e89b32fb9221a1b82ea9e9636987a34d29bd108d52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget',  array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_48f298365e9b4858fef456e89b32fb9221a1b82ea9e9636987a34d29bd108d52->leave($__internal_48f298365e9b4858fef456e89b32fb9221a1b82ea9e9636987a34d29bd108d52_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo \$view['form']->block(\$form, 'button_widget',  array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
    }
}
