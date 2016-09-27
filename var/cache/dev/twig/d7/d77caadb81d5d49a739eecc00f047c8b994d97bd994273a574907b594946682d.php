<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_07451f006dd4b2ef5232c31e2daca61e984b3dd018f448ec551062901d5ca3e3 extends Twig_Template
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
        $__internal_065a78f8289f8ed67c68eb8abd219a90c611f1ecc656b9da747ded7ecc093b5f = $this->env->getExtension("native_profiler");
        $__internal_065a78f8289f8ed67c68eb8abd219a90c611f1ecc656b9da747ded7ecc093b5f->enter($__internal_065a78f8289f8ed67c68eb8abd219a90c611f1ecc656b9da747ded7ecc093b5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_065a78f8289f8ed67c68eb8abd219a90c611f1ecc656b9da747ded7ecc093b5f->leave($__internal_065a78f8289f8ed67c68eb8abd219a90c611f1ecc656b9da747ded7ecc093b5f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!isset($render_rest) || $render_rest): ?>*/
/* <?php echo $view['form']->rest($form) ?>*/
/* <?php endif ?>*/
/* </form>*/
/* */
