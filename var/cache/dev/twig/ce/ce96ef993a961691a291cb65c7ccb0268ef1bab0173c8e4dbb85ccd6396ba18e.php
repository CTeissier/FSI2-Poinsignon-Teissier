<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_c1ea25284c54a24b17d101c0c0880537c2017665eb9fd08b257c67955df7b18e extends Twig_Template
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
        $__internal_4d6076e4e4bb00d9fd9e23f690ba54eb21f63aec6091a4499e4f383a05d25443 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d6076e4e4bb00d9fd9e23f690ba54eb21f63aec6091a4499e4f383a05d25443->enter($__internal_4d6076e4e4bb00d9fd9e23f690ba54eb21f63aec6091a4499e4f383a05d25443_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_4d6076e4e4bb00d9fd9e23f690ba54eb21f63aec6091a4499e4f383a05d25443->leave($__internal_4d6076e4e4bb00d9fd9e23f690ba54eb21f63aec6091a4499e4f383a05d25443_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
    }
}
