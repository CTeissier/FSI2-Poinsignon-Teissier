<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_06a30fbdda7b679b0b92c800195c4d590f7f6486066fa955be847b23d0ac5bf6 extends Twig_Template
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
        $__internal_6b48359d148a8f4eb25856d2adbc442d387d3dba14727e9e4b42ae4da0cfcfdd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b48359d148a8f4eb25856d2adbc442d387d3dba14727e9e4b42ae4da0cfcfdd->enter($__internal_6b48359d148a8f4eb25856d2adbc442d387d3dba14727e9e4b42ae4da0cfcfdd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_6b48359d148a8f4eb25856d2adbc442d387d3dba14727e9e4b42ae4da0cfcfdd->leave($__internal_6b48359d148a8f4eb25856d2adbc442d387d3dba14727e9e4b42ae4da0cfcfdd_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
    }
}
