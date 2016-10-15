<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_211021405333915451d21598b3bb940abc46df94c458ffa84b200e4557a50445 extends Twig_Template
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
        $__internal_bbe8facc0fa89bb11e222ac8f37141c9c29da3869c4f5988381ecdcd2e8e344e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bbe8facc0fa89bb11e222ac8f37141c9c29da3869c4f5988381ecdcd2e8e344e->enter($__internal_bbe8facc0fa89bb11e222ac8f37141c9c29da3869c4f5988381ecdcd2e8e344e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_bbe8facc0fa89bb11e222ac8f37141c9c29da3869c4f5988381ecdcd2e8e344e->leave($__internal_bbe8facc0fa89bb11e222ac8f37141c9c29da3869c4f5988381ecdcd2e8e344e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
    }
}
