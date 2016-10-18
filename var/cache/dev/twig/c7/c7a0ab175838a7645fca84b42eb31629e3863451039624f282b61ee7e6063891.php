<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_26f8b2a8f9853266be43a639b7b2ce4f531b9a1359e31eb39f9b96808d5b2172 extends Twig_Template
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
        $__internal_bc25ad28a5b32847e971459f7bb835888cfb980fddcb5aa2fc64b39eb5590a32 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc25ad28a5b32847e971459f7bb835888cfb980fddcb5aa2fc64b39eb5590a32->enter($__internal_bc25ad28a5b32847e971459f7bb835888cfb980fddcb5aa2fc64b39eb5590a32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

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
        
        $__internal_bc25ad28a5b32847e971459f7bb835888cfb980fddcb5aa2fc64b39eb5590a32->leave($__internal_bc25ad28a5b32847e971459f7bb835888cfb980fddcb5aa2fc64b39eb5590a32_prof);

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
