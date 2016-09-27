<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_f0cb333292c009ee83783ca7377a1706d41d8f5d972ee488dcc55d1eb43bac78 extends Twig_Template
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
        $__internal_2a699c10c958b7d88931aa8894a3b29d8abab78a85556eb3914c863511d20ce9 = $this->env->getExtension("native_profiler");
        $__internal_2a699c10c958b7d88931aa8894a3b29d8abab78a85556eb3914c863511d20ce9->enter($__internal_2a699c10c958b7d88931aa8894a3b29d8abab78a85556eb3914c863511d20ce9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_2a699c10c958b7d88931aa8894a3b29d8abab78a85556eb3914c863511d20ce9->leave($__internal_2a699c10c958b7d88931aa8894a3b29d8abab78a85556eb3914c863511d20ce9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="checkbox"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     <?php if (strlen($value) > 0): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?>*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
