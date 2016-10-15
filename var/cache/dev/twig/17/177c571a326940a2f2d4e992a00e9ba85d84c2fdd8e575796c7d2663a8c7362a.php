<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_67e250191d78c0238f6ca5c2595b10a260b2a4de30080aa0e105e491acb4ba0b extends Twig_Template
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
        $__internal_cd4ad55416cc0419aa2f71c35eab54406f383e1e985845a32102298dcf848fb5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd4ad55416cc0419aa2f71c35eab54406f383e1e985845a32102298dcf848fb5->enter($__internal_cd4ad55416cc0419aa2f71c35eab54406f383e1e985845a32102298dcf848fb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_cd4ad55416cc0419aa2f71c35eab54406f383e1e985845a32102298dcf848fb5->leave($__internal_cd4ad55416cc0419aa2f71c35eab54406f383e1e985845a32102298dcf848fb5_prof);

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
