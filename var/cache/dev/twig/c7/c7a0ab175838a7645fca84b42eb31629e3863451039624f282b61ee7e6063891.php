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
        $__internal_3d2397711929a28ebf67c6a05f318f1763f66807283d92f6f7beff67643ff577 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d2397711929a28ebf67c6a05f318f1763f66807283d92f6f7beff67643ff577->enter($__internal_3d2397711929a28ebf67c6a05f318f1763f66807283d92f6f7beff67643ff577_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

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
        
        $__internal_3d2397711929a28ebf67c6a05f318f1763f66807283d92f6f7beff67643ff577->leave($__internal_3d2397711929a28ebf67c6a05f318f1763f66807283d92f6f7beff67643ff577_prof);

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
