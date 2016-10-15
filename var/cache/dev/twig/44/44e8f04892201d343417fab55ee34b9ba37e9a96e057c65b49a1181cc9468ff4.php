<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_9de311152387caa9c2b66c8a7585e70fbd54d7c0e05433adab50c2436629390a extends Twig_Template
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
        $__internal_77a987ecc0898c9b4409647742ca4b52593ae2dc5f1265d025b79a732ebfb507 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_77a987ecc0898c9b4409647742ca4b52593ae2dc5f1265d025b79a732ebfb507->enter($__internal_77a987ecc0898c9b4409647742ca4b52593ae2dc5f1265d025b79a732ebfb507_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_77a987ecc0898c9b4409647742ca4b52593ae2dc5f1265d025b79a732ebfb507->leave($__internal_77a987ecc0898c9b4409647742ca4b52593ae2dc5f1265d025b79a732ebfb507_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
    }
}
