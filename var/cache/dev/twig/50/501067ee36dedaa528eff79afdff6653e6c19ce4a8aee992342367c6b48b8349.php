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
        $__internal_ba47c568d13f6f3090267fcc944b4008dcc6e8536f420d09a819a6947198dff1 = $this->env->getExtension("native_profiler");
        $__internal_ba47c568d13f6f3090267fcc944b4008dcc6e8536f420d09a819a6947198dff1->enter($__internal_ba47c568d13f6f3090267fcc944b4008dcc6e8536f420d09a819a6947198dff1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

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
        
        $__internal_ba47c568d13f6f3090267fcc944b4008dcc6e8536f420d09a819a6947198dff1->leave($__internal_ba47c568d13f6f3090267fcc944b4008dcc6e8536f420d09a819a6947198dff1_prof);

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
