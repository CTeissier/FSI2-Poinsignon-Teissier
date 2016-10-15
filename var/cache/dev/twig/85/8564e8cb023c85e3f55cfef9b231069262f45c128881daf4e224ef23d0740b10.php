<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_a236b9a65b7861533aeba706918183ac4aa5f1d8565ddd36f5fbf25997ba4f09 extends Twig_Template
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
        $__internal_7d8841c90b980e5fd826d9ba29e19c1ab2d9e93a953339b809ed327e4e7e8026 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d8841c90b980e5fd826d9ba29e19c1ab2d9e93a953339b809ed327e4e7e8026->enter($__internal_7d8841c90b980e5fd826d9ba29e19c1ab2d9e93a953339b809ed327e4e7e8026_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_7d8841c90b980e5fd826d9ba29e19c1ab2d9e93a953339b809ed327e4e7e8026->leave($__internal_7d8841c90b980e5fd826d9ba29e19c1ab2d9e93a953339b809ed327e4e7e8026_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
    }
}
