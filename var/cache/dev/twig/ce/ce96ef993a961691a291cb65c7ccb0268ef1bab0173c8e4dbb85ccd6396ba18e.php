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
        $__internal_08cadd373e4b4247811d9faa15dc50f6a24d3bdd967b94a47848bebef2b1bcc6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_08cadd373e4b4247811d9faa15dc50f6a24d3bdd967b94a47848bebef2b1bcc6->enter($__internal_08cadd373e4b4247811d9faa15dc50f6a24d3bdd967b94a47848bebef2b1bcc6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_08cadd373e4b4247811d9faa15dc50f6a24d3bdd967b94a47848bebef2b1bcc6->leave($__internal_08cadd373e4b4247811d9faa15dc50f6a24d3bdd967b94a47848bebef2b1bcc6_prof);

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
