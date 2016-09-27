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
        $__internal_7c386646ea5321ebffad262d3155e742abe7094232e194f342f37471e7a9f896 = $this->env->getExtension("native_profiler");
        $__internal_7c386646ea5321ebffad262d3155e742abe7094232e194f342f37471e7a9f896->enter($__internal_7c386646ea5321ebffad262d3155e742abe7094232e194f342f37471e7a9f896_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

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
        
        $__internal_7c386646ea5321ebffad262d3155e742abe7094232e194f342f37471e7a9f896->leave($__internal_7c386646ea5321ebffad262d3155e742abe7094232e194f342f37471e7a9f896_prof);

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
