<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_1b2913a31a9ba0a962e776c40658730dbe3087de35b013efeb96a5ced8d16aff extends Twig_Template
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
        $__internal_50a563105e3f23d1ce03ed433012f507168717305b627e17660b858f8b8a05a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_50a563105e3f23d1ce03ed433012f507168717305b627e17660b858f8b8a05a9->enter($__internal_50a563105e3f23d1ce03ed433012f507168717305b627e17660b858f8b8a05a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_50a563105e3f23d1ce03ed433012f507168717305b627e17660b858f8b8a05a9->leave($__internal_50a563105e3f23d1ce03ed433012f507168717305b627e17660b858f8b8a05a9_prof);

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
