<?php

/* @Framework/Form/percent_widget.html.php */
class __TwigTemplate_e6bedab7694ed49387a8b965eb1460485471f7cfe0ae356a2b5a41cd8eaf3f29 extends Twig_Template
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
        $__internal_b50f3d8b309eff58f2281de48aadbf26953625ba6aaaea7952a4831b4b540452 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b50f3d8b309eff58f2281de48aadbf26953625ba6aaaea7952a4831b4b540452->enter($__internal_b50f3d8b309eff58f2281de48aadbf26953625ba6aaaea7952a4831b4b540452_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_b50f3d8b309eff58f2281de48aadbf26953625ba6aaaea7952a4831b4b540452->leave($__internal_b50f3d8b309eff58f2281de48aadbf26953625ba6aaaea7952a4831b4b540452_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/percent_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
    }
}
