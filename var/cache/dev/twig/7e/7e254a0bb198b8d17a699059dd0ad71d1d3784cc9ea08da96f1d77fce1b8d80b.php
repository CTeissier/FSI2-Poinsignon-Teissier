<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_df0a4d7a340594f71bb7628d767c5b7f4f59529fe9773fadf02be1579736b551 extends Twig_Template
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
        $__internal_1b367c34ce1b19e3f89f11a851aad55bf85ecf6bcaf259a213b357bccc96ead1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b367c34ce1b19e3f89f11a851aad55bf85ecf6bcaf259a213b357bccc96ead1->enter($__internal_1b367c34ce1b19e3f89f11a851aad55bf85ecf6bcaf259a213b357bccc96ead1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_1b367c34ce1b19e3f89f11a851aad55bf85ecf6bcaf259a213b357bccc96ead1->leave($__internal_1b367c34ce1b19e3f89f11a851aad55bf85ecf6bcaf259a213b357bccc96ead1_prof);

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
