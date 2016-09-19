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
        $__internal_edc2ce15376e7caa80adb8b6475b29eae693454697d338a363d8d3c3b834be0c = $this->env->getExtension("native_profiler");
        $__internal_edc2ce15376e7caa80adb8b6475b29eae693454697d338a363d8d3c3b834be0c->enter($__internal_edc2ce15376e7caa80adb8b6475b29eae693454697d338a363d8d3c3b834be0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_edc2ce15376e7caa80adb8b6475b29eae693454697d338a363d8d3c3b834be0c->leave($__internal_edc2ce15376e7caa80adb8b6475b29eae693454697d338a363d8d3c3b834be0c_prof);

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
