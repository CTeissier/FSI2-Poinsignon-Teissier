<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_6c77615aa39cccd4b5ca279fad476e095a2a67363c1ce0c8c7efd7fb01e6e736 extends Twig_Template
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
        $__internal_312f69de280e56b0869cb9600d11c437fa5c04f882dc8d099f344d68a91be840 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_312f69de280e56b0869cb9600d11c437fa5c04f882dc8d099f344d68a91be840->enter($__internal_312f69de280e56b0869cb9600d11c437fa5c04f882dc8d099f344d68a91be840_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_312f69de280e56b0869cb9600d11c437fa5c04f882dc8d099f344d68a91be840->leave($__internal_312f69de280e56b0869cb9600d11c437fa5c04f882dc8d099f344d68a91be840_prof);

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
