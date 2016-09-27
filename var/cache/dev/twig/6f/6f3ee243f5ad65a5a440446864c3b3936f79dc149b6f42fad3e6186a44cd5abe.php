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
        $__internal_b6c556bf3d5f62a181ab3474d19c15466d5b1a89eaddfe904634bfa54471c85a = $this->env->getExtension("native_profiler");
        $__internal_b6c556bf3d5f62a181ab3474d19c15466d5b1a89eaddfe904634bfa54471c85a->enter($__internal_b6c556bf3d5f62a181ab3474d19c15466d5b1a89eaddfe904634bfa54471c85a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_b6c556bf3d5f62a181ab3474d19c15466d5b1a89eaddfe904634bfa54471c85a->leave($__internal_b6c556bf3d5f62a181ab3474d19c15466d5b1a89eaddfe904634bfa54471c85a_prof);

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
