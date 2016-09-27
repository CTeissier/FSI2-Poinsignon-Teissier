<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_b614ead290628bd900609e8689822f89cdb27d75d91be5b89d78f22f95328b12 extends Twig_Template
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
        $__internal_ae31b49536c321fbec08cf6dd825c5db9fc7d80ab7ec66289fd47242b885ff9d = $this->env->getExtension("native_profiler");
        $__internal_ae31b49536c321fbec08cf6dd825c5db9fc7d80ab7ec66289fd47242b885ff9d->enter($__internal_ae31b49536c321fbec08cf6dd825c5db9fc7d80ab7ec66289fd47242b885ff9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_ae31b49536c321fbec08cf6dd825c5db9fc7d80ab7ec66289fd47242b885ff9d->leave($__internal_ae31b49536c321fbec08cf6dd825c5db9fc7d80ab7ec66289fd47242b885ff9d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($expanded): ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_expanded') ?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_collapsed') ?>*/
/* <?php endif ?>*/
/* */
