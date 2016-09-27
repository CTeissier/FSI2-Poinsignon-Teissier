<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_dc5dd0f5ccc60a0eb991affbc351ad5bfd34b14fd9dd4cc3f8297925add982ea extends Twig_Template
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
        $__internal_4eadc40aa31f6aaa81bbdfaf2dd7a2559dd9c458138810b58fa6718d84878722 = $this->env->getExtension("native_profiler");
        $__internal_4eadc40aa31f6aaa81bbdfaf2dd7a2559dd9c458138810b58fa6718d84878722->enter($__internal_4eadc40aa31f6aaa81bbdfaf2dd7a2559dd9c458138810b58fa6718d84878722_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

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
        
        $__internal_4eadc40aa31f6aaa81bbdfaf2dd7a2559dd9c458138810b58fa6718d84878722->leave($__internal_4eadc40aa31f6aaa81bbdfaf2dd7a2559dd9c458138810b58fa6718d84878722_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <table <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <tr>*/
/*         <td colspan="2">*/
/*             <?php echo $view['form']->errors($form) ?>*/
/*         </td>*/
/*     </tr>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </table>*/
/* */
