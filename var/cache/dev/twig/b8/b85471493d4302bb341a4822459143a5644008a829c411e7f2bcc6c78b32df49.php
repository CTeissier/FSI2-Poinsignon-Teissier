<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_af010885d79ec4208529c929bfbcd223d3d9d42defcc25b0a51a3d09ede6dd00 extends Twig_Template
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
        $__internal_9855f73349fa9fe9a3ba22354e54f3ebdca9d58d2353c61a3f7bc1b32d859064 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9855f73349fa9fe9a3ba22354e54f3ebdca9d58d2353c61a3f7bc1b32d859064->enter($__internal_9855f73349fa9fe9a3ba22354e54f3ebdca9d58d2353c61a3f7bc1b32d859064_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_9855f73349fa9fe9a3ba22354e54f3ebdca9d58d2353c61a3f7bc1b32d859064->leave($__internal_9855f73349fa9fe9a3ba22354e54f3ebdca9d58d2353c61a3f7bc1b32d859064_prof);

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
