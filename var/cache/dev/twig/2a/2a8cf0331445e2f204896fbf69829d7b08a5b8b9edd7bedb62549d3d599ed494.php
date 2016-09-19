<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_718299f3fe697c2300b48f1c434422bea7f613cbbdad40216b63ac2aa03b64cd extends Twig_Template
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
        $__internal_4ca32e3140933bf04cac13f20511e7d616bc13b5fa4b5bb1e40b72a1628e4960 = $this->env->getExtension("native_profiler");
        $__internal_4ca32e3140933bf04cac13f20511e7d616bc13b5fa4b5bb1e40b72a1628e4960->enter($__internal_4ca32e3140933bf04cac13f20511e7d616bc13b5fa4b5bb1e40b72a1628e4960_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_4ca32e3140933bf04cac13f20511e7d616bc13b5fa4b5bb1e40b72a1628e4960->leave($__internal_4ca32e3140933bf04cac13f20511e7d616bc13b5fa4b5bb1e40b72a1628e4960_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (isset($prototype)): ?>*/
/*     <?php $attr['data-prototype'] = $view->escape($view['form']->row($prototype)) ?>*/
/* <?php endif ?>*/
/* <?php echo $view['form']->widget($form, array('attr' => $attr)) ?>*/
/* */
