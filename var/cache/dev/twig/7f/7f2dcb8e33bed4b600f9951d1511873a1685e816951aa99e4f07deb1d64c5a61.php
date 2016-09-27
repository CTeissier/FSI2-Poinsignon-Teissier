<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_b1ee6879c2882c0f162acb0a8a304d2939dd5a6ce571b1523020c1baf1356893 extends Twig_Template
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
        $__internal_d5bfb7fc0395ec02ec799352cfc2f6a5dae70d34d71a7b0b5a26c7c03eae3942 = $this->env->getExtension("native_profiler");
        $__internal_d5bfb7fc0395ec02ec799352cfc2f6a5dae70d34d71a7b0b5a26c7c03eae3942->enter($__internal_d5bfb7fc0395ec02ec799352cfc2f6a5dae70d34d71a7b0b5a26c7c03eae3942_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_d5bfb7fc0395ec02ec799352cfc2f6a5dae70d34d71a7b0b5a26c7c03eae3942->leave($__internal_d5bfb7fc0395ec02ec799352cfc2f6a5dae70d34d71a7b0b5a26c7c03eae3942_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/* <?php foreach ($form as $child): ?>*/
/*     <?php echo $view['form']->widget($child) ?>*/
/*     <?php echo $view['form']->label($child, null, array('translation_domain' => $choice_translation_domain)) ?>*/
/* <?php endforeach ?>*/
/* </div>*/
/* */
