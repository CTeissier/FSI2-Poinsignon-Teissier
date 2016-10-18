<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_06a30fbdda7b679b0b92c800195c4d590f7f6486066fa955be847b23d0ac5bf6 extends Twig_Template
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
        $__internal_39cc0fe5c9a935f3187fd87967f20880bebfe0c55ed83e0421ff621111ec316e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_39cc0fe5c9a935f3187fd87967f20880bebfe0c55ed83e0421ff621111ec316e->enter($__internal_39cc0fe5c9a935f3187fd87967f20880bebfe0c55ed83e0421ff621111ec316e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_39cc0fe5c9a935f3187fd87967f20880bebfe0c55ed83e0421ff621111ec316e->leave($__internal_39cc0fe5c9a935f3187fd87967f20880bebfe0c55ed83e0421ff621111ec316e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
    }
}
