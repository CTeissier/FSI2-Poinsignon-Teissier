<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_37c75004c601b4d15ce2f3c97f416907b167471139ff3e2c4cb6c983ef337f6c extends Twig_Template
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
        $__internal_bc3510c179016b1c58d3e18630315ac50f6a5bc0dcbe9d5dd6c09c6f6a6cdbd1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc3510c179016b1c58d3e18630315ac50f6a5bc0dcbe9d5dd6c09c6f6a6cdbd1->enter($__internal_bc3510c179016b1c58d3e18630315ac50f6a5bc0dcbe9d5dd6c09c6f6a6cdbd1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_bc3510c179016b1c58d3e18630315ac50f6a5bc0dcbe9d5dd6c09c6f6a6cdbd1->leave($__internal_bc3510c179016b1c58d3e18630315ac50f6a5bc0dcbe9d5dd6c09c6f6a6cdbd1_prof);

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
