<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_18fabcf75dffc7230f5470f39a732554390fd6fe115aa34c87ddd7669cd35651 extends Twig_Template
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
        $__internal_0ef843917b2d0c3b0f4781492f288f973dce402437039fdea538af0e598030d2 = $this->env->getExtension("native_profiler");
        $__internal_0ef843917b2d0c3b0f4781492f288f973dce402437039fdea538af0e598030d2->enter($__internal_0ef843917b2d0c3b0f4781492f288f973dce402437039fdea538af0e598030d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_0ef843917b2d0c3b0f4781492f288f973dce402437039fdea538af0e598030d2->leave($__internal_0ef843917b2d0c3b0f4781492f288f973dce402437039fdea538af0e598030d2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child): ?>*/
/*     <?php if (!$child->isRendered()): ?>*/
/*         <?php echo $view['form']->row($child) ?>*/
/*     <?php endif; ?>*/
/* <?php endforeach; ?>*/
/* */
