<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_306969598ebb8dc4a4d5bfb2e7f83c503fcce457c61fd95416354d362f140cb8 extends Twig_Template
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
        $__internal_d92c512e5e6c95962f8ede1273ce6d9df82ffaa112ab5688ebdcd5bfd9a29f01 = $this->env->getExtension("native_profiler");
        $__internal_d92c512e5e6c95962f8ede1273ce6d9df82ffaa112ab5688ebdcd5bfd9a29f01->enter($__internal_d92c512e5e6c95962f8ede1273ce6d9df82ffaa112ab5688ebdcd5bfd9a29f01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_d92c512e5e6c95962f8ede1273ce6d9df82ffaa112ab5688ebdcd5bfd9a29f01->leave($__internal_d92c512e5e6c95962f8ede1273ce6d9df82ffaa112ab5688ebdcd5bfd9a29f01_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="radio"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     value="<?php echo $view->escape($value) ?>"*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
