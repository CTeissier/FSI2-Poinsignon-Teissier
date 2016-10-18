<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_37131f7850acc8cb1958fc2600e36c84ea15b8b9f2fac5ef3adc73005e248a5d extends Twig_Template
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
        $__internal_4dc33a268f9a82dbe8af42b3de591f191cdbf582cc37187264f48ba8e8904c82 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4dc33a268f9a82dbe8af42b3de591f191cdbf582cc37187264f48ba8e8904c82->enter($__internal_4dc33a268f9a82dbe8af42b3de591f191cdbf582cc37187264f48ba8e8904c82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_4dc33a268f9a82dbe8af42b3de591f191cdbf582cc37187264f48ba8e8904c82->leave($__internal_4dc33a268f9a82dbe8af42b3de591f191cdbf582cc37187264f48ba8e8904c82_prof);

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
