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
        $__internal_bc7be0dcc2d821b941b59f833847a0e694458b6b962cb0e6c71ca79daf5333a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc7be0dcc2d821b941b59f833847a0e694458b6b962cb0e6c71ca79daf5333a4->enter($__internal_bc7be0dcc2d821b941b59f833847a0e694458b6b962cb0e6c71ca79daf5333a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget',  array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_bc7be0dcc2d821b941b59f833847a0e694458b6b962cb0e6c71ca79daf5333a4->leave($__internal_bc7be0dcc2d821b941b59f833847a0e694458b6b962cb0e6c71ca79daf5333a4_prof);

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
