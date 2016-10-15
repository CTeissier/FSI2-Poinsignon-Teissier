<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_ed2eae541a897887d7a1a291b05d42048a7c6c0dc6169957704d341075149eaf extends Twig_Template
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
        $__internal_ea7f9761d2f2ddf2e10b53c85335970ba4018e5422fea517ab568d663d1a26a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea7f9761d2f2ddf2e10b53c85335970ba4018e5422fea517ab568d663d1a26a8->enter($__internal_ea7f9761d2f2ddf2e10b53c85335970ba4018e5422fea517ab568d663d1a26a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_ea7f9761d2f2ddf2e10b53c85335970ba4018e5422fea517ab568d663d1a26a8->leave($__internal_ea7f9761d2f2ddf2e10b53c85335970ba4018e5422fea517ab568d663d1a26a8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
    }
}
