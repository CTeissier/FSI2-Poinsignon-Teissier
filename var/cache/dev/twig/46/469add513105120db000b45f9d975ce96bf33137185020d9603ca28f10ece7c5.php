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
        $__internal_fc332fed25065f930abdf8d73fd139ada955adf0485f28735e8d6cdef8ee3427 = $this->env->getExtension("native_profiler");
        $__internal_fc332fed25065f930abdf8d73fd139ada955adf0485f28735e8d6cdef8ee3427->enter($__internal_fc332fed25065f930abdf8d73fd139ada955adf0485f28735e8d6cdef8ee3427_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_fc332fed25065f930abdf8d73fd139ada955adf0485f28735e8d6cdef8ee3427->leave($__internal_fc332fed25065f930abdf8d73fd139ada955adf0485f28735e8d6cdef8ee3427_prof);

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
