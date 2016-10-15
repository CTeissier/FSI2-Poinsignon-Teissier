<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_670b7e81ef85f2503910ad9cfed349e58f841c10aefe6553fada4ec284f70f91 extends Twig_Template
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
        $__internal_343452e0badf2951e7ab664557bc67ccdde2355bd4ed96ff2fdf3c2a252fd9b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_343452e0badf2951e7ab664557bc67ccdde2355bd4ed96ff2fdf3c2a252fd9b4->enter($__internal_343452e0badf2951e7ab664557bc67ccdde2355bd4ed96ff2fdf3c2a252fd9b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_343452e0badf2951e7ab664557bc67ccdde2355bd4ed96ff2fdf3c2a252fd9b4->leave($__internal_343452e0badf2951e7ab664557bc67ccdde2355bd4ed96ff2fdf3c2a252fd9b4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
    }
}
