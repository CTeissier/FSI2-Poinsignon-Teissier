<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_b975d926d4f7c61432320dd45a475bd7b9fa38573c4f9405fb5f79e11150fb5e extends Twig_Template
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
        $__internal_796d30faeef1cb10c98dd15573774c36211d0f9b2996b481d5f10016dd570c9e = $this->env->getExtension("native_profiler");
        $__internal_796d30faeef1cb10c98dd15573774c36211d0f9b2996b481d5f10016dd570c9e->enter($__internal_796d30faeef1cb10c98dd15573774c36211d0f9b2996b481d5f10016dd570c9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_796d30faeef1cb10c98dd15573774c36211d0f9b2996b481d5f10016dd570c9e->leave($__internal_796d30faeef1cb10c98dd15573774c36211d0f9b2996b481d5f10016dd570c9e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <textarea <?php echo $view['form']->block($form, 'widget_attributes') ?>><?php echo $view->escape($value) ?></textarea>*/
/* */
