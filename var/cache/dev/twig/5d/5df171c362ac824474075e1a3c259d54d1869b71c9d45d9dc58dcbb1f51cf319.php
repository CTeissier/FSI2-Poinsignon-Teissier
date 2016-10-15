<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_54d80aeb0f9341f7e4221688602f235970d9c96b885e3a02bda9f430e198bdab extends Twig_Template
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
        $__internal_94b7eeb51b163a748dd2b1a2793095bbb62ff9ba3674778d1086e3ad66613157 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_94b7eeb51b163a748dd2b1a2793095bbb62ff9ba3674778d1086e3ad66613157->enter($__internal_94b7eeb51b163a748dd2b1a2793095bbb62ff9ba3674778d1086e3ad66613157_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget',  array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_94b7eeb51b163a748dd2b1a2793095bbb62ff9ba3674778d1086e3ad66613157->leave($__internal_94b7eeb51b163a748dd2b1a2793095bbb62ff9ba3674778d1086e3ad66613157_prof);

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
