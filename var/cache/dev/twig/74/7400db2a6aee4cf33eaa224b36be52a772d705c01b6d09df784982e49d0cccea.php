<?php

/* @Framework/Form/range_widget.html.php */
class __TwigTemplate_befd98d55da6d7dac85269a686a3246fb46dbfbfbbf2161a6dd764176d787448 extends Twig_Template
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
        $__internal_cab69977595d4f5b6ed3d639fe7653ab70ff2b6aa610d6acb5f2405daa263e8c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cab69977595d4f5b6ed3d639fe7653ab70ff2b6aa610d6acb5f2405daa263e8c->enter($__internal_cab69977595d4f5b6ed3d639fe7653ab70ff2b6aa610d6acb5f2405daa263e8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/range_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'range'));
";
        
        $__internal_cab69977595d4f5b6ed3d639fe7653ab70ff2b6aa610d6acb5f2405daa263e8c->leave($__internal_cab69977595d4f5b6ed3d639fe7653ab70ff2b6aa610d6acb5f2405daa263e8c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/range_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'range'));
";
    }
}
