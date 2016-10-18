<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_aae39e08f3effad1321150bb8e9a92a4bc729304ab02bde62d7e23c1c2252bdb extends Twig_Template
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
        $__internal_1c92814d28b7336d19a75cbd34f7994f3bd10cdac10065dea68946ad73554d9a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c92814d28b7336d19a75cbd34f7994f3bd10cdac10065dea68946ad73554d9a->enter($__internal_1c92814d28b7336d19a75cbd34f7994f3bd10cdac10065dea68946ad73554d9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_1c92814d28b7336d19a75cbd34f7994f3bd10cdac10065dea68946ad73554d9a->leave($__internal_1c92814d28b7336d19a75cbd34f7994f3bd10cdac10065dea68946ad73554d9a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
    }
}
