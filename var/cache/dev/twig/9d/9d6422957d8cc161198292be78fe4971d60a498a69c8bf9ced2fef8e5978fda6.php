<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_cfddc6e0bb587b46c7cfff596fa38937999d1f64ccf18a16a3621e7523600e10 extends Twig_Template
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
        $__internal_45eb6573f847b294f4511d0e5e6e10a6b112caae99f53ebf5e9e8678ab5f029a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_45eb6573f847b294f4511d0e5e6e10a6b112caae99f53ebf5e9e8678ab5f029a->enter($__internal_45eb6573f847b294f4511d0e5e6e10a6b112caae99f53ebf5e9e8678ab5f029a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_45eb6573f847b294f4511d0e5e6e10a6b112caae99f53ebf5e9e8678ab5f029a->leave($__internal_45eb6573f847b294f4511d0e5e6e10a6b112caae99f53ebf5e9e8678ab5f029a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
    }
}
