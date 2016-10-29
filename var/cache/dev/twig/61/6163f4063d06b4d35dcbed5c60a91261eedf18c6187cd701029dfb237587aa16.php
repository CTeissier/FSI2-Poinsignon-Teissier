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
        $__internal_14869eeb0a588d3f11101f2b83ebe5e9d0760eeca1a15c8e6d738b25433a7b64 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_14869eeb0a588d3f11101f2b83ebe5e9d0760eeca1a15c8e6d738b25433a7b64->enter($__internal_14869eeb0a588d3f11101f2b83ebe5e9d0760eeca1a15c8e6d738b25433a7b64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_14869eeb0a588d3f11101f2b83ebe5e9d0760eeca1a15c8e6d738b25433a7b64->leave($__internal_14869eeb0a588d3f11101f2b83ebe5e9d0760eeca1a15c8e6d738b25433a7b64_prof);

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
