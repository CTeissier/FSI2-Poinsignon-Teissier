<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_72405c3a45bc475dc916e361d3a8e0c7a908cbd8f24f12aacaaf5c34669914fe extends Twig_Template
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
        $__internal_110dca3c983a771cf2136e39d3e572d064718c2e14e8882996b2bd2aab522faa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_110dca3c983a771cf2136e39d3e572d064718c2e14e8882996b2bd2aab522faa->enter($__internal_110dca3c983a771cf2136e39d3e572d064718c2e14e8882996b2bd2aab522faa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_110dca3c983a771cf2136e39d3e572d064718c2e14e8882996b2bd2aab522faa->leave($__internal_110dca3c983a771cf2136e39d3e572d064718c2e14e8882996b2bd2aab522faa_prof);

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
