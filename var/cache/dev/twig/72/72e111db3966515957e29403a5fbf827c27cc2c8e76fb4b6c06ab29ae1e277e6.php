<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_576b007215562e221e7a5d26c6e9b3cb9602860cdc273b212e3156de316c54a9 extends Twig_Template
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
        $__internal_c560fc24b8585a3b3e2b3695f524cef60f83a1b59bebf319db7e2dcff9a27932 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c560fc24b8585a3b3e2b3695f524cef60f83a1b59bebf319db7e2dcff9a27932->enter($__internal_c560fc24b8585a3b3e2b3695f524cef60f83a1b59bebf319db7e2dcff9a27932_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_c560fc24b8585a3b3e2b3695f524cef60f83a1b59bebf319db7e2dcff9a27932->leave($__internal_c560fc24b8585a3b3e2b3695f524cef60f83a1b59bebf319db7e2dcff9a27932_prof);

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
