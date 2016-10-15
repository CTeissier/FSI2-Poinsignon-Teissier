<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_16adf6c77e70a1ec5ce0af81296c41e9237e828ca6ec670a5b8e669e43baec9f extends Twig_Template
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
        $__internal_37f582914dfd76a422e8446b2171a81959c1e09d447a447c40c90db3ebf3fd53 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_37f582914dfd76a422e8446b2171a81959c1e09d447a447c40c90db3ebf3fd53->enter($__internal_37f582914dfd76a422e8446b2171a81959c1e09d447a447c40c90db3ebf3fd53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_37f582914dfd76a422e8446b2171a81959c1e09d447a447c40c90db3ebf3fd53->leave($__internal_37f582914dfd76a422e8446b2171a81959c1e09d447a447c40c90db3ebf3fd53_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
    }
}
