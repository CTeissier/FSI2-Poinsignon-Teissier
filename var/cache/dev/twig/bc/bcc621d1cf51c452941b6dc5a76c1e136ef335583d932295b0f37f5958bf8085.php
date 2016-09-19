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
        $__internal_687c0563606038b52bae999eafd87ad74f92b519aa5b45088bcd6f259f9fc3a8 = $this->env->getExtension("native_profiler");
        $__internal_687c0563606038b52bae999eafd87ad74f92b519aa5b45088bcd6f259f9fc3a8->enter($__internal_687c0563606038b52bae999eafd87ad74f92b519aa5b45088bcd6f259f9fc3a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_687c0563606038b52bae999eafd87ad74f92b519aa5b45088bcd6f259f9fc3a8->leave($__internal_687c0563606038b52bae999eafd87ad74f92b519aa5b45088bcd6f259f9fc3a8_prof);

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
