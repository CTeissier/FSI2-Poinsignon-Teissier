<?php

/* @Framework/Form/repeated_row.html.php */
class __TwigTemplate_7e06cd436cda1d3361153627d1e2aa85cef96adff99c59a3fd0d8d26d00ea56e extends Twig_Template
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
        $__internal_647adff619c86dad2af09d687310d2afbcbe312e20cca6abd22d9dcb2e48b5a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_647adff619c86dad2af09d687310d2afbcbe312e20cca6abd22d9dcb2e48b5a3->enter($__internal_647adff619c86dad2af09d687310d2afbcbe312e20cca6abd22d9dcb2e48b5a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_rows') ?>
";
        
        $__internal_647adff619c86dad2af09d687310d2afbcbe312e20cca6abd22d9dcb2e48b5a3->leave($__internal_647adff619c86dad2af09d687310d2afbcbe312e20cca6abd22d9dcb2e48b5a3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/repeated_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo \$view['form']->block(\$form, 'form_rows') ?>
";
    }
}
