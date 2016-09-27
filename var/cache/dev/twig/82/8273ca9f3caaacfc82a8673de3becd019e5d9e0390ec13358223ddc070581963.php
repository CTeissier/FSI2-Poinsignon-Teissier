<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_a8ee3d656a6ffce0b03685481a61c0c4785855e306874c54ef989662738f26ef extends Twig_Template
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
        $__internal_d0598528ddfd2acc4e589ac35774c962fe79147fff12a1583e9fe48b4fa8b7fa = $this->env->getExtension("native_profiler");
        $__internal_d0598528ddfd2acc4e589ac35774c962fe79147fff12a1583e9fe48b4fa8b7fa->enter($__internal_d0598528ddfd2acc4e589ac35774c962fe79147fff12a1583e9fe48b4fa8b7fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_d0598528ddfd2acc4e589ac35774c962fe79147fff12a1583e9fe48b4fa8b7fa->leave($__internal_d0598528ddfd2acc4e589ac35774c962fe79147fff12a1583e9fe48b4fa8b7fa_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr style="display: none">*/
/*     <td colspan="2">*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
