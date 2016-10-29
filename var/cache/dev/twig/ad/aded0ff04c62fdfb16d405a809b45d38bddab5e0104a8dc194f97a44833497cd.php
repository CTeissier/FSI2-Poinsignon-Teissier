<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_0ddcfdffd766a1689eb4d0cbecad0aca5192efba4ae4cc1c5f1184e5b97ef87d extends Twig_Template
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
        $__internal_30e7a033920cf4aa0b1a7b36b31e29dbaed2497184b22cd20157f9fa044c1e15 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_30e7a033920cf4aa0b1a7b36b31e29dbaed2497184b22cd20157f9fa044c1e15->enter($__internal_30e7a033920cf4aa0b1a7b36b31e29dbaed2497184b22cd20157f9fa044c1e15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
        
        $__internal_30e7a033920cf4aa0b1a7b36b31e29dbaed2497184b22cd20157f9fa044c1e15->leave($__internal_30e7a033920cf4aa0b1a7b36b31e29dbaed2497184b22cd20157f9fa044c1e15_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
    }
}
