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
        $__internal_12dd79b7bcb56e97b3e3296821338f5ca8f0ffb0c2cd7af10407b42ab036d10d = $this->env->getExtension("native_profiler");
        $__internal_12dd79b7bcb56e97b3e3296821338f5ca8f0ffb0c2cd7af10407b42ab036d10d->enter($__internal_12dd79b7bcb56e97b3e3296821338f5ca8f0ffb0c2cd7af10407b42ab036d10d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_12dd79b7bcb56e97b3e3296821338f5ca8f0ffb0c2cd7af10407b42ab036d10d->leave($__internal_12dd79b7bcb56e97b3e3296821338f5ca8f0ffb0c2cd7af10407b42ab036d10d_prof);

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
