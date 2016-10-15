<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_e7e19ec22931c5b3cdf73edf71f7bbeb03f283f2c69df33d98cda463a3fd905e extends Twig_Template
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
        $__internal_a6c2991d94706395570e606b29bd8d0c9d7aa45bf4742c13a5419791d2aa273e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a6c2991d94706395570e606b29bd8d0c9d7aa45bf4742c13a5419791d2aa273e->enter($__internal_a6c2991d94706395570e606b29bd8d0c9d7aa45bf4742c13a5419791d2aa273e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_a6c2991d94706395570e606b29bd8d0c9d7aa45bf4742c13a5419791d2aa273e->leave($__internal_a6c2991d94706395570e606b29bd8d0c9d7aa45bf4742c13a5419791d2aa273e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'text')) ?>
";
    }
}
