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
        $__internal_d7e0dfdbb2b4c3b25fbaa604d69abd17e085b2158042b5a6716b2c74a5470a6a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d7e0dfdbb2b4c3b25fbaa604d69abd17e085b2158042b5a6716b2c74a5470a6a->enter($__internal_d7e0dfdbb2b4c3b25fbaa604d69abd17e085b2158042b5a6716b2c74a5470a6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_d7e0dfdbb2b4c3b25fbaa604d69abd17e085b2158042b5a6716b2c74a5470a6a->leave($__internal_d7e0dfdbb2b4c3b25fbaa604d69abd17e085b2158042b5a6716b2c74a5470a6a_prof);

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
