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
        $__internal_9505cb652a95aeb1bcb9558e32138dd43db50a686792e85127d996a183c4958e = $this->env->getExtension("native_profiler");
        $__internal_9505cb652a95aeb1bcb9558e32138dd43db50a686792e85127d996a183c4958e->enter($__internal_9505cb652a95aeb1bcb9558e32138dd43db50a686792e85127d996a183c4958e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_9505cb652a95aeb1bcb9558e32138dd43db50a686792e85127d996a183c4958e->leave($__internal_9505cb652a95aeb1bcb9558e32138dd43db50a686792e85127d996a183c4958e_prof);

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
