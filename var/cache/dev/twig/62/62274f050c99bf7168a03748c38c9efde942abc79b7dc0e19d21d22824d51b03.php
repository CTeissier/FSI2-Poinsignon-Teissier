<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_5c6f15e761bf13a7170e7a74f801d4e036abb7a32e38692aca7ca01050dd08b7 extends Twig_Template
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
        $__internal_313ec247c62748f18f4f00eaf9bbb28a148903ff4cde87f633a00596bf59e04c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_313ec247c62748f18f4f00eaf9bbb28a148903ff4cde87f633a00596bf59e04c->enter($__internal_313ec247c62748f18f4f00eaf9bbb28a148903ff4cde87f633a00596bf59e04c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_313ec247c62748f18f4f00eaf9bbb28a148903ff4cde87f633a00596bf59e04c->leave($__internal_313ec247c62748f18f4f00eaf9bbb28a148903ff4cde87f633a00596bf59e04c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
    }
}
