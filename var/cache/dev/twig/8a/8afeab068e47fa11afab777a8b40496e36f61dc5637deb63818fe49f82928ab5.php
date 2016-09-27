<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_01a6fc6c4441a776bf8d9da399557914e13cec6bf57df360d9440e25052e87e3 extends Twig_Template
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
        $__internal_23d042527fd9d7e8f6555a9ae3d67d215449017bbdd24b29d3898c0441865a3c = $this->env->getExtension("native_profiler");
        $__internal_23d042527fd9d7e8f6555a9ae3d67d215449017bbdd24b29d3898c0441865a3c->enter($__internal_23d042527fd9d7e8f6555a9ae3d67d215449017bbdd24b29d3898c0441865a3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_23d042527fd9d7e8f6555a9ae3d67d215449017bbdd24b29d3898c0441865a3c->leave($__internal_23d042527fd9d7e8f6555a9ae3d67d215449017bbdd24b29d3898c0441865a3c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child) : ?>*/
/*     <?php echo $view['form']->row($child) ?>*/
/* <?php endforeach; ?>*/
/* */
