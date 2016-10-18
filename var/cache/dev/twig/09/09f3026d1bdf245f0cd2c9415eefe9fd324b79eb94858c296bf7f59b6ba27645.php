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
        $__internal_e77c7bc3d3964a85a1f046c6555773439da6fa545dea5f363b0931ca9ed2ae90 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e77c7bc3d3964a85a1f046c6555773439da6fa545dea5f363b0931ca9ed2ae90->enter($__internal_e77c7bc3d3964a85a1f046c6555773439da6fa545dea5f363b0931ca9ed2ae90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_e77c7bc3d3964a85a1f046c6555773439da6fa545dea5f363b0931ca9ed2ae90->leave($__internal_e77c7bc3d3964a85a1f046c6555773439da6fa545dea5f363b0931ca9ed2ae90_prof);

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
