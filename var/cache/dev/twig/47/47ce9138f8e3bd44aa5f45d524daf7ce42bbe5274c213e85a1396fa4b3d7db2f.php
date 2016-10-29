<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_85574e5f2ea522ce40ade9d80b9174541e01c27c66c825dd1badd01622617184 extends Twig_Template
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
        $__internal_605c2145c859b8d0a4490861b68b846c26d3059303ec88cc2e7ef746886748be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_605c2145c859b8d0a4490861b68b846c26d3059303ec88cc2e7ef746886748be->enter($__internal_605c2145c859b8d0a4490861b68b846c26d3059303ec88cc2e7ef746886748be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_605c2145c859b8d0a4490861b68b846c26d3059303ec88cc2e7ef746886748be->leave($__internal_605c2145c859b8d0a4490861b68b846c26d3059303ec88cc2e7ef746886748be_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
    }
}
