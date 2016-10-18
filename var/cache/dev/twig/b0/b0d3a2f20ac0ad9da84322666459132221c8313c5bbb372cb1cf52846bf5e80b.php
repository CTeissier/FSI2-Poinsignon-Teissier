<?php

/* @Framework/Form/range_widget.html.php */
class __TwigTemplate_a14fa709b3f4aaf47945760b335144dba463b9afd72b395163f9f666333e81a4 extends Twig_Template
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
        $__internal_d92155b80384429441a9e1bebab5b7f90b3609423f380b67090b6f35eac24b8e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d92155b80384429441a9e1bebab5b7f90b3609423f380b67090b6f35eac24b8e->enter($__internal_d92155b80384429441a9e1bebab5b7f90b3609423f380b67090b6f35eac24b8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/range_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'range'));
";
        
        $__internal_d92155b80384429441a9e1bebab5b7f90b3609423f380b67090b6f35eac24b8e->leave($__internal_d92155b80384429441a9e1bebab5b7f90b3609423f380b67090b6f35eac24b8e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/range_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'range'));
";
    }
}
