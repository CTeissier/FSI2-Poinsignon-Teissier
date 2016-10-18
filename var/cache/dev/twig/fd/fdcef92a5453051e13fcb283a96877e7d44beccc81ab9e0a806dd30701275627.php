<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_696f2b1508d33566166c9c39047e1e2664342eba43585398f3f4f4bef2fa2760 extends Twig_Template
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
        $__internal_557dd47f4b679070f5c569dbd2ad790c22109fd7dc916e1a03bbbd2d71f01d49 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_557dd47f4b679070f5c569dbd2ad790c22109fd7dc916e1a03bbbd2d71f01d49->enter($__internal_557dd47f4b679070f5c569dbd2ad790c22109fd7dc916e1a03bbbd2d71f01d49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_557dd47f4b679070f5c569dbd2ad790c22109fd7dc916e1a03bbbd2d71f01d49->leave($__internal_557dd47f4b679070f5c569dbd2ad790c22109fd7dc916e1a03bbbd2d71f01d49_prof);

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
