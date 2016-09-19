<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_f8daa8750ef164f7926adc77aec95d9dbae2915234901cc24217289543dbd7fc extends Twig_Template
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
        $__internal_b835c87b0518daa0eb1ec50c3f0a7bd8c35d5e55cd3378a3b57c89c15c96ce6d = $this->env->getExtension("native_profiler");
        $__internal_b835c87b0518daa0eb1ec50c3f0a7bd8c35d5e55cd3378a3b57c89c15c96ce6d->enter($__internal_b835c87b0518daa0eb1ec50c3f0a7bd8c35d5e55cd3378a3b57c89c15c96ce6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_b835c87b0518daa0eb1ec50c3f0a7bd8c35d5e55cd3378a3b57c89c15c96ce6d->leave($__internal_b835c87b0518daa0eb1ec50c3f0a7bd8c35d5e55cd3378a3b57c89c15c96ce6d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!$label) { $label = isset($label_format)*/
/*     ? strtr($label_format, array('%name%' => $name, '%id%' => $id))*/
/*     : $view['form']->humanize($name); } ?>*/
/* <button type="<?php echo isset($type) ? $view->escape($type) : 'button' ?>" <?php echo $view['form']->block($form, 'button_attributes') ?>><?php echo $view->escape(false !== $translation_domain ? $view['translator']->trans($label, array(), $translation_domain) : $label) ?></button>*/
/* */
