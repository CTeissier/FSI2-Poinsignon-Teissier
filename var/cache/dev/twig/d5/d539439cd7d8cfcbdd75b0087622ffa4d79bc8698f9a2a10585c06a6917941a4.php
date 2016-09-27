<?php

/* @Framework/Form/choice_attributes.html.php */
class __TwigTemplate_b47b8490b577463c435aca7ed6f1fc41999ba96802e224a81b1e447b36e77820 extends Twig_Template
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
        $__internal_56f16f62f279b0e5dc583035d7e4890af65fbd0ad45755dd6fe84c0c472f0fa5 = $this->env->getExtension("native_profiler");
        $__internal_56f16f62f279b0e5dc583035d7e4890af65fbd0ad45755dd6fe84c0c472f0fa5->enter($__internal_56f16f62f279b0e5dc583035d7e4890af65fbd0ad45755dd6fe84c0c472f0fa5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"
<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
        
        $__internal_56f16f62f279b0e5dc583035d7e4890af65fbd0ad45755dd6fe84c0c472f0fa5->leave($__internal_56f16f62f279b0e5dc583035d7e4890af65fbd0ad45755dd6fe84c0c472f0fa5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* id="<?php echo $view->escape($id) ?>" name="<?php echo $view->escape($full_name) ?>"*/
/* <?php if ($disabled): ?>disabled="disabled" <?php endif ?>*/
/* <?php foreach ($choice_attr as $k => $v): ?>*/
/* <?php if ($v === true): ?>*/
/* <?php printf('%s="%s" ', $view->escape($k), $view->escape($k)) ?>*/
/* <?php elseif ($v !== false): ?>*/
/* <?php printf('%s="%s" ', $view->escape($k), $view->escape($v)) ?>*/
/* <?php endif ?>*/
/* <?php endforeach ?>*/
/* */
