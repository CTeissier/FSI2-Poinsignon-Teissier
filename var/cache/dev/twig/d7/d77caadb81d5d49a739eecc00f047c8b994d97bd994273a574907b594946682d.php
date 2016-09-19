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
        $__internal_79f7ea658031cba6da34994e04e871774e027b542271d428f1c8135f3851a52b = $this->env->getExtension("native_profiler");
        $__internal_79f7ea658031cba6da34994e04e871774e027b542271d428f1c8135f3851a52b->enter($__internal_79f7ea658031cba6da34994e04e871774e027b542271d428f1c8135f3851a52b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_79f7ea658031cba6da34994e04e871774e027b542271d428f1c8135f3851a52b->leave($__internal_79f7ea658031cba6da34994e04e871774e027b542271d428f1c8135f3851a52b_prof);

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
