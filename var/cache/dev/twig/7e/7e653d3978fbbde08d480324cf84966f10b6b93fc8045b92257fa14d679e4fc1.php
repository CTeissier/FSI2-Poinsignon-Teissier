<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_05ce08cf99b4fa090f08155584882eb15cd59025ed2a6cb3b77a33c3c020a373 extends Twig_Template
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
        $__internal_166ec64956c6c4e510e1e3f9f6b5c672f097dc44dc8515a74c39c2980a1d6666 = $this->env->getExtension("native_profiler");
        $__internal_166ec64956c6c4e510e1e3f9f6b5c672f097dc44dc8515a74c39c2980a1d6666->enter($__internal_166ec64956c6c4e510e1e3f9f6b5c672f097dc44dc8515a74c39c2980a1d6666_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_166ec64956c6c4e510e1e3f9f6b5c672f097dc44dc8515a74c39c2980a1d6666->leave($__internal_166ec64956c6c4e510e1e3f9f6b5c672f097dc44dc8515a74c39c2980a1d6666_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div>*/
/*     <?php echo $view['form']->label($form) ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php echo $view['form']->widget($form) ?>*/
/* </div>*/
/* */
