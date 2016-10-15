<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_a802b682b78a14ed60b855064dcb28187c2350c741250aab594fe2b36c6f6f37 extends Twig_Template
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
        $__internal_f0efa2e2560ffb3b424ac2fae5f2d0ad2ef62f73081bfbf9e82ad904cdecf60a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f0efa2e2560ffb3b424ac2fae5f2d0ad2ef62f73081bfbf9e82ad904cdecf60a->enter($__internal_f0efa2e2560ffb3b424ac2fae5f2d0ad2ef62f73081bfbf9e82ad904cdecf60a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_f0efa2e2560ffb3b424ac2fae5f2d0ad2ef62f73081bfbf9e82ad904cdecf60a->leave($__internal_f0efa2e2560ffb3b424ac2fae5f2d0ad2ef62f73081bfbf9e82ad904cdecf60a_prof);

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
