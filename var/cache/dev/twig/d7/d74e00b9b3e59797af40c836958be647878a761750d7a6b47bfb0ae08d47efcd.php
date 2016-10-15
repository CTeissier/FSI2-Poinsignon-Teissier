<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_a07e6ff076875ff071c1068196ecd6319128d4b13a2ac5799cce9234ce0f5451 extends Twig_Template
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
        $__internal_106cf75a0d0b1745774ed9ec8cd13db8724aa1d7131b2753de2002636d6972df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_106cf75a0d0b1745774ed9ec8cd13db8724aa1d7131b2753de2002636d6972df->enter($__internal_106cf75a0d0b1745774ed9ec8cd13db8724aa1d7131b2753de2002636d6972df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_106cf75a0d0b1745774ed9ec8cd13db8724aa1d7131b2753de2002636d6972df->leave($__internal_106cf75a0d0b1745774ed9ec8cd13db8724aa1d7131b2753de2002636d6972df_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'password')) ?>
";
    }
}
