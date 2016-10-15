<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_f7c9985c8067caeba22e0e35b77fe3e6d68433cd2a58faef5f79b84acb9716cd extends Twig_Template
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
        $__internal_cdda73abedd292ef4c93ea77154e7cf029227691148d28586c04e2f34151a426 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cdda73abedd292ef4c93ea77154e7cf029227691148d28586c04e2f34151a426->enter($__internal_cdda73abedd292ef4c93ea77154e7cf029227691148d28586c04e2f34151a426_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_cdda73abedd292ef4c93ea77154e7cf029227691148d28586c04e2f34151a426->leave($__internal_cdda73abedd292ef4c93ea77154e7cf029227691148d28586c04e2f34151a426_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
    }
}
