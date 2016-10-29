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
        $__internal_92a3e9fa804938995c2e665c3e3fba5ed26193dd04b313dc7474e1637eb9e526 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_92a3e9fa804938995c2e665c3e3fba5ed26193dd04b313dc7474e1637eb9e526->enter($__internal_92a3e9fa804938995c2e665c3e3fba5ed26193dd04b313dc7474e1637eb9e526_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_92a3e9fa804938995c2e665c3e3fba5ed26193dd04b313dc7474e1637eb9e526->leave($__internal_92a3e9fa804938995c2e665c3e3fba5ed26193dd04b313dc7474e1637eb9e526_prof);

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
