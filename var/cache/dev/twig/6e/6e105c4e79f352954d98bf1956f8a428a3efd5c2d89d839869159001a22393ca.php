<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_40ce264221c999a353ff00594d4ac2b7bd6846c805c4c4d078dde285ad74c109 extends Twig_Template
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
        $__internal_58eec6512802fccb7682c59cb2855b0a210e2c01b5724b2eebfc8a146a408a3d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_58eec6512802fccb7682c59cb2855b0a210e2c01b5724b2eebfc8a146a408a3d->enter($__internal_58eec6512802fccb7682c59cb2855b0a210e2c01b5724b2eebfc8a146a408a3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_58eec6512802fccb7682c59cb2855b0a210e2c01b5724b2eebfc8a146a408a3d->leave($__internal_58eec6512802fccb7682c59cb2855b0a210e2c01b5724b2eebfc8a146a408a3d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'search')) ?>
";
    }
}
