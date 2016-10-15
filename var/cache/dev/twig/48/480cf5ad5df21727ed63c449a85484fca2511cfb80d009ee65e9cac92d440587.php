<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_b2bf50988cfdfbd16ea78c9af9e93bb7195c20f97c4aa73e29c41b2f91a9c5b4 extends Twig_Template
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
        $__internal_5b354d0ca8aee5350a2af98a1f986bab60b1c847718e30254151f002d61b7b34 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b354d0ca8aee5350a2af98a1f986bab60b1c847718e30254151f002d61b7b34->enter($__internal_5b354d0ca8aee5350a2af98a1f986bab60b1c847718e30254151f002d61b7b34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_5b354d0ca8aee5350a2af98a1f986bab60b1c847718e30254151f002d61b7b34->leave($__internal_5b354d0ca8aee5350a2af98a1f986bab60b1c847718e30254151f002d61b7b34_prof);

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
