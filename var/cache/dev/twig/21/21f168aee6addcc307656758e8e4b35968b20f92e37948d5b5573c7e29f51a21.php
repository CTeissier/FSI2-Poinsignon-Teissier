<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_fb12475d7cf6028d832615613e5da0deccec895a29cd85ad0dc6644a605ec3bc extends Twig_Template
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
        $__internal_fc454fb27a46cdc9035843e44a47e422b9b6f105c570194e9117912f7f81acf1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc454fb27a46cdc9035843e44a47e422b9b6f105c570194e9117912f7f81acf1->enter($__internal_fc454fb27a46cdc9035843e44a47e422b9b6f105c570194e9117912f7f81acf1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_fc454fb27a46cdc9035843e44a47e422b9b6f105c570194e9117912f7f81acf1->leave($__internal_fc454fb27a46cdc9035843e44a47e422b9b6f105c570194e9117912f7f81acf1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
    }
}
