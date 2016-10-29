<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_d2890083bd3d7f9b62f7a68cb41f692dcd29fe8a77bbfd968ff30fcf688a5b1c extends Twig_Template
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
        $__internal_fd1583d890cb662f5cea5ca108580f839342534ae1a27ff4e174e1dc4d87d56e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd1583d890cb662f5cea5ca108580f839342534ae1a27ff4e174e1dc4d87d56e->enter($__internal_fd1583d890cb662f5cea5ca108580f839342534ae1a27ff4e174e1dc4d87d56e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget',  array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_fd1583d890cb662f5cea5ca108580f839342534ae1a27ff4e174e1dc4d87d56e->leave($__internal_fd1583d890cb662f5cea5ca108580f839342534ae1a27ff4e174e1dc4d87d56e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo \$view['form']->block(\$form, 'button_widget',  array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
    }
}
