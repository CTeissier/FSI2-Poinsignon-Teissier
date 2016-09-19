<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_b975d926d4f7c61432320dd45a475bd7b9fa38573c4f9405fb5f79e11150fb5e extends Twig_Template
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
        $__internal_d20162dfc97ccd987691fb0ebfe1970462fe0b83d1c5373c6435a8819f3ab5aa = $this->env->getExtension("native_profiler");
        $__internal_d20162dfc97ccd987691fb0ebfe1970462fe0b83d1c5373c6435a8819f3ab5aa->enter($__internal_d20162dfc97ccd987691fb0ebfe1970462fe0b83d1c5373c6435a8819f3ab5aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_d20162dfc97ccd987691fb0ebfe1970462fe0b83d1c5373c6435a8819f3ab5aa->leave($__internal_d20162dfc97ccd987691fb0ebfe1970462fe0b83d1c5373c6435a8819f3ab5aa_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <textarea <?php echo $view['form']->block($form, 'widget_attributes') ?>><?php echo $view->escape($value) ?></textarea>*/
/* */
