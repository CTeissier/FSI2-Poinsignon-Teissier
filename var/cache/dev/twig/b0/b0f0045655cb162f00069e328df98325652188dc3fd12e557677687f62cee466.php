<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_def4c4c4bc35567ce92de0e2437476e121c64532d0a41e78599955edfbe4a942 extends Twig_Template
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
        $__internal_adef0cb236a96c50c7e9b6854ebda34586a4032964e50e4255de418431ebb2b9 = $this->env->getExtension("native_profiler");
        $__internal_adef0cb236a96c50c7e9b6854ebda34586a4032964e50e4255de418431ebb2b9->enter($__internal_adef0cb236a96c50c7e9b6854ebda34586a4032964e50e4255de418431ebb2b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_adef0cb236a96c50c7e9b6854ebda34586a4032964e50e4255de418431ebb2b9->leave($__internal_adef0cb236a96c50c7e9b6854ebda34586a4032964e50e4255de418431ebb2b9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr>*/
/*     <td>*/
/*         <?php echo $view['form']->label($form) ?>*/
/*     </td>*/
/*     <td>*/
/*         <?php echo $view['form']->errors($form) ?>*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
