<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_59683c514a20cbb6ecf42e8fe2ed6a8e5cd9d9c7e9910b0d9d72d65b928967d1 extends Twig_Template
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
        $__internal_544a1a9d7a88535d9f80d7b8d96aac5b9dd575031aa655ae0a8c740002b71d49 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_544a1a9d7a88535d9f80d7b8d96aac5b9dd575031aa655ae0a8c740002b71d49->enter($__internal_544a1a9d7a88535d9f80d7b8d96aac5b9dd575031aa655ae0a8c740002b71d49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_544a1a9d7a88535d9f80d7b8d96aac5b9dd575031aa655ae0a8c740002b71d49->leave($__internal_544a1a9d7a88535d9f80d7b8d96aac5b9dd575031aa655ae0a8c740002b71d49_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'password')) ?>
";
    }
}
