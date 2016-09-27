<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_8ea3e80e28ad83d35a657e54fb0fc29192e8268e061e6cdd9f9dc78c2a592293 extends Twig_Template
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
        $__internal_bb432887c99ede7aad178ed1632703a76a2e401df149a3379714f5c2d1fca8f8 = $this->env->getExtension("native_profiler");
        $__internal_bb432887c99ede7aad178ed1632703a76a2e401df149a3379714f5c2d1fca8f8->enter($__internal_bb432887c99ede7aad178ed1632703a76a2e401df149a3379714f5c2d1fca8f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_bb432887c99ede7aad178ed1632703a76a2e401df149a3379714f5c2d1fca8f8->leave($__internal_bb432887c99ede7aad178ed1632703a76a2e401df149a3379714f5c2d1fca8f8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php echo str_replace('{{ widget }}', $view['form']->block($form, 'form_widget_simple'), $money_pattern) ?>*/
/* */
