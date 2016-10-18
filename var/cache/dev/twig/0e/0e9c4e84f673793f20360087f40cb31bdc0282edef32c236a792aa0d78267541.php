<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_794d5b34e34663eda1bd0e4eb51f6c3659fe5c909d02732c560aae00428861bf extends Twig_Template
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
        $__internal_12936fe1588a981f90158611ffe54e1646273384dc23af57e16be367eaf7867b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_12936fe1588a981f90158611ffe54e1646273384dc23af57e16be367eaf7867b->enter($__internal_12936fe1588a981f90158611ffe54e1646273384dc23af57e16be367eaf7867b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_12936fe1588a981f90158611ffe54e1646273384dc23af57e16be367eaf7867b->leave($__internal_12936fe1588a981f90158611ffe54e1646273384dc23af57e16be367eaf7867b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_options.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
    }
}
