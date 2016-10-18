<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_ce8d89a0294078448e0ad6d33e44508de3e7e1f1e47dd5fce2988c727966e8ac extends Twig_Template
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
        $__internal_9b882e0477834fc30130bc189844d0331d02630c7d3656d395178bb48feefc1c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b882e0477834fc30130bc189844d0331d02630c7d3656d395178bb48feefc1c->enter($__internal_9b882e0477834fc30130bc189844d0331d02630c7d3656d395178bb48feefc1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_9b882e0477834fc30130bc189844d0331d02630c7d3656d395178bb48feefc1c->leave($__internal_9b882e0477834fc30130bc189844d0331d02630c7d3656d395178bb48feefc1c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'text')) ?>
";
    }
}
