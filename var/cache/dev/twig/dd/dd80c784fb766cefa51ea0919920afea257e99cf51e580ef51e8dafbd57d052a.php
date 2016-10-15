<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_5615802a4529832391391f8a70240c311fa8ed92b523bd6fec193f4ec97ad9bb extends Twig_Template
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
        $__internal_67be0410333c5ce096d29cb3e78cf19dfc1e28c7920e76c012e3e81c6164b61d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_67be0410333c5ce096d29cb3e78cf19dfc1e28c7920e76c012e3e81c6164b61d->enter($__internal_67be0410333c5ce096d29cb3e78cf19dfc1e28c7920e76c012e3e81c6164b61d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget',  array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_67be0410333c5ce096d29cb3e78cf19dfc1e28c7920e76c012e3e81c6164b61d->leave($__internal_67be0410333c5ce096d29cb3e78cf19dfc1e28c7920e76c012e3e81c6164b61d_prof);

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
