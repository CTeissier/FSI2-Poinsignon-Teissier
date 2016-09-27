<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_911c5ae7011b93a3e8f9d763250bb896394182974b2d2fd479d4e77a72c87166 extends Twig_Template
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
        $__internal_efb0fdd4a1bf7e00060838fc17b2ddc6e59d8b9f94e99f08a254dcb65f617ff8 = $this->env->getExtension("native_profiler");
        $__internal_efb0fdd4a1bf7e00060838fc17b2ddc6e59d8b9f94e99f08a254dcb65f617ff8->enter($__internal_efb0fdd4a1bf7e00060838fc17b2ddc6e59d8b9f94e99f08a254dcb65f617ff8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_efb0fdd4a1bf7e00060838fc17b2ddc6e59d8b9f94e99f08a254dcb65f617ff8->leave($__internal_efb0fdd4a1bf7e00060838fc17b2ddc6e59d8b9f94e99f08a254dcb65f617ff8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($compound): ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_compound')?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_simple')?>*/
/* <?php endif ?>*/
/* */
