<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_d564c66b93bc2b639d7c5f4415f9070cd571dfed0e558964e299adf9847db11e extends Twig_Template
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
        $__internal_fc438ba95cb3e172195fe5dc064409506822fbcf759b32a4e907e9a015f1fdc2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc438ba95cb3e172195fe5dc064409506822fbcf759b32a4e907e9a015f1fdc2->enter($__internal_fc438ba95cb3e172195fe5dc064409506822fbcf759b32a4e907e9a015f1fdc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_fc438ba95cb3e172195fe5dc064409506822fbcf759b32a4e907e9a015f1fdc2->leave($__internal_fc438ba95cb3e172195fe5dc064409506822fbcf759b32a4e907e9a015f1fdc2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
    }
}
