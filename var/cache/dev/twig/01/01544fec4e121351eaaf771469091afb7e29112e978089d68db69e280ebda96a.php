<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_2c7614e92659dd240ead7933e2b50e69b2b87061287a9798375f024689289186 extends Twig_Template
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
        $__internal_4f67f083b3ed2e9e42041e67fe583e7f51f04fe49c74f931d536a6ba46f44ffb = $this->env->getExtension("native_profiler");
        $__internal_4f67f083b3ed2e9e42041e67fe583e7f51f04fe49c74f931d536a6ba46f44ffb->enter($__internal_4f67f083b3ed2e9e42041e67fe583e7f51f04fe49c74f931d536a6ba46f44ffb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_4f67f083b3ed2e9e42041e67fe583e7f51f04fe49c74f931d536a6ba46f44ffb->leave($__internal_4f67f083b3ed2e9e42041e67fe583e7f51f04fe49c74f931d536a6ba46f44ffb_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </div>*/
/* */
