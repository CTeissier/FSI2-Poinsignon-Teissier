<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_55f661dde9e94a98a556651ec04d0a101ad5885912ce2675f059a6f495e21c9a extends Twig_Template
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
        $__internal_e2bf9929d39c06d152ca9025ac5fd9e86b03335ab7b6f314bad8103fc7cfb3de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e2bf9929d39c06d152ca9025ac5fd9e86b03335ab7b6f314bad8103fc7cfb3de->enter($__internal_e2bf9929d39c06d152ca9025ac5fd9e86b03335ab7b6f314bad8103fc7cfb3de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_e2bf9929d39c06d152ca9025ac5fd9e86b03335ab7b6f314bad8103fc7cfb3de->leave($__internal_e2bf9929d39c06d152ca9025ac5fd9e86b03335ab7b6f314bad8103fc7cfb3de_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
    }
}
