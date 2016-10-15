<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_0e44af4d5c658ff7a9438293b8cb5c9b82579ba82b1983a75f5f345a82fcb17f extends Twig_Template
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
        $__internal_2f3406c08fb20b9a167f35346a32de83fab10f8bb7d0bf7106a06732d128a0cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f3406c08fb20b9a167f35346a32de83fab10f8bb7d0bf7106a06732d128a0cd->enter($__internal_2f3406c08fb20b9a167f35346a32de83fab10f8bb7d0bf7106a06732d128a0cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_2f3406c08fb20b9a167f35346a32de83fab10f8bb7d0bf7106a06732d128a0cd->leave($__internal_2f3406c08fb20b9a167f35346a32de83fab10f8bb7d0bf7106a06732d128a0cd_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
    }
}
