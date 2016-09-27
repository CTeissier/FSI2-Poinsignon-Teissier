<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_91dbd338cdc9657ac60f28b02fd5b31dec8755a48d2d567c39b020156e51cae1 extends Twig_Template
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
        $__internal_00f27af5729f5d914f701cf5f3cd7626e5488e12528e6b187ae3846eafaec68f = $this->env->getExtension("native_profiler");
        $__internal_00f27af5729f5d914f701cf5f3cd7626e5488e12528e6b187ae3846eafaec68f->enter($__internal_00f27af5729f5d914f701cf5f3cd7626e5488e12528e6b187ae3846eafaec68f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_00f27af5729f5d914f701cf5f3cd7626e5488e12528e6b187ae3846eafaec68f->leave($__internal_00f27af5729f5d914f701cf5f3cd7626e5488e12528e6b187ae3846eafaec68f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (count($errors) > 0): ?>*/
/*     <ul>*/
/*         <?php foreach ($errors as $error): ?>*/
/*             <li><?php echo $error->getMessage() ?></li>*/
/*         <?php endforeach; ?>*/
/*     </ul>*/
/* <?php endif ?>*/
/* */
