<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_33eb7a8d1d4002720b5e63f6aec6dfe0624a0e283dd75b254f23fe2c867632bf extends Twig_Template
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
        $__internal_54e1fc5b6ddaf3c1e309dcadc0786416287c9d152510ee379511e2f0f0f5960b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_54e1fc5b6ddaf3c1e309dcadc0786416287c9d152510ee379511e2f0f0f5960b->enter($__internal_54e1fc5b6ddaf3c1e309dcadc0786416287c9d152510ee379511e2f0f0f5960b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_54e1fc5b6ddaf3c1e309dcadc0786416287c9d152510ee379511e2f0f0f5960b->leave($__internal_54e1fc5b6ddaf3c1e309dcadc0786416287c9d152510ee379511e2f0f0f5960b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
    }
}
