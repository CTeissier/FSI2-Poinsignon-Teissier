<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_23e964895e59117d18a1c283ed2edfb04c348e16fd28fd7752ac3d6fc7c0a1e0 extends Twig_Template
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
        $__internal_5c24995b25d584676e3e49087b363fd7c930ffdec0bf91026fd7b2599a1de1c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c24995b25d584676e3e49087b363fd7c930ffdec0bf91026fd7b2599a1de1c8->enter($__internal_5c24995b25d584676e3e49087b363fd7c930ffdec0bf91026fd7b2599a1de1c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_5c24995b25d584676e3e49087b363fd7c930ffdec0bf91026fd7b2599a1de1c8->leave($__internal_5c24995b25d584676e3e49087b363fd7c930ffdec0bf91026fd7b2599a1de1c8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'search')) ?>
";
    }
}
