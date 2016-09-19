<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_3efd2b84684b5118335e4a9d56dd904520004099b87c6cf7d1887834a19f0cff extends Twig_Template
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
        $__internal_94eae11e94f602335fe388e63dd2b9e042b0b6007a4fc03ccb25d63546c5856c = $this->env->getExtension("native_profiler");
        $__internal_94eae11e94f602335fe388e63dd2b9e042b0b6007a4fc03ccb25d63546c5856c->enter($__internal_94eae11e94f602335fe388e63dd2b9e042b0b6007a4fc03ccb25d63546c5856c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_94eae11e94f602335fe388e63dd2b9e042b0b6007a4fc03ccb25d63546c5856c->leave($__internal_94eae11e94f602335fe388e63dd2b9e042b0b6007a4fc03ccb25d63546c5856c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($widget == 'single_text'): ?>*/
/*     <?php echo $view['form']->block($form, 'form_widget_simple'); ?>*/
/* <?php else: ?>*/
/*     <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*         <?php echo $view['form']->widget($form['date']).' '.$view['form']->widget($form['time']) ?>*/
/*     </div>*/
/* <?php endif ?>*/
/* */
