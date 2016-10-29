<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_99a79faf3a51d742ca7f1453422f414c046f51fdeed3b056fcac725933d116f1 extends Twig_Template
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
        $__internal_603118fb4b55d71766bb4f2297414c44fc5abf7ed5ba3fff04007ac86543e26c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_603118fb4b55d71766bb4f2297414c44fc5abf7ed5ba3fff04007ac86543e26c->enter($__internal_603118fb4b55d71766bb4f2297414c44fc5abf7ed5ba3fff04007ac86543e26c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_603118fb4b55d71766bb4f2297414c44fc5abf7ed5ba3fff04007ac86543e26c->leave($__internal_603118fb4b55d71766bb4f2297414c44fc5abf7ed5ba3fff04007ac86543e26c_prof);

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
