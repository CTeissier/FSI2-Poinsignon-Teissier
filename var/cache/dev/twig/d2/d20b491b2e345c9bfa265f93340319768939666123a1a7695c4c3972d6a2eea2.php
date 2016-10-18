<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_d2890083bd3d7f9b62f7a68cb41f692dcd29fe8a77bbfd968ff30fcf688a5b1c extends Twig_Template
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
        $__internal_ad6ab44466a98f8ecdd15fa770b9491d0ab24bc000b4fcefb3668577874688da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad6ab44466a98f8ecdd15fa770b9491d0ab24bc000b4fcefb3668577874688da->enter($__internal_ad6ab44466a98f8ecdd15fa770b9491d0ab24bc000b4fcefb3668577874688da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget',  array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_ad6ab44466a98f8ecdd15fa770b9491d0ab24bc000b4fcefb3668577874688da->leave($__internal_ad6ab44466a98f8ecdd15fa770b9491d0ab24bc000b4fcefb3668577874688da_prof);

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
